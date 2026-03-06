TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`%` TRIGGER `trg_after_insert_gltd` AFTER INSERT ON `gltd` FOR EACH ROW BEGIN\n    IF NEW.Amount <> 0 THEN\n        CALL SetAccBalance(NEW.AccountCode, NEW.BUnit);\n    END IF;\nEND' 'CREATE DEFINER=`root`@`%` TRIGGER `trgAfterUpdate_SetAccBal` AFTER UPDATE ON `gltd` FOR EACH ROW BEGIN\n    DECLARE v_CurrencyCode INT;\n\n    \n    IF NEW.Amount <> 0 THEN\n        CALL SetAccBalance(OLD.AccountCode, NEW.BUnit);\n        CALL SetAccBalance(NEW.AccountCode, NEW.BUnit);\n    END IF;\n\nEND' 'CREATE DEFINER=`root`@`%` TRIGGER `trgAfterDelete_SetAccBal` AFTER DELETE ON `gltd` FOR EACH ROW BEGIN\n    DECLARE v_AccountCode INT;\n    DECLARE v_BuCode INT;\n    DECLARE v_Amount DOUBLE;\n\n    SET v_AccountCode = OLD.AccountCode;\n    SET v_BuCode = OLD.BUnit;\n    SET v_Amount = OLD.Amount;\n\n    IF v_Amount <> 0 THEN\n        CALL SetAccBalance(v_AccountCode, v_BuCode);\n    END IF;\nEND'
sql_modes=524288 524288 524288
definers='root@%' 'root@%' 'root@%'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_uca1400_ai_ci' 'utf8mb4_uca1400_ai_ci' 'utf8mb4_uca1400_ai_ci'
db_cl_names='utf8mb4_uca1400_ai_ci' 'utf8mb4_uca1400_ai_ci' 'utf8mb4_uca1400_ai_ci'
created=1772516788108147 1772516788143637 1772516788189867

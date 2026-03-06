TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`%` TRIGGER `prevent_system_config_deletion` BEFORE DELETE ON `paccounts` FOR EACH ROW BEGIN\n    IF OLD.ID BETWEEN 1 AND 21 THEN\n        SIGNAL SQLSTATE \'45000\'\n        SET MESSAGE_TEXT = \'Rows with ID 1 to 21 are part of system configuration and cannot be deleted.\';\n    END IF;\nEND'
sql_modes=524288
definers='root@%'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_uca1400_ai_ci'
db_cl_names='utf8mb4_uca1400_ai_ci'
created=1772516788989697

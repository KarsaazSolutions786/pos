TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`%` TRIGGER `BEFORE_SUPPLIER_DELETED` BEFORE DELETE ON `psupplier` FOR EACH ROW DELETE FROM paccounts\nWHERE\n    `ParentAccountCode` = OLD.ID\n    AND `CoaCode` = 2\n    AND `AccType` = "Suppliers"\n    AND `AccSubCode` = 8'
sql_modes=1411383296
definers='root@%'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_uca1400_ai_ci'
created=1772516790566599

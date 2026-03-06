TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`%` TRIGGER `BEFORE_CUSTOMER_DELETED` BEFORE DELETE ON `pcustomer` FOR EACH ROW DELETE FROM paccounts\nWHERE\n    `ParentAccountCode` = OLD.ID\n    AND `CoaCode` = 1\n    AND `AccType` = "Customers"\n    AND `AccSubCode` = 7'
sql_modes=1411383296
definers='root@%'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_uca1400_ai_ci'
created=1772516789356306

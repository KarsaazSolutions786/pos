-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2025 at 06:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karsaaz_pos`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`%` PROCEDURE `CreateCustomerpAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_CreateDate` DATETIME, IN `in_CreateTime` DATETIME, IN `in_Block` INT, IN `Code` INT, IN `VirtualCode` VARCHAR(255))   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        -- Rollback everything if an error occurs
        ROLLBACK;
    END;

    START TRANSACTION;

    -- Insert into pAccounts table
    INSERT INTO pAccounts (
        ParentAccountCode, Code, VirtualCode, BUnit, OldCode,
        CoaCode, AccSubCode, Name, AccType, Remarks,
        UnitCode, UserName, CreateDate, CreateTime, Block, GroupCode
    ) VALUES (
        in_id,
        Code,
        VirtualCode,
        in_BUnit,
        in_OldCode,
        1,
        7,
        in_Name,
        'Customers',
        in_Remarks,
        NULL,
        in_UserName,
        in_CreateDate,
        in_CreateTime,
        in_Block,
        1
    );

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `CreateEmplyeepAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_CreateDate` DATETIME, IN `in_CreateTime` DATETIME, IN `in_Block` INT, IN `Code` INT, IN `VirtualCode` VARCHAR(255))   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL; -- re-throw the error so PHP catches it
    END;

    START TRANSACTION;

    INSERT INTO pAccounts (
        ParentAccountCode, Code, VirtualCode, BUnit, OldCode,
        CoaCode, AccSubCode, Name, AccType, Remarks,
        UnitCode, UserName, CreateDate, CreateTime, Block, GroupCode
    ) VALUES (
        in_id,
        Code,
        VirtualCode,
        in_BUnit,
        in_OldCode,
        1,
        6,
        in_Name,
        'Employes',
        in_Remarks,
        NULL,
        in_UserName,
        in_CreateDate,
        in_CreateTime,
        in_Block,
        1
    );

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `CreateProductitemspAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_CreateDate` DATETIME, IN `in_CreateTime` DATETIME, IN `in_Block` INT, IN `Code` INT, IN `VirtualCode` VARCHAR(255))   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    INSERT INTO pAccounts (
        ParentAccountCode, Code, VirtualCode, BUnit, OldCode,
        CoaCode, AccSubCode, Name, AccType, Remarks,
        UnitCode, UserName, CreateDate, CreateTime, Block, GroupCode
    )
    VALUES (
        in_id,
        Code,
        VirtualCode,
        in_BUnit,
        in_OldCode,
        1,
        5,
        in_Name,
        'Trading Products',
        in_Remarks,
        NULL,
        in_UserName,
        in_CreateDate,
        in_CreateTime,
        in_Block,
        1
    );

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `CreateSupplierpAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_CreateDate` DATETIME, IN `in_CreateTime` DATETIME, IN `in_Block` INT, IN `Code` INT, IN `VirtualCode` VARCHAR(255))   BEGIN
    -- Rollback transaction on any error
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    INSERT INTO pAccounts (
        ParentAccountCode, Code, VirtualCode, BUnit, OldCode,
        CoaCode, AccSubCode, Name, AccType, Remarks,
        UnitCode, UserName, CreateDate, CreateTime, Block, GroupCode
    )
    VALUES (
        in_id,
        Code,
        VirtualCode,
        in_BUnit,
        in_OldCode,
        2,
        8,
        in_Name,
        'Suppliers',
        in_Remarks,
        NULL,
        in_UserName,
        in_CreateDate,
        in_CreateTime,
        in_Block,
        1
    );

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `SetAccBalance` (IN `in_AccountCode` INT, IN `in_BuCode` INT)   BEGIN
    DECLARE v_DrBal DOUBLE DEFAULT 0;
    DECLARE v_CrBal DOUBLE DEFAULT 0;
    DECLARE v_CBal DOUBLE DEFAULT 0;
    DECLARE v_Status VARCHAR(5) DEFAULT '--';
    DECLARE v_AccSubCode INT;
    DECLARE v_CoaCode INT;
    DECLARE v_AccType VARCHAR(50);
    DECLARE v_exists INT DEFAULT 0;
    DECLARE v_nextCode INT;
    DECLARE v_ParentAccountCode INT;
    DECLARE v_pAccountID INT;
    DECLARE v_ParentAccCode INT;

    -- Validate input
    IF in_AccountCode IS NULL OR in_BuCode IS NULL THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'AccountCode and BuCode must not be null';
    END IF;

    -- Calculate debit balance
    SELECT COALESCE(SUM(Amount), 0)
    INTO v_DrBal
    FROM GLTD
    WHERE TStatus = 'Dr'
      AND AccountCode = in_AccountCode
      AND BUnit = in_BuCode;

    -- Calculate credit balance
    SELECT COALESCE(SUM(Amount), 0)
    INTO v_CrBal
    FROM GLTD
    WHERE TStatus = 'Cr'
      AND AccountCode = in_AccountCode
      AND BUnit = in_BuCode;

    SET v_CBal = v_DrBal - v_CrBal;

    -- Determine balance status
    IF v_CBal > 0 THEN
        SET v_Status = 'Dr';
    ELSEIF v_CBal < 0 THEN
        SET v_Status = 'Cr';
    ELSE
        SET v_Status = '--';
    END IF;

    -- Check if record exists
    SELECT COUNT(*) INTO v_exists
    FROM AccountCBal
    WHERE AccountCode = in_AccountCode
      AND BuCode = in_BuCode
      AND AccStatusType = 'Pak';

    IF v_exists > 0 THEN
        -- Update existing record
        UPDATE AccountCBal
        SET CBalance = v_CBal,
            CBalStatus = v_Status,
            UDate = NOW()
        WHERE AccountCode = in_AccountCode
          AND BuCode = in_BuCode
          AND AccStatusType = 'Pak';
    ELSE
        -- Generate next primary key
        SELECT COALESCE(MAX(Code), 0) + 1
        INTO v_nextCode
        FROM AccountCBal;

        -- Get account type info
        SELECT AccSubCode, CoaCode, AccType, ParentAccountCode, ID INTO v_AccSubCode, v_CoaCode, v_AccType, v_ParentAccountCode, v_pAccountID
        FROM pAccounts
        WHERE Code = in_AccountCode
        LIMIT 1;




        -- Insert new row
        INSERT INTO AccountCBal (
            Code, AccountCode, BuCode, AccSubCode, CoaCode, 
            AccountType, CBalance, CBalStatus,
            Remarks, AccStatusType, UDate,
            ParentAccountCode, ParentCode
        )
        VALUES (
            v_nextCode, in_AccountCode, in_BuCode, v_AccSubCode, v_CoaCode,
            v_AccType, v_CBal, v_Status,
            '', 'Pak', NOW(),
            in_AccountCode, v_pAccountID
        );
    END IF;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `sp_insert_bank_pAccount` (IN `in_id` INT, IN `business_id` INT, IN `Code` INT, IN `VirtualCOde` VARCHAR(255), IN `Group_id` INT)   BEGIN
   

    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
    END;

    START TRANSACTION;

    INSERT INTO `pAccounts` (
        `ParentAccountCode`, `Code`, `VirtualCode`, `BUnit`, `OldCode`,
        `CoaCode`, `AccSubCode`, `Name`, `AccType`, `Remarks`,
        `UnitCode`, `UserName`, `CreateDate`, `CreateTime`, `Block`, `GroupCode`
    ) VALUES (
        in_id,
        Code,
        VirtualCode,
        business_id,
        NULL,               -- << always NULL, do NOT save pBank.acoount_no
        1,
        9,
        NULL,
        'Banks',
        NULL,
        NULL,
        NULL,
        CURDATE(),
        CURTIME(),
        0,
        Group_id
    );

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `UpdateCustomerpAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_UpdateDate` DATETIME, IN `in_UpdateTime` DATETIME, IN `in_Block` INT)   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
    END;

    START TRANSACTION;

    -- Update matching pAccounts record
    UPDATE pAccounts
    SET
        BUnit = in_BUnit,
        OldCode = in_OldCode,
        Name = in_Name,
        AccType = 'Customers',
        Remarks = in_Remarks,
        UpdateUser = in_UserName,
        UpdateDate = in_UpdateDate,
        UpdateTime = in_UpdateTime,
        Block = in_Block
    WHERE ParentAccountCode = in_id AND AccSubCode = 7;

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `UpdateEmployeepAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UpdateUser` VARCHAR(50), IN `in_UpdateDate` DATETIME, IN `in_UpdateTime` DATETIME, IN `in_Block` INT)   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    UPDATE pAccounts
    SET
        `BUnit` = in_BUnit,
        `OldCode` = in_OldCode,
        `CoaCode` = 1,
        `AccSubCode` = 6,
        `Name` = in_Name,
        `AccType` = 'Employes',
        `Remarks` = in_Remarks,
        `UnitCode` = NULL,
        `UpdateUser` = in_UpdateUser,
        `UpdateDate` = in_UpdateDate,
        `UpdateTime` = in_UpdateTime,
        `Block` = in_Block,
        `GroupCode` = 1
    WHERE
        `ParentAccountCode` = in_id
        AND `AccSubCode` = 6;

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `UpdatepBank` (IN `in_id` INT, IN `business_id` INT, IN `Code` INT(50), IN `VirtualCode` VARCHAR(255), IN `Group_id` INT)   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
    END;

    START TRANSACTION;

    -- Update matching pAccounts record for Bank
    UPDATE pAccounts
    SET
        BUnit = business_id
    WHERE ParentAccountCode = in_id AND AccSubCode = 9;

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `UpdateProductitemspAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UpdateUser` VARCHAR(50), IN `in_UpdateDate` DATETIME, IN `in_UpdateTime` DATETIME, IN `in_Block` INT)   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    UPDATE pAccounts
    SET
        BUnit = in_BUnit,
        OldCode = in_OldCode,
        CoaCode = 1,
        AccSubCode = 5,
        Name = in_Name,
        AccType = 'Trading Products',
        Remarks = in_Remarks,
        UnitCode = NULL,
        UpdateUser = in_UpdateUser,
        UpdateDate = in_UpdateDate,
        UpdateTime = in_UpdateTime,
        Block = in_Block,
        GroupCode = 1
    WHERE
        ParentAccountCode = in_id
        AND AccSubCode = 5;

    COMMIT;
END$$

CREATE DEFINER=`root`@`%` PROCEDURE `UpdateSupplierpAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UpdateUser` VARCHAR(50), IN `in_UpdateDate` DATETIME, IN `in_UpdateTime` DATETIME, IN `in_Block` INT)   BEGIN
    -- Rollback on any SQL error
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    UPDATE pAccounts
    SET
        BUnit = in_BUnit,
        OldCode = in_OldCode,
        CoaCode = 2,
        AccSubCode = 8,
        Name = in_Name,
        AccType = 'Suppliers',
        Remarks = in_Remarks,
        UnitCode = NULL,
        UpdateUser = in_UpdateUser,
        UpdateDate = in_UpdateDate,
        UpdateTime = in_UpdateTime,
        Block = in_Block,
        GroupCode = 1
    WHERE
        ParentAccountCode = in_id
        AND AccSubCode = 8;

    COMMIT;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `accountcbal`
--

CREATE TABLE `accountcbal` (
  `Code` int(11) NOT NULL,
  `ParentAccountCode` int(11) DEFAULT NULL,
  `ParentCode` int(11) DEFAULT NULL,
  `AccountCode` int(11) NOT NULL,
  `BuCode` int(11) DEFAULT NULL,
  `AccountType` varchar(50) DEFAULT NULL,
  `CBalance` double DEFAULT NULL,
  `CBalStatus` varchar(50) DEFAULT NULL,
  `FcCBalance` double DEFAULT NULL,
  `FCBalStatus` varchar(100) DEFAULT NULL,
  `Remarks` varchar(50) DEFAULT NULL,
  `FcCurrencyCode` int(11) DEFAULT NULL,
  `AccStatusType` varchar(500) DEFAULT NULL,
  `UDate` datetime DEFAULT NULL,
  `AccSubCode` int(11) DEFAULT NULL,
  `CoaCode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountcbal`
--

INSERT INTO `accountcbal` (`Code`, `ParentAccountCode`, `ParentCode`, `AccountCode`, `BuCode`, `AccountType`, `CBalance`, `CBalStatus`, `FcCBalance`, `FCBalStatus`, `Remarks`, `FcCurrencyCode`, `AccStatusType`, `UDate`, `AccSubCode`, `CoaCode`) VALUES
(1, 11, 1, 11, 0, 'Cash', 5000000, 'Dr', NULL, NULL, '', NULL, 'Pak', '2025-09-19 16:07:08', 1, 1),
(2, 13, 3, 13, 0, 'Profit And Loss', -5000000, 'Cr', NULL, NULL, '', NULL, 'Pak', '2025-09-19 16:07:08', 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gltd`
--

CREATE TABLE `gltd` (
  `Code` decimal(18,0) NOT NULL,
  `CodeD` int(18) NOT NULL,
  `BookCode` varchar(100) DEFAULT '0',
  `BookID` varchar(100) DEFAULT NULL,
  `VirtualCode` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `TDate` datetime DEFAULT NULL,
  `BUnit` decimal(18,0) DEFAULT 0,
  `TBook` varchar(50) DEFAULT '',
  `TType` varchar(50) DEFAULT '',
  `ParentAccountCode` int(11) DEFAULT NULL,
  `AccountCode` decimal(18,0) DEFAULT 0,
  `BillNo` varchar(50) DEFAULT '',
  `ChequeNo` varchar(50) DEFAULT '',
  `Narration` text DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `Amount` decimal(18,3) DEFAULT 0.000,
  `StoreCode` decimal(18,0) DEFAULT 0,
  `Qty` decimal(18,5) DEFAULT 0.00000,
  `Weight` decimal(18,3) DEFAULT 0.000,
  `Rate` decimal(18,5) DEFAULT 0.00000,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0,
  `ProductCode` decimal(18,0) DEFAULT 0,
  `ProductGroupCode` decimal(18,0) DEFAULT 0,
  `UnitCode` decimal(18,0) DEFAULT 0,
  `TStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gltd`
--

INSERT INTO `gltd` (`Code`, `CodeD`, `BookCode`, `BookID`, `VirtualCode`, `Status`, `TDate`, `BUnit`, `TBook`, `TType`, `ParentAccountCode`, `AccountCode`, `BillNo`, `ChequeNo`, `Narration`, `Remarks`, `Amount`, `StoreCode`, `Qty`, `Weight`, `Rate`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `ProductCode`, `ProductGroupCode`, `UnitCode`, `TStatus`) VALUES
(199, 560, '0', NULL, NULL, NULL, '2025-09-19 00:00:00', 0, '', 'J.v', 26, 13, '2121212', '12121221', 'Credit Narration Debit Narration', NULL, 5000000.000, 0, 0.00000, 0.000, 0.00000, NULL, '2025-09-19 15:47:06', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'Cr'),
(199, 561, '0', NULL, NULL, NULL, '2025-09-19 00:00:00', 0, '', 'J.v', 1, 11, '2121212', '12121221', 'Debit Narration Debit Narration', NULL, 5000000.000, 0, 0.00000, 0.000, 0.00000, NULL, '2025-09-19 15:47:06', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'Dr'),
(200, 562, '3253', '3', '3-25-3', 'OPEN', '2025-09-19 17:41:50', 1, 'POS', 'Point OF Sale', 0, 11, '', '', NULL, '', NULL, NULL, 0.00000, 0.000, 0.00000, '4', '2025-09-19 17:41:50', '2025-09-19 17:41:50', NULL, NULL, NULL, 0, NULL, NULL, 0, 'Dr'),
(200, 563, '3253', '3', '3-25-3', 'OPEN', '2025-09-19 17:41:50', 1, 'POS', 'Point OF Sale', NULL, 1, '', '', NULL, NULL, 1200.000, 1, 1.00000, 0.000, 1200.00000, '4', '2025-09-19 17:41:50', '2025-09-19 17:41:50', NULL, NULL, NULL, NULL, 1, 1, 1, 'Cr'),
(200, 564, '3253', '3', '3-25-3', 'OPEN', '2025-09-19 17:41:50', 1, 'POS', 'Point OF Sale', NULL, 2, '', '', NULL, NULL, 999999999.990, 1, 1.00000, 0.000, 999999999.99000, '4', '2025-09-19 17:41:50', '2025-09-19 17:41:50', NULL, NULL, NULL, NULL, 2, 1, 1, 'Cr'),
(200, 565, '3253', '3', '3-25-3', 'OPEN', '2025-09-19 17:41:50', 1, 'POS', 'Point OF Sale', NULL, 1, '', '', NULL, NULL, 0.000, 1, 0.00000, 0.000, 0.00000, '4', '2025-09-19 17:41:50', '2025-09-19 17:41:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(200, 566, '3253', '3', '3-25-3', 'OPEN', '2025-09-19 17:41:50', 1, 'POS', 'Point OF Sale', 0, 19, '', '', NULL, NULL, 0.000, 1, NULL, 0.000, NULL, '4', '2025-09-19 17:41:50', '2025-09-19 17:41:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cr');

--
-- Triggers `gltd`
--
DELIMITER $$
CREATE TRIGGER `trgAfterDelete_SetAccBal` AFTER DELETE ON `gltd` FOR EACH ROW BEGIN
    DECLARE v_AccountCode INT;
    DECLARE v_BuCode INT;
    DECLARE v_Amount DOUBLE;

    SET v_AccountCode = OLD.AccountCode;
    SET v_BuCode = OLD.BUnit;
    SET v_Amount = OLD.Amount;

    IF v_Amount <> 0 THEN
        CALL SetAccBalance(v_AccountCode, v_BuCode);
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trgAfterUpdate_SetAccBal` AFTER UPDATE ON `gltd` FOR EACH ROW BEGIN
    DECLARE v_CurrencyCode INT;

    -- If amount is non-zero, call SetAccBalance for both old and new accounts
    IF NEW.Amount <> 0 THEN
        CALL SetAccBalance(OLD.AccountCode, NEW.BUnit);
        CALL SetAccBalance(NEW.AccountCode, NEW.BUnit);
    END IF;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_after_insert_gltd` AFTER INSERT ON `gltd` FOR EACH ROW BEGIN
    IF NEW.Amount <> 0 THEN
        CALL SetAccBalance(NEW.AccountCode, NEW.BUnit);
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `glth`
--

CREATE TABLE `glth` (
  `Code` int(18) NOT NULL,
  `BookCode` varchar(50) DEFAULT NULL,
  `VirtualCode` varchar(500) DEFAULT NULL,
  `TBook` varchar(50) DEFAULT NULL,
  `TType` varchar(50) DEFAULT NULL,
  `TDate` datetime DEFAULT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0,
  `Lock` tinyint(1) DEFAULT 0,
  `TotalAmount` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `glth`
--

INSERT INTO `glth` (`Code`, `BookCode`, `VirtualCode`, `TBook`, `TType`, `TDate`, `BUnit`, `Status`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `Lock`, `TotalAmount`) VALUES
(198, NULL, NULL, 'Journal Voucher', 'J.v', NULL, 0, NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL),
(199, NULL, NULL, 'Journal Voucher', 'J.v', NULL, 0, NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL),
(200, '3253', '3-25-3', 'POS', 'Point OF Sale', '2025-09-19 17:41:50', 1, 'OPEN', NULL, '4', '2025-09-19 17:41:50', '2025-09-19 17:41:50', NULL, NULL, NULL, 0, 0, '1000001200');

-- --------------------------------------------------------

--
-- Table structure for table `karsaaz_pos1uggroups`
--

CREATE TABLE `karsaaz_pos1uggroups` (
  `GroupID` int(11) NOT NULL,
  `Label` varchar(300) DEFAULT NULL,
  `Provider` varchar(10) NOT NULL DEFAULT '',
  `Comment` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karsaaz_pos1ugmembers`
--

CREATE TABLE `karsaaz_pos1ugmembers` (
  `UserName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Provider` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `karsaaz_pos1ugmembers`
--

INSERT INTO `karsaaz_pos1ugmembers` (`UserName`, `GroupID`, `Provider`) VALUES
('admin', -1, '');

-- --------------------------------------------------------

--
-- Table structure for table `karsaaz_pos1ugrights`
--

CREATE TABLE `karsaaz_pos1ugrights` (
  `TableName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL,
  `Page` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `karsaaz_pos1ugrights`
--

INSERT INTO `karsaaz_pos1ugrights` (`TableName`, `GroupID`, `AccessMask`, `Page`) VALUES
('AccountCBal', -1, 'AEDSPI', ''),
('admin_members', -1, 'ADESPIM', NULL),
('admin_rights', -1, 'ADESPIM', NULL),
('admin_users', -1, 'ADESPIM', NULL),
('GLTD', -1, 'ADESPIM', NULL),
('GltH', -1, 'ADESPIM', NULL),
('karsaaz_posuggroups', -1, 'ADESPIM', NULL),
('karsaaz_posugmembers', -1, 'ADESPIM', NULL),
('karsaaz_posugrights', -1, 'ADESPIM', NULL),
('pAccounts', -1, 'ADESPIM', NULL),
('pBank', -1, 'AEDSPI', ''),
('pBU', -1, 'AEDS', ''),
('pCustomer', -1, 'ADESPIM', NULL),
('pEmployee', -1, 'ADESPIM', NULL),
('pProductItems', -1, 'ADESPIM', NULL),
('psAccountSubGroup', -1, 'ADESPIM', NULL),
('psBankGroup', -1, 'AEDSPI', ''),
('psChartofAccounts', -1, 'ADESPIM', NULL),
('psCustomerGroup', -1, 'ADESPIM', NULL),
('psEmployeeGroup', -1, 'ADESPIM', NULL),
('psProductGroup', -1, 'ADESPIM', NULL),
('psSupplierGroup', -1, 'ADESPIM', NULL),
('psUnits', -1, 'ADESPIM', NULL),
('pSupplier', -1, 'ADESPIM', NULL),
('psUserGroup', -1, 'ADESPIM', NULL),
('sClosingMonth', -1, 'AEDSPI', ''),
('tSaleD', -1, 'ADESPIM', NULL),
('tSaleH', -1, 'ADESPIM', NULL),
('umUserInfo', -1, 'ADESPIM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `karsaaz_posuggroups`
--

CREATE TABLE `karsaaz_posuggroups` (
  `GroupID` int(11) NOT NULL,
  `Label` varchar(300) DEFAULT NULL,
  `Provider` varchar(10) NOT NULL DEFAULT '',
  `Comment` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karsaaz_posugmembers`
--

CREATE TABLE `karsaaz_posugmembers` (
  `UserName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `Provider` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `karsaaz_posugmembers`
--

INSERT INTO `karsaaz_posugmembers` (`UserName`, `GroupID`, `Provider`) VALUES
('admin', -1, '');

-- --------------------------------------------------------

--
-- Table structure for table `karsaaz_posugrights`
--

CREATE TABLE `karsaaz_posugrights` (
  `TableName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL,
  `Page` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `karsaaz_posugrights`
--

INSERT INTO `karsaaz_posugrights` (`TableName`, `GroupID`, `AccessMask`, `Page`) VALUES
('GLTD', -1, 'ADESPIM', NULL),
('GltH', -1, 'ADESPIM', NULL),
('pAccounts', -1, 'ADESPIM', NULL),
('pCustomer', -1, 'ADESPIM', NULL),
('pEmployee', -1, 'ADESPIM', NULL),
('pProductItems', -1, 'ADESPIM', NULL),
('psAccountSubGroup', -1, 'ADESPIM', NULL),
('psChartofAccounts', -1, 'ADESPIM', NULL),
('psCustomerGroup', -1, 'ADESPIM', NULL),
('psEmployeeGroup', -1, 'ADESPIM', NULL),
('psProductGroup', -1, 'ADESPIM', NULL),
('psSupplierGroup', -1, 'ADESPIM', NULL),
('psUnits', -1, 'ADESPIM', NULL),
('pSupplier', -1, 'ADESPIM', NULL),
('psUserGroup', -1, 'ADESPIM', NULL),
('tSaleD', -1, 'ADESPIM', NULL),
('tSaleH', -1, 'ADESPIM', NULL),
('umUserInfo', -1, 'ADESPIM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paccounts`
--

CREATE TABLE `paccounts` (
  `ID` bigint(20) NOT NULL,
  `ParentAccountCode` decimal(18,0) DEFAULT 0,
  `Code` int(18) DEFAULT NULL,
  `VirtualCode` varchar(500) DEFAULT '',
  `BUnit` decimal(18,0) DEFAULT 0,
  `OldCode` varchar(50) DEFAULT '',
  `CoaCode` decimal(18,0) DEFAULT 0,
  `AccSubCode` decimal(18,0) DEFAULT 0,
  `Name` varchar(100) DEFAULT '',
  `AccType` varchar(100) DEFAULT '',
  `Remarks` text DEFAULT NULL,
  `UnitCode` decimal(18,4) DEFAULT 0.0000,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0,
  `GroupCode` decimal(18,0) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paccounts`
--

INSERT INTO `paccounts` (`ID`, `ParentAccountCode`, `Code`, `VirtualCode`, `BUnit`, `OldCode`, `CoaCode`, `AccSubCode`, `Name`, `AccType`, `Remarks`, `UnitCode`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `GroupCode`) VALUES
(1, 0, 11, '1-1', 0, '0', 1, 1, 'Cash In Hand', 'Cash', '', 0.0000, 'Muhammad Admin', '2022-04-15 00:00:00', '11:21:43 AM', 'Admin', '2022-04-15 00:00:00', '11:21:46 AM', 0, 0),
(2, 0, 12, '3-2', 0, '0', 3, 25, 'Capital', 'Capital', '', 0.0000, 'Admin', '2022-04-15 00:00:00', '11:22:15 AM', NULL, NULL, NULL, 0, 0),
(3, 0, 13, '0-3', 0, '0', 1, 26, 'Profit And Loss', 'Profit And Loss', '', 0.0000, 'Muhammad Admin', '2022-04-16 00:00:00', '9:36:09 AM', NULL, NULL, NULL, 0, 0),
(4, 0, 14, '0-4', 0, '0', 0, 0, 'Income Summary', 'System Account', '', 0.0000, 'Muhammad Admin', '2022-04-16 00:00:00', '9:49:54 AM', NULL, NULL, NULL, 0, 0),
(5, 0, 15, '1-5', 0, '0', 1, 9, 'Credit / Debit Card', 'Banks', '', 0.0000, 'Muhammad Admin', '2022-06-24 00:00:00', '8:25:45 PM', 'Admin', '2022-06-24 00:00:00', '8:26:10 PM', 0, 0),
(6, 0, 16, '2-6', 0, '0', 2, 16, 'RCT Inword', 'Current Liabilities', '', 0.0000, 'Muhammad Admin', '2022-06-28 00:00:00', '8:52:53 PM', NULL, NULL, NULL, 1, 0),
(7, 0, 17, '1-17', 0, '0', 1, 2, 'RCT Outword', 'Current Asset', '', 0.0000, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(8, 0, 18, '2-18', 0, '0', 2, 16, 'Freight Inword Payable', 'Current Liabilities', '', 0.0000, 'Muhammad Admin', '2022-06-28 00:00:00', '8:52:53 PM', NULL, NULL, NULL, 0, 0),
(9, 0, 19, '2-19', 0, '0', 2, 16, 'Labor Inword Payable', 'Current Liabilities', '', 0.0000, 'Muhammad Admin', '2022-06-28 00:00:00', '8:52:53 PM', NULL, NULL, NULL, 0, 0),
(10, 0, 20, '0-20', 0, '0', 6, 30, 'Trading Sale', 'Sales', '', 0.0000, 'Muhammad Admin', '2022-04-16 00:00:00', '9:49:54 AM', NULL, NULL, NULL, 0, 0),
(11, 0, 21, '0-21', 0, '0', 7, 31, 'Trading Cost', 'Cost', '', 0.0000, 'Muhammad Admin', '2022-04-16 00:00:00', '9:49:54 AM', NULL, NULL, NULL, 0, 0),
(12, 0, 22, '0-22', 0, '0', 6, 30, 'Water Sale', 'Sales', '', 0.0000, 'Muhammad Admin', '2022-04-16 00:00:00', '9:49:54 AM', NULL, NULL, NULL, 0, 0),
(13, 0, 23, '0-23', 0, '0', 7, 31, 'Water Cost', 'Cost', '', 0.0000, 'Muhammad Admin', '2022-04-16 00:00:00', '9:49:54 AM', NULL, NULL, NULL, 0, 0),
(14, 0, 24, '0-24', 0, '0', 6, 30, 'Counter Sale', 'Sales', '', 0.0000, 'Muhammad Admin', '2022-04-16 00:00:00', '9:49:54 AM', NULL, NULL, NULL, 0, 0),
(15, 0, 25, '0-25', 0, '0', 7, 31, 'Counter Cost', 'Cost', '', 0.0000, 'Muhammad Admin', '2022-04-16 00:00:00', '9:49:54 AM', NULL, NULL, NULL, 0, 0),
(16, 0, 26, '4-17', 0, '0', 4, 29, 'Other Income', 'Other Income', '', 0.0000, 'u', '2023-03-14 00:00:00', '7:06:12 PM', NULL, NULL, NULL, 0, 0),
(17, 0, 27, '2-27', 0, '0', 2, 16, 'Salary Payable', 'Current Liabilities', '', 0.0000, 'Muhammad Admin', '2022-06-28 00:00:00', '8:52:53 PM', NULL, NULL, NULL, 0, 0),
(18, 0, 28, '5-28', 0, '0', 5, 19, 'Salary Expense', 'Operating Expenses', '', 0.0000, 'Muhammad Admin', '2022-06-24 00:00:00', '8:25:45 PM', 'Admin', '2022-06-24 00:00:00', '8:26:10 PM', 0, 0),
(19, 0, 29, '5-5', 0, '0', 5, 19, 'Commission', 'Operating Expenses', '', 0.0000, 'Muhammad Admin', '2022-06-24 00:00:00', '8:25:45 PM', 'Admin', '2022-06-24 00:00:00', '8:26:10 PM', 0, 0),
(20, 0, 30, '0-30', 0, '0', 0, 0, 'Stock Transfer', 'System Account', '', 0.0000, 'Muhammad Admin', '2022-06-24 00:00:00', '8:25:45 PM', 'Admin', '2022-06-24 00:00:00', '8:26:10 PM', 0, 0),
(21, 0, 29, '5-5', 0, '0', 5, 19, 'Sales Discount', 'Operating Expenses', '', 0.0000, 'Muhammad Admin', '2022-06-24 00:00:00', '8:25:45 PM', 'Admin', '2022-06-24 00:00:00', '8:26:10 PM', 0, 0),
(22, 1, 71, '1-7-71', 1, NULL, 1, 7, 'zain', 'Customers', NULL, NULL, NULL, '2025-09-17 12:10:59', '2025-09-17 12:10:59', NULL, NULL, NULL, 0, 1),
(23, 2, 72, '1-7-72', 1, NULL, 1, 7, 'ali', 'Customers', NULL, NULL, NULL, '2025-09-17 12:11:08', '2025-09-17 12:11:08', NULL, NULL, NULL, 0, 1),
(24, 1, 91, '9-1', 1, NULL, 2, 9, 'ali bank', 'Banks', '', NULL, 'root@localhost', '2025-09-17 00:00:00', '14:01:44', NULL, NULL, NULL, 0, 0),
(26, 2, 12611, '1-26-1-1', 1, '', 1, 1, 'Title of Account', 'Banks', 'Auto from pBank id=2', 0.0000, 'root@localhost', '2025-09-17 00:00:00', '14:08:15', NULL, NULL, NULL, 0, 1),
(28, 1, 51, '1-5-51', 0, NULL, 1, 5, 'kartoos', 'Trading Products', NULL, NULL, NULL, '2025-09-18 10:49:58', '2025-09-18 10:49:58', NULL, NULL, NULL, 0, 1),
(29, 3, 73, '1-7-73', 1, NULL, 1, 7, 'Zain customer', 'Customers', NULL, NULL, NULL, '2025-09-18 13:59:18', '2025-09-18 13:59:18', NULL, NULL, NULL, 0, 1),
(30, 1, 61, '1-6-61', 1, NULL, 1, 6, 'Zain Employee ', 'Employes', NULL, NULL, NULL, '2025-09-18 13:59:39', '2025-09-18 13:59:39', NULL, NULL, NULL, 0, 1),
(31, 13, 83, '2-8-83', 0, NULL, 2, 8, 'zain Supplier ', 'Suppliers', NULL, NULL, NULL, '2025-09-18 14:00:13', '2025-09-18 14:00:13', NULL, NULL, NULL, 0, 1),
(32, 0, 13211, '1-32-1-1', 1, '', 1, 1, 'zain cash ', '', '', 0.0000, '', NULL, NULL, NULL, NULL, NULL, 0, 1),
(33, 2, 11, '1-5-11', 0, NULL, 1, 5, 'Ak-47', 'Trading Products', NULL, NULL, NULL, '2025-09-19 16:28:34', '2025-09-19 16:28:34', NULL, NULL, NULL, 0, 1);

--
-- Triggers `paccounts`
--
DELIMITER $$
CREATE TRIGGER `prevent_system_config_deletion` BEFORE DELETE ON `paccounts` FOR EACH ROW BEGIN
    IF OLD.ID BETWEEN 1 AND 21 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Rows with ID 1 to 21 are part of system configuration and cannot be deleted.';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pbank`
--

CREATE TABLE `pbank` (
  `id` int(11) NOT NULL,
  `account_title` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `old_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pbank`
--

INSERT INTO `pbank` (`id`, `account_title`, `account_no`, `business_id`, `group_id`, `bank_name`, `old_code`) VALUES
(1, 'ali bank', '78787887788787', 1, 0, 'mcb', '454'),
(2, 'Title of Account', '567567', 1, NULL, 'meezan Bank', '2222');

--
-- Triggers `pbank`
--
DELIMITER $$
CREATE TRIGGER `trg_pBank_after_delete` AFTER DELETE ON `pbank` FOR EACH ROW BEGIN
    DELETE FROM `pAccounts`
     WHERE `ParentAccountCode` = OLD.`id`
       AND `AccSubCode` = 9;

    -- Soft delete alternative:
    -- UPDATE `pAccounts` SET `Block` = 1
    --  WHERE `ParentAccountCode` = OLD.`id`
    --    AND `AccSubCode` = 9;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_pBank_after_insert` AFTER INSERT ON `pbank` FOR EACH ROW BEGIN
    INSERT INTO `pAccounts` (
        `ParentAccountCode`, `Code`, `VirtualCode`, `BUnit`, `OldCode`,
        `CoaCode`, `AccSubCode`, `Name`, `AccType`, `Remarks`,
        `UnitCode`, `UserName`, `CreateDate`, `CreateTime`, `Block`, `GroupCode`
    ) VALUES (
        NEW.`id`,
        CONCAT('9', NEW.`id`),
        CONCAT('9-', NEW.`id`),
        NEW.`business_id`,
        NULL,  -- << force NULL
        2,
        9,
        NEW.`account_title`,
        'Banks',
        CONCAT('Auto from pBank id=', NEW.`id`),
        NULL,
        CURRENT_USER(),
        CURDATE(),
        CURTIME(),
        0,
        New.group_id
    )
    ON DUPLICATE KEY UPDATE
        `BUnit`   = NEW.`business_id`,
        `OldCode` = NULL,            -- << keep NULL on upsert
        `Name`    = NEW.`account_title`,
        `AccType` = 'Banks',
        `Remarks` = CONCAT('Auto from pBank id=', NEW.`id`);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_pBank_after_update` AFTER UPDATE ON `pbank` FOR EACH ROW BEGIN
    UPDATE `pAccounts`
       SET `BUnit`   = NEW.`business_id`,
           `OldCode` = NULL, 
           `Name`    = NEW.`account_title`,
           `AccType` = 'Banks',
           `Remarks` = "",
			`GroupCode` = NEW.group_id
     WHERE `ParentAccountCode` = NEW.`id`
       AND `AccSubCode` = 9;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pbu`
--

CREATE TABLE `pbu` (
  `Code` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `ContactName` varchar(100) DEFAULT NULL,
  `BusinessType` varchar(50) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Address2` varchar(500) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Cell` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `EMail` varchar(50) DEFAULT NULL,
  `WebAddress` varchar(50) DEFAULT NULL,
  `CNIC` varchar(50) DEFAULT NULL,
  `NTNNo` varchar(50) DEFAULT NULL,
  `StnNo` varchar(50) DEFAULT NULL,
  `CurrencyNo` double DEFAULT NULL,
  `BraNo` varchar(50) DEFAULT NULL,
  `Remarks` varchar(1000) DEFAULT NULL,
  `CountryCode` double(11,2) DEFAULT NULL,
  `ProvinceCode` double(11,2) DEFAULT NULL,
  `CityCode` double(11,2) DEFAULT NULL,
  `DivisionCode` double(11,2) DEFAULT NULL,
  `DistrictCode` double(11,2) DEFAULT NULL,
  `TahsileCode` double(11,2) DEFAULT NULL,
  `MainAreaCode` double(11,2) DEFAULT NULL,
  `SubAreaCode` double(11,2) DEFAULT NULL,
  `NameInUrdu` varchar(500) DEFAULT NULL,
  `RemarksInUrdu` varchar(1000) DEFAULT NULL,
  `Pic` longblob DEFAULT NULL,
  `PictureStatus` varchar(50) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `CreatePcName` varchar(50) DEFAULT NULL,
  `CreatePCUser` varchar(50) DEFAULT NULL,
  `CreateLoc` varchar(100) DEFAULT NULL,
  `CreateDevice` varchar(50) DEFAULT NULL,
  `UpdatePcUser` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `UpdatePcName` varchar(50) DEFAULT NULL,
  `UpdateLoc` varchar(100) DEFAULT NULL,
  `UpdateDevice` varchar(100) DEFAULT NULL,
  `TotalUpdate` double(11,2) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT NULL,
  `Lock` tinyint(1) DEFAULT NULL,
  `Hide` tinyint(1) DEFAULT NULL,
  `Bookmark` tinyint(1) DEFAULT NULL,
  `BMStatus` varchar(50) DEFAULT NULL,
  `BMIConID` double(11,2) DEFAULT NULL,
  `BMRowID` double(11,2) DEFAULT NULL,
  `DBRowID` double(11,2) DEFAULT NULL,
  `ECol1` double(11,2) DEFAULT NULL,
  `VirtualCode` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pbu`
--

INSERT INTO `pbu` (`Code`, `Name`, `ContactName`, `BusinessType`, `Address`, `Address2`, `Phone`, `Cell`, `Fax`, `EMail`, `WebAddress`, `CNIC`, `NTNNo`, `StnNo`, `CurrencyNo`, `BraNo`, `Remarks`, `CountryCode`, `ProvinceCode`, `CityCode`, `DivisionCode`, `DistrictCode`, `TahsileCode`, `MainAreaCode`, `SubAreaCode`, `NameInUrdu`, `RemarksInUrdu`, `Pic`, `PictureStatus`, `UserName`, `CreateDate`, `CreateTime`, `CreatePcName`, `CreatePCUser`, `CreateLoc`, `CreateDevice`, `UpdatePcUser`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `UpdatePcName`, `UpdateLoc`, `UpdateDevice`, `TotalUpdate`, `Block`, `Lock`, `Hide`, `Bookmark`, `BMStatus`, `BMIConID`, `BMRowID`, `DBRowID`, `ECol1`, `VirtualCode`) VALUES
(1, 'AquaPeo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pcustomer`
--

CREATE TABLE `pcustomer` (
  `ID` bigint(20) NOT NULL,
  `Code` decimal(18,0) DEFAULT NULL,
  `BUnit` decimal(18,0) DEFAULT 1,
  `OldCode` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `ContactName` varchar(100) DEFAULT NULL,
  `GroupCode` decimal(18,0) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `SaleTaxRegNo` varchar(50) DEFAULT NULL,
  `NTNNo` varchar(100) DEFAULT NULL,
  `CNIC` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `Cell` varchar(50) DEFAULT NULL,
  `WebAddress` varchar(50) DEFAULT NULL,
  `EMail` varchar(50) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `SecurtyDeposit` decimal(18,0) DEFAULT NULL,
  `SaleMenCode` decimal(18,0) DEFAULT NULL,
  `Commission` decimal(18,3) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pcustomer`
--

INSERT INTO `pcustomer` (`ID`, `Code`, `BUnit`, `OldCode`, `Name`, `ContactName`, `GroupCode`, `Address`, `SaleTaxRegNo`, `NTNNo`, `CNIC`, `Phone`, `Fax`, `Cell`, `WebAddress`, `EMail`, `Remarks`, `SecurtyDeposit`, `SaleMenCode`, `Commission`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(1, 71, 1, '', 'zain', '', 11, '', '', '', '', '', '', '', '', '', '', NULL, 1, NULL, '', '2025-09-17 12:10:59', '2025-09-17 12:10:59', NULL, NULL, NULL, 0),
(2, 72, 1, '', 'ali', '', 11, '', '', '', '', '', '', '', '', '', '', NULL, 1, NULL, '', '2025-09-17 12:11:08', '2025-09-17 12:11:08', NULL, NULL, NULL, 0),
(3, 73, 1, '', 'Zain customer', '', 11, '', '', '', '', '', '', '', '', '', '', NULL, 1, NULL, '', '2025-09-18 13:59:18', '2025-09-18 13:59:18', NULL, NULL, NULL, 0);

--
-- Triggers `pcustomer`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_CUSTOMER_DELETED` BEFORE DELETE ON `pcustomer` FOR EACH ROW DELETE FROM pAccounts
WHERE
    `ParentAccountCode` = OLD.ID
    AND `Code` = CONCAT('7', OLD.ID)
    AND `AccSubCode` = 7
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pemployee`
--

CREATE TABLE `pemployee` (
  `ID` bigint(20) NOT NULL,
  `Code` decimal(18,0) DEFAULT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `OldCode` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `FatherName` varchar(100) DEFAULT NULL,
  `EmployeeGroup` decimal(18,0) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Cell` varchar(50) DEFAULT NULL,
  `CNIC` varchar(50) DEFAULT NULL,
  `NTNNo` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `EMail` varchar(50) DEFAULT NULL,
  `PerHourRate` decimal(18,3) DEFAULT NULL,
  `TotalSalary` decimal(18,0) DEFAULT NULL,
  `OfficeTimeFrom` datetime DEFAULT NULL,
  `OfficeTimeTo` datetime DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemployee`
--

INSERT INTO `pemployee` (`ID`, `Code`, `BUnit`, `OldCode`, `Name`, `FatherName`, `EmployeeGroup`, `Gender`, `Address`, `Phone`, `Cell`, `CNIC`, `NTNNo`, `Fax`, `EMail`, `PerHourRate`, `TotalSalary`, `OfficeTimeFrom`, `OfficeTimeTo`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(1, 61, 1, '', 'Zain Employee ', '....', 10, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '2025-09-18 13:59:39', '2025-09-18 13:59:39', NULL, NULL, NULL, 0);

--
-- Triggers `pemployee`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_EMPLOYEE_DELETED` BEFORE DELETE ON `pemployee` FOR EACH ROW DELETE FROM pAccounts
WHERE
    `ParentAccountCode` = OLD.ID
    AND `Code` = CONCAT('6', OLD.ID)
    AND `AccSubCode` = 6
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pproductitems`
--

CREATE TABLE `pproductitems` (
  `ID` bigint(20) NOT NULL,
  `Code` decimal(18,0) DEFAULT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `OldCode` varchar(50) DEFAULT NULL,
  `BarCode` varchar(100) DEFAULT NULL,
  `ProductGroupCode` decimal(18,0) DEFAULT NULL,
  `UnitCode` decimal(18,0) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `rate` double(11,2) NOT NULL,
  `Packing` varchar(50) DEFAULT NULL,
  `PackingQty` decimal(18,0) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0,
  `product_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pproductitems`
--

INSERT INTO `pproductitems` (`ID`, `Code`, `BUnit`, `OldCode`, `BarCode`, `ProductGroupCode`, `UnitCode`, `Name`, `rate`, `Packing`, `PackingQty`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `product_image`) VALUES
(1, 1, NULL, '', '', 0, 1, 'kartoos', 1200.00, '', NULL, '', '', '2025-09-18 10:49:58', '2025-09-18 10:49:58', NULL, '2025-09-18 10:50:17', '2025-09-18 10:50:17', 0, ''),
(2, 2, NULL, '', '', 0, 1, 'Ak-47', 999999999.99, '', NULL, '', '', '2025-09-19 16:28:34', '2025-09-19 16:28:34', NULL, '2025-09-19 16:29:44', '2025-09-19 16:29:44', 0, '');

--
-- Triggers `pproductitems`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_PRODUCTITEMS_DELETED` BEFORE DELETE ON `pproductitems` FOR EACH ROW DELETE FROM pAccounts
WHERE
    `ParentAccountCode` = OLD.ID
    AND `Code` = CONCAT('5', OLD.ID)
    AND `AccSubCode` = 5
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `psaccountsubgroup`
--

CREATE TABLE `psaccountsubgroup` (
  `Code` int(11) NOT NULL,
  `BUnit` decimal(18,0) DEFAULT 0,
  `CofAccCode` decimal(18,0) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `NameInUrdu` varchar(500) DEFAULT '',
  `RemarksInUrdu` varchar(1000) DEFAULT '',
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `CreatePcName` varchar(50) DEFAULT NULL,
  `CreatePCUser` varchar(50) DEFAULT NULL,
  `CreateLoc` varchar(100) DEFAULT '',
  `CreateDevice` varchar(50) DEFAULT '',
  `UpdatePcUser` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `UpdatePcName` varchar(50) DEFAULT NULL,
  `UpdateLoc` varchar(100) DEFAULT '',
  `UpdateDevice` varchar(100) DEFAULT '',
  `TotalUpdate` decimal(18,0) DEFAULT 0,
  `Block` tinyint(1) DEFAULT 0,
  `Lock` tinyint(1) DEFAULT 0,
  `Hide` tinyint(1) DEFAULT 0,
  `Bookmark` tinyint(1) DEFAULT 0,
  `BMStatus` varchar(50) DEFAULT NULL,
  `BMIConID` decimal(18,0) DEFAULT 0,
  `BMRowID` decimal(18,0) DEFAULT 0,
  `DBRowID` decimal(18,0) DEFAULT NULL,
  `ECol1` decimal(18,3) DEFAULT 0.000,
  `ECol2` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psaccountsubgroup`
--

INSERT INTO `psaccountsubgroup` (`Code`, `BUnit`, `CofAccCode`, `Name`, `Remarks`, `NameInUrdu`, `RemarksInUrdu`, `UserName`, `CreateDate`, `CreateTime`, `CreatePcName`, `CreatePCUser`, `CreateLoc`, `CreateDevice`, `UpdatePcUser`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `UpdatePcName`, `UpdateLoc`, `UpdateDevice`, `TotalUpdate`, `Block`, `Lock`, `Hide`, `Bookmark`, `BMStatus`, `BMIConID`, `BMRowID`, `DBRowID`, `ECol1`, `ECol2`) VALUES
(0, 0, 0, 'System Account', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(1, 0, 1, 'Cash', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(2, 0, 1, 'Current Asset', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(3, 0, 1, 'Fixed Asset', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(4, 0, 1, 'Currency', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(5, 0, 1, 'Trading Products', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', 0, 0, 0, 0, 0, NULL, 0, 0, NULL, 0.000, NULL),
(6, 0, 1, 'Employes', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(7, 0, 1, 'Customers', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(8, 0, 2, 'Suppliers', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(9, 0, 1, 'Banks', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(10, 0, 1, 'Row Material', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(11, 0, 1, 'Finished Goods', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(12, 0, 4, 'Services', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(13, 0, 1, 'Long Term Investments', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(14, 0, 1, 'Prepaid Expenses', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(15, 0, 1, 'Intangible Assets', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(16, 0, 2, 'Current Liabilities', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(17, 0, 2, 'Long-Term Liabilities', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(19, 0, 5, 'Operating Expenses', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(20, 0, 5, 'Manufacture Expenses', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(21, 0, 4, 'Business Revenue', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(22, 0, 4, 'Non Business Revenue', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(23, 0, 4, 'Currency Profit', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(25, 0, 3, 'Capital / Equity', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(26, 0, 3, 'Retained Earnings', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(27, 0, 1, 'Goodwill', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(28, 0, 1, 'Other Receiable', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(29, 0, 4, 'Other Income', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(30, 0, 6, 'Sales', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
(31, 0, 6, 'Costs', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `psbankgroup`
--

CREATE TABLE `psbankgroup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pschartofaccounts`
--

CREATE TABLE `pschartofaccounts` (
  `Code` int(11) NOT NULL,
  `BUnit` int(11) DEFAULT 0,
  `CoaCode` decimal(18,0) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pschartofaccounts`
--

INSERT INTO `pschartofaccounts` (`Code`, `BUnit`, `CoaCode`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(1, 0, 0, 'System Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 0, 1, 'Asset Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 0, 2, 'Liability Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 0, 3, 'Equity Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 0, 4, 'Revenue Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 0, 5, 'Expense Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pscustomergroup`
--

CREATE TABLE `pscustomergroup` (
  `ID` bigint(20) NOT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pscustomergroup`
--

INSERT INTO `pscustomergroup` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(11, 0, 'Vip customer', '', '', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psemployeegroup`
--

CREATE TABLE `psemployeegroup` (
  `ID` bigint(20) NOT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psemployeegroup`
--

INSERT INTO `psemployeegroup` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(10, NULL, 'asdasda', 'sdasd', '', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psproductgroup`
--

CREATE TABLE `psproductgroup` (
  `Code` decimal(18,0) NOT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `NameInUrdu` varchar(500) DEFAULT NULL,
  `RemarksInUrdu` varchar(1000) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `CreatePcName` varchar(50) DEFAULT NULL,
  `CreatePCUser` varchar(50) DEFAULT NULL,
  `CreateLoc` varchar(100) DEFAULT '',
  `CreateDevice` varchar(50) DEFAULT '',
  `UpdatePcUser` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `UpdatePcName` varchar(50) DEFAULT NULL,
  `UpdateLoc` varchar(100) DEFAULT '',
  `UpdateDevice` varchar(100) DEFAULT '',
  `TotalUpdate` decimal(18,0) DEFAULT 0,
  `Block` tinyint(1) DEFAULT 0,
  `Lock` tinyint(1) DEFAULT 0,
  `Hide` tinyint(1) DEFAULT 0,
  `Bookmark` tinyint(1) DEFAULT 0,
  `BMStatus` varchar(50) DEFAULT NULL,
  `BMIConID` decimal(18,0) DEFAULT NULL,
  `BMRowID` decimal(18,0) DEFAULT NULL,
  `DBRowID` decimal(18,0) DEFAULT NULL,
  `ECol1` decimal(18,3) DEFAULT NULL,
  `ECol2` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psproductgroup`
--

INSERT INTO `psproductgroup` (`Code`, `BUnit`, `Name`, `Remarks`, `NameInUrdu`, `RemarksInUrdu`, `UserName`, `CreateDate`, `CreateTime`, `CreatePcName`, `CreatePCUser`, `CreateLoc`, `CreateDevice`, `UpdatePcUser`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `UpdatePcName`, `UpdateLoc`, `UpdateDevice`, `TotalUpdate`, `Block`, `Lock`, `Hide`, `Bookmark`, `BMStatus`, `BMIConID`, `BMRowID`, `DBRowID`, `ECol1`, `ECol2`) VALUES
(0, NULL, 'heheheh', '', '', '', '', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `pssuppliergroup`
--

CREATE TABLE `pssuppliergroup` (
  `ID` bigint(20) NOT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pssuppliergroup`
--

INSERT INTO `pssuppliergroup` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(6, NULL, 'ddd', '', '', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psunits`
--

CREATE TABLE `psunits` (
  `ID` bigint(20) NOT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psunits`
--

INSERT INTO `psunits` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(1, NULL, 'Nos', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, NULL, 'Kg', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, NULL, 'Man', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, NULL, 'Ton', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, NULL, 'Litter', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, NULL, 'ML', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, NULL, 'Ctn', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, NULL, 'Beg', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, NULL, 'Days', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, NULL, 'Hours', '', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psupplier`
--

CREATE TABLE `psupplier` (
  `ID` bigint(20) NOT NULL,
  `Code` decimal(18,0) DEFAULT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `OldCode` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `ContactName` varchar(100) DEFAULT NULL,
  `GroupCode` decimal(18,0) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `SaleTaxRegNo` varchar(50) DEFAULT NULL,
  `NTNNo` varchar(100) DEFAULT NULL,
  `CNIC` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `Cell` varchar(50) DEFAULT NULL,
  `WebAddress` varchar(50) DEFAULT NULL,
  `EMail` varchar(50) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psupplier`
--

INSERT INTO `psupplier` (`ID`, `Code`, `BUnit`, `OldCode`, `Name`, `ContactName`, `GroupCode`, `Address`, `SaleTaxRegNo`, `NTNNo`, `CNIC`, `Phone`, `Fax`, `Cell`, `WebAddress`, `EMail`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(11, 81, 1, '', 's1', '', NULL, '', '', '', '', '3000330', '', '', '', '', '', NULL, '2025-09-12 15:42:02', '2025-09-12 15:42:02', NULL, NULL, NULL, 0),
(12, 82, 1, '', 's2', '', NULL, '', '', '', '', '030004499', '', '', '', '', '', NULL, '2025-09-12 15:42:12', '2025-09-12 15:42:12', NULL, NULL, NULL, 0),
(13, 83, NULL, '', 'zain Supplier ', '...........', 6, '', '', '', '', '', '', '', '', '', '', '', '2025-09-18 14:00:13', '2025-09-18 14:00:13', NULL, NULL, NULL, 0);

--
-- Triggers `psupplier`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_SUPPLIER_DELETED` BEFORE DELETE ON `psupplier` FOR EACH ROW DELETE FROM pAccounts
WHERE
    `ParentAccountCode` = OLD.ID
    AND `Code` = CONCAT('8', OLD.ID)
    AND `AccSubCode` = 8
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `psusergroup`
--

CREATE TABLE `psusergroup` (
  `ID` bigint(20) NOT NULL,
  `BUnit` decimal(18,0) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Remarks` text DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psusergroup`
--

INSERT INTO `psusergroup` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(5, 0, 'ad', 'asdadadasd', '', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sclosingmonth`
--

CREATE TABLE `sclosingmonth` (
  `Code` bigint(20) NOT NULL,
  `VMonth` bigint(20) DEFAULT NULL,
  `VYear` bigint(20) DEFAULT NULL,
  `CloseStatus` varchar(50) DEFAULT NULL,
  `DefaultMonth` tinyint(1) DEFAULT NULL,
  `BuCode` bigint(20) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `CreatePcName` varchar(50) DEFAULT NULL,
  `CreatePCUser` varchar(50) DEFAULT NULL,
  `CreateLoc` varchar(100) DEFAULT '',
  `CreateDevice` varchar(50) DEFAULT '',
  `UpdatePcUser` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `UpdatePcName` varchar(50) DEFAULT NULL,
  `TotalUpdate` bigint(20) DEFAULT 0,
  `UpdateLoc` varchar(100) DEFAULT '',
  `UpdateDevice` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sclosingmonth`
--

INSERT INTO `sclosingmonth` (`Code`, `VMonth`, `VYear`, `CloseStatus`, `DefaultMonth`, `BuCode`, `UserName`, `CreateDate`, `CreateTime`, `CreatePcName`, `CreatePCUser`, `CreateLoc`, `CreateDevice`, `UpdatePcUser`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `UpdatePcName`, `TotalUpdate`, `UpdateLoc`, `UpdateDevice`) VALUES
(21, 9, 2025, 'Open', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 0, '', ''),
(23, 10, 2025, 'Open', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 0, '', ''),
(24, 11, 2025, 'Open', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tsaled`
--

CREATE TABLE `tsaled` (
  `Code` int(11) NOT NULL,
  `CodeD` int(11) NOT NULL,
  `VirtualCode` varchar(500) DEFAULT NULL,
  `Tdate` datetime DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `PartyCode` decimal(18,0) DEFAULT NULL,
  `StoreCode` decimal(18,0) DEFAULT NULL,
  `ProductCode` decimal(18,0) DEFAULT NULL,
  `ProductGroupCode` decimal(18,0) DEFAULT NULL,
  `UnitCode` decimal(18,0) DEFAULT NULL,
  `Qty` decimal(18,3) DEFAULT NULL,
  `Rate` decimal(18,3) DEFAULT NULL,
  `Amount` decimal(18,3) DEFAULT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` varchar(50) DEFAULT NULL,
  `UpdateUser` varchar(50) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` varchar(50) DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0,
  `BuCode` decimal(18,3) DEFAULT NULL,
  `TotalNos` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tsaled`
--

INSERT INTO `tsaled` (`Code`, `CodeD`, `VirtualCode`, `Tdate`, `Status`, `PartyCode`, `StoreCode`, `ProductCode`, `ProductGroupCode`, `UnitCode`, `Qty`, `Rate`, `Amount`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `BuCode`, `TotalNos`) VALUES
(63, 122, '1-25-3', '2025-09-19 16:26:33', 'OPEN', 71, 1, 1, 1, 1, 1.000, 1200.000, 1200.000, NULL, '4', '2025-09-19 16:26:33', '2025-09-19 16:26:33', NULL, NULL, NULL, NULL, 1.000, NULL),
(64, 127, '2-25-3', '2025-09-19 16:32:50', NULL, 72, 1, 1, 1, 1, 1.000, 1200.000, 1200.000, '', '4', '2025-09-19 16:32:50', NULL, NULL, NULL, '2025-09-19 16:32:50', 0, 1.000, NULL),
(64, 128, '2-25-3', '2025-09-19 16:32:50', NULL, 72, 1, 2, 1, 1, 1.000, 999999999.990, 999999999.990, '', '4', '2025-09-19 16:32:50', NULL, NULL, NULL, '2025-09-19 16:32:50', 0, 1.000, NULL),
(65, 129, '3-25-3', '2025-09-19 17:41:50', 'OPEN', 71, 1, 1, 1, 1, 1.000, 1200.000, 1200.000, NULL, '4', '2025-09-19 17:41:50', '2025-09-19 17:41:50', NULL, NULL, NULL, NULL, 1.000, NULL),
(65, 130, '3-25-3', '2025-09-19 17:41:50', 'OPEN', 71, 1, 2, 1, 1, 1.000, 999999999.990, 999999999.990, NULL, '4', '2025-09-19 17:41:50', '2025-09-19 17:41:50', NULL, NULL, NULL, NULL, 1.000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tsaleh`
--

CREATE TABLE `tsaleh` (
  `ID` int(20) NOT NULL,
  `Code` int(18) DEFAULT NULL,
  `TMonth` varchar(50) DEFAULT NULL,
  `TYear` varchar(50) DEFAULT NULL,
  `BookCode` int(18) DEFAULT NULL,
  `BookID` int(18) DEFAULT NULL,
  `VirtualCode` varchar(500) DEFAULT NULL,
  `TBook` varchar(50) DEFAULT NULL,
  `TType` varchar(50) DEFAULT NULL,
  `SaleType` varchar(255) DEFAULT NULL,
  `TDate` datetime DEFAULT NULL,
  `BUnit` int(18) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `PartyCode` int(18) DEFAULT NULL,
  `TotalAmount` double(18,3) DEFAULT NULL,
  `FreightAccountCode` int(18) DEFAULT NULL,
  `FreightCharges` decimal(18,3) DEFAULT NULL,
  `LaborAccountCode` int(18) DEFAULT NULL,
  `LaborCharges` double(18,3) DEFAULT NULL,
  `SaleTaxAccCode` int(18) DEFAULT NULL,
  `SaleTaxRate` double(18,3) DEFAULT NULL,
  `SaleTaxAmount` double(18,3) DEFAULT NULL,
  `DiscountAccCode` int(18) DEFAULT NULL,
  `DiscountRemarks` varchar(500) DEFAULT NULL,
  `DiscountRate` double(18,3) DEFAULT NULL,
  `DiscountAmount` double(18,3) DEFAULT NULL,
  `GrandTotal` double(18,3) DEFAULT NULL,
  `SaleMenCode` int(18) DEFAULT NULL,
  `Commission` double(18,3) DEFAULT NULL,
  `Remarks` varchar(1000) DEFAULT NULL,
  `UserName` int(18) DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `CreateTime` time DEFAULT NULL,
  `UpdateUser` int(18) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateTime` time DEFAULT NULL,
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tsaleh`
--

INSERT INTO `tsaleh` (`ID`, `Code`, `TMonth`, `TYear`, `BookCode`, `BookID`, `VirtualCode`, `TBook`, `TType`, `SaleType`, `TDate`, `BUnit`, `Status`, `PartyCode`, `TotalAmount`, `FreightAccountCode`, `FreightCharges`, `LaborAccountCode`, `LaborCharges`, `SaleTaxAccCode`, `SaleTaxRate`, `SaleTaxAmount`, `DiscountAccCode`, `DiscountRemarks`, `DiscountRate`, `DiscountAmount`, `GrandTotal`, `SaleMenCode`, `Commission`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(63, 1253, '09', '25', 3, 3, '1-25-3', 'POS', 'Point OF Sale', 'Cash', '2025-09-19 16:26:33', 1, 'OPEN', 71, 1200.000, NULL, 0.000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.000, 1200.000, 1, 0.000, NULL, 4, '2025-09-19 16:26:33', '16:26:33', NULL, NULL, NULL, 0),
(64, 2253, '09', '25', 3, 3, '2-25-3', 'POS', 'Point OF Sale', 'Cash', '2025-09-19 16:32:50', 1, 'OPEN', 72, 1000001200.000, NULL, 0.000, NULL, NULL, NULL, NULL, NULL, NULL, '', 0.000, 0.000, 1000001200.000, 1, 0.000, NULL, 4, '2025-09-19 16:28:50', '16:28:50', 4, '2025-09-19 16:32:50', '16:32:50', 0),
(65, 3253, '09', '25', 3, 3, '3-25-3', 'POS', 'Point OF Sale', 'Cash', '2025-09-19 17:41:50', 1, 'OPEN', 71, 1000001200.000, NULL, 0.000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.000, 1000001200.000, 1, 0.000, NULL, 4, '2025-09-19 17:41:50', '17:41:50', NULL, NULL, NULL, 0);

--
-- Triggers `tsaleh`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_SALESH_DELETED` BEFORE DELETE ON `tsaleh` FOR EACH ROW DELETE FROM GltH
WHERE `VirtualCode` = OLD.VirtualCode
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `umuserinfo`
--

CREATE TABLE `umuserinfo` (
  `Code` bigint(20) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `CellNo` varchar(50) DEFAULT '',
  `Email` varchar(50) DEFAULT NULL,
  `LoginUserName` varchar(50) DEFAULT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `PasswordHint` varchar(100) DEFAULT NULL,
  `GroupCode` decimal(18,0) DEFAULT NULL,
  `Remarks` varchar(1000) DEFAULT NULL,
  `UserType` tinyint(1) DEFAULT NULL,
  `isAccountActive` tinyint(1) DEFAULT NULL,
  `NoOfAttempt` varchar(100) DEFAULT '10',
  `NoOfWorngAttempt` decimal(18,0) DEFAULT 0,
  `api_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `umuserinfo`
--

INSERT INTO `umuserinfo` (`Code`, `UserName`, `CellNo`, `Email`, `LoginUserName`, `Password`, `PasswordHint`, `GroupCode`, `Remarks`, `UserType`, `isAccountActive`, `NoOfAttempt`, `NoOfWorngAttempt`, `api_key`) VALUES
(4, 'admin', '', 'admin@gmail.com', 'admin', 'admin321', NULL, 1, NULL, NULL, 1, '10', 0, '123'),
(5, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 0, '0ef96b05b288e60e311dfe08057e61d2'),
(6, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 0, '10a9b367f6e9cc64e46c37e1eb5f41d3'),
(7, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 0, '213c5bad379bece1beb840ed2b6b915f'),
(8, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 0, 'abe835f291595aaa09238dd77737d1db'),
(9, 'sdas', '3223234', 'sdf@g.com', 'sdfsd', 'sdfsdf', 'sdfsdf', 0, 'sdfsdfsdfsdfsdf', 0, 1, '15', 0, '3e3c568f4e0cd5a44076eb17a5e0aea1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountcbal`
--
ALTER TABLE `accountcbal`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `gltd`
--
ALTER TABLE `gltd`
  ADD PRIMARY KEY (`CodeD`);

--
-- Indexes for table `glth`
--
ALTER TABLE `glth`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `karsaaz_pos1uggroups`
--
ALTER TABLE `karsaaz_pos1uggroups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `karsaaz_pos1ugmembers`
--
ALTER TABLE `karsaaz_pos1ugmembers`
  ADD PRIMARY KEY (`UserName`(50),`GroupID`,`Provider`);

--
-- Indexes for table `karsaaz_pos1ugrights`
--
ALTER TABLE `karsaaz_pos1ugrights`
  ADD PRIMARY KEY (`TableName`(50),`GroupID`);

--
-- Indexes for table `karsaaz_posuggroups`
--
ALTER TABLE `karsaaz_posuggroups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `karsaaz_posugmembers`
--
ALTER TABLE `karsaaz_posugmembers`
  ADD PRIMARY KEY (`UserName`(50),`GroupID`,`Provider`);

--
-- Indexes for table `karsaaz_posugrights`
--
ALTER TABLE `karsaaz_posugrights`
  ADD PRIMARY KEY (`TableName`(50),`GroupID`);

--
-- Indexes for table `paccounts`
--
ALTER TABLE `paccounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pbank`
--
ALTER TABLE `pbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pbu`
--
ALTER TABLE `pbu`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `pcustomer`
--
ALTER TABLE `pcustomer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pemployee`
--
ALTER TABLE `pemployee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pproductitems`
--
ALTER TABLE `pproductitems`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psaccountsubgroup`
--
ALTER TABLE `psaccountsubgroup`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `psbankgroup`
--
ALTER TABLE `psbankgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pschartofaccounts`
--
ALTER TABLE `pschartofaccounts`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `pscustomergroup`
--
ALTER TABLE `pscustomergroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psemployeegroup`
--
ALTER TABLE `psemployeegroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psproductgroup`
--
ALTER TABLE `psproductgroup`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `pssuppliergroup`
--
ALTER TABLE `pssuppliergroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psunits`
--
ALTER TABLE `psunits`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psupplier`
--
ALTER TABLE `psupplier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psusergroup`
--
ALTER TABLE `psusergroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sclosingmonth`
--
ALTER TABLE `sclosingmonth`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `tsaled`
--
ALTER TABLE `tsaled`
  ADD PRIMARY KEY (`CodeD`);

--
-- Indexes for table `tsaleh`
--
ALTER TABLE `tsaleh`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `umuserinfo`
--
ALTER TABLE `umuserinfo`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gltd`
--
ALTER TABLE `gltd`
  MODIFY `CodeD` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567;

--
-- AUTO_INCREMENT for table `glth`
--
ALTER TABLE `glth`
  MODIFY `Code` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `karsaaz_pos1uggroups`
--
ALTER TABLE `karsaaz_pos1uggroups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karsaaz_posuggroups`
--
ALTER TABLE `karsaaz_posuggroups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paccounts`
--
ALTER TABLE `paccounts`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pbank`
--
ALTER TABLE `pbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pbu`
--
ALTER TABLE `pbu`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pcustomer`
--
ALTER TABLE `pcustomer`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemployee`
--
ALTER TABLE `pemployee`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pproductitems`
--
ALTER TABLE `pproductitems`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psaccountsubgroup`
--
ALTER TABLE `psaccountsubgroup`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `psbankgroup`
--
ALTER TABLE `psbankgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pschartofaccounts`
--
ALTER TABLE `pschartofaccounts`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pscustomergroup`
--
ALTER TABLE `pscustomergroup`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `psemployeegroup`
--
ALTER TABLE `psemployeegroup`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pssuppliergroup`
--
ALTER TABLE `pssuppliergroup`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `psunits`
--
ALTER TABLE `psunits`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `psupplier`
--
ALTER TABLE `psupplier`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `psusergroup`
--
ALTER TABLE `psusergroup`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sclosingmonth`
--
ALTER TABLE `sclosingmonth`
  MODIFY `Code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tsaled`
--
ALTER TABLE `tsaled`
  MODIFY `CodeD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `tsaleh`
--
ALTER TABLE `tsaleh`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `umuserinfo`
--
ALTER TABLE `umuserinfo`
  MODIFY `Code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

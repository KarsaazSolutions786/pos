-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Jul 24, 2025 at 10:41 AM
-- Server version: 10.5.29-MariaDB-ubu2004
-- PHP Version: 8.2.27

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
CREATE  PROCEDURE `CreateCustomerpAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_CreateDate` DATETIME, IN `in_CreateTime` DATETIME, IN `in_Block` INT)   BEGIN
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
        CONCAT('7', in_id),
        CONCAT('7-', in_id),
        in_BUnit,
        in_OldCode,
        2,
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

CREATE  PROCEDURE `CreateEmplyeepAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_CreateDate` DATETIME, IN `in_CreateTime` DATETIME, IN `in_Block` INT)   BEGIN
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
        CONCAT('6', in_id),
        CONCAT('6-', in_id),
        in_BUnit,
        in_OldCode,
        2,
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

CREATE  PROCEDURE `CreateProductitemspAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_CreateDate` DATETIME, IN `in_CreateTime` DATETIME, IN `in_Block` INT)   BEGIN
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
        CONCAT('5', in_id),
        CONCAT('5-', in_id),
        in_BUnit,
        in_OldCode,
        2,
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

CREATE  PROCEDURE `CreateSupplierpAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_CreateDate` DATETIME, IN `in_CreateTime` DATETIME, IN `in_Block` INT)   BEGIN
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
        CONCAT('8', in_id),
        CONCAT('8-', in_id),
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

CREATE  PROCEDURE `SetAccBalance` (IN `in_AccountCode` INT, IN `in_BuCode` INT)   BEGIN
    DECLARE v_DrBal DOUBLE DEFAULT 0;
    DECLARE v_CrBal DOUBLE DEFAULT 0;
    DECLARE v_CBal DOUBLE DEFAULT 0;
    DECLARE v_Status VARCHAR(5) DEFAULT '--';
    DECLARE v_AccTypeCode INT;
    DECLARE v_AccType VARCHAR(50);
    DECLARE v_exists INT DEFAULT 0;
    DECLARE v_nextCode INT;
    DECLARE v_BookCode INT;
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
        SELECT AccSubCode INTO v_AccTypeCode
        FROM pAccounts
        WHERE Code = in_AccountCode
        LIMIT 1;

        SELECT Name INTO v_AccType
        FROM psAccountSubGroup
        WHERE Code = v_AccTypeCode
        LIMIT 1;

        -- Get BookCode and ParentAccountCode from GLTD
        SELECT BookCode, ParentAccountCode
        INTO v_BookCode, v_ParentAccCode
        FROM GLTD
        WHERE AccountCode = in_AccountCode
          AND BUnit = in_BuCode
        LIMIT 1;

        -- Insert new row
        INSERT INTO AccountCBal (
            Code, AccountCode, BuCode, AccountTypeCode,
            AccountType, CBalance, CBalStatus,
            Remarks, AccStatusType, UDate,
            ParentAccountCode, ParentCode
        )
        VALUES (
            v_nextCode, in_AccountCode, in_BuCode, v_AccTypeCode,
            v_AccType, v_CBal, v_Status,
            '', 'Pak', NOW(),
            v_ParentAccCode, v_BookCode
        );
    END IF;
END$$

CREATE  PROCEDURE `UpdateCustomerpAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UserName` VARCHAR(50), IN `in_UpdateDate` DATETIME, IN `in_UpdateTime` DATETIME, IN `in_Block` INT)   BEGIN
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

CREATE  PROCEDURE `UpdateEmployeepAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UpdateUser` VARCHAR(50), IN `in_UpdateDate` DATETIME, IN `in_UpdateTime` DATETIME, IN `in_Block` INT)   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    UPDATE pAccounts
    SET
        `ParentAccountCode` = in_id,
        `Code` = CONCAT('6', in_id),
        `VirtualCode` = CONCAT('6-', in_id),
        `BUnit` = in_BUnit,
        `OldCode` = in_OldCode,
        `CoaCode` = 2,
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
        AND `Code` = CONCAT('6', in_id)
        AND `AccSubCode` = 6;

    COMMIT;
END$$

CREATE  PROCEDURE `UpdateProductitemspAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UpdateUser` VARCHAR(50), IN `in_UpdateDate` DATETIME, IN `in_UpdateTime` DATETIME, IN `in_Block` INT)   BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    UPDATE pAccounts
    SET
        ParentAccountCode = in_id,
        Code = CONCAT('5', in_id),
        VirtualCode = CONCAT('5-', in_id),
        BUnit = in_BUnit,
        OldCode = in_OldCode,
        CoaCode = 2,
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
        AND Code = CONCAT('5', in_id)
        AND AccSubCode = 5;

    COMMIT;
END$$

CREATE  PROCEDURE `UpdateSupplierpAccounts` (IN `in_id` INT, IN `in_BUnit` INT, IN `in_OldCode` VARCHAR(50), IN `in_Name` VARCHAR(255), IN `in_Remarks` TEXT, IN `in_UpdateUser` VARCHAR(50), IN `in_UpdateDate` DATETIME, IN `in_UpdateTime` DATETIME, IN `in_Block` INT)   BEGIN
    -- Rollback on any SQL error
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        RESIGNAL;
    END;

    START TRANSACTION;

    UPDATE pAccounts
    SET
        ParentAccountCode = in_id,
        Code = CONCAT('8', in_id),
        VirtualCode = CONCAT('8-', in_id),
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
        AND Code = CONCAT('8', in_id)
        AND AccSubCode = 8;

    COMMIT;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `AccountCBal`
--

CREATE TABLE `AccountCBal` (
  `Code` int(11) NOT NULL,
  `ParentAccountCode` int(11) DEFAULT NULL,
  `ParentCode` int(11) DEFAULT NULL,
  `AccountCode` int(11) NOT NULL,
  `BuCode` int(11) DEFAULT NULL,
  `AccountTypeCode` int(11) DEFAULT NULL,
  `AccountType` varchar(50) DEFAULT NULL,
  `CBalance` double DEFAULT NULL,
  `CBalStatus` varchar(50) DEFAULT NULL,
  `FcCBalance` double DEFAULT NULL,
  `FCBalStatus` varchar(100) DEFAULT NULL,
  `Remarks` varchar(50) DEFAULT NULL,
  `FcCurrencyCode` int(11) DEFAULT NULL,
  `AccStatusType` varchar(500) DEFAULT NULL,
  `UDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `AccountCBal`
--

INSERT INTO `AccountCBal` (`Code`, `ParentAccountCode`, `ParentCode`, `AccountCode`, `BuCode`, `AccountTypeCode`, `AccountType`, `CBalance`, `CBalStatus`, `FcCBalance`, `FCBalStatus`, `Remarks`, `FcCurrencyCode`, `AccStatusType`, `UDate`) VALUES
(1, 9, 1253, 12, 1, 25, 'Capital / Equity', -4500, 'Cr', NULL, NULL, '', NULL, 'Pak', '2025-07-24 10:40:39'),
(2, 9, 1253, 19, 1, 16, 'Current Liabilities', 0, '--', NULL, NULL, '', NULL, 'Pak', '2025-07-24 10:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `GLTD`
--

CREATE TABLE `GLTD` (
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
  `CreateDate` datetime DEFAULT NULL,
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
-- Dumping data for table `GLTD`
--

INSERT INTO `GLTD` (`Code`, `CodeD`, `BookCode`, `BookID`, `VirtualCode`, `Status`, `TDate`, `BUnit`, `TBook`, `TType`, `ParentAccountCode`, `AccountCode`, `BillNo`, `ChequeNo`, `Narration`, `Remarks`, `Amount`, `StoreCode`, `Qty`, `Weight`, `Rate`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `ProductCode`, `ProductGroupCode`, `UnitCode`, `TStatus`) VALUES
(5, 23, '1253', '3', '1-25-3', 'OPEN', '2025-07-23 16:19:14', 1, 'POS', 'Point OF Sale', 9, 12, '', '', NULL, 'New item', 500.000, 1, 1.00000, 0.000, 500.00000, 'admin', '2025-07-23 16:19:14', '2025-07-23 16:19:14', NULL, NULL, NULL, NULL, 2, 1, NULL, 'Cr'),
(5, 24, '1253', '3', '1-25-3', 'OPEN', '2025-07-23 16:19:14', 1, 'POS', 'Point OF Sale', 9, 19, '', '', NULL, NULL, 25.000, 1, 0.00000, 0.000, 0.00000, NULL, '2025-07-23 16:19:14', '2025-07-23 16:19:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(5, 25, '1253', '3', '1-25-3', 'OPEN', '2025-07-23 16:19:14', 1, 'POS', 'Point OF Sale', 9, 19, '', '', NULL, NULL, 25.000, 1, NULL, 0.000, NULL, NULL, '2025-07-23 16:19:14', '2025-07-23 16:19:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cr'),
(9, 32, '2253', '3', '2-25-3', 'OPEN', '2025-07-24 12:22:58', 1, 'POS', 'Point OF Sale', 13, 12, '', '', NULL, NULL, NULL, NULL, 0.00000, 0.000, 0.00000, '1', '2025-07-24 12:22:58', '2025-07-24 12:22:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(9, 33, '2253', '3', '2-25-3', 'OPEN', '2025-07-24 12:22:58', 1, 'POS', 'Point OF Sale', 13, 12, '', '', NULL, 'Detail remarks', 500.000, 1, 10.00000, 0.000, 50.00000, '1', '2025-07-24 12:22:58', '2025-07-24 12:22:58', NULL, NULL, NULL, NULL, 1, 1, 1, 'Cr'),
(9, 34, '2253', '3', '2-25-3', 'OPEN', '2025-07-24 12:22:58', 1, 'POS', 'Point OF Sale', 13, 12, '', '', NULL, 'Another detail remarks', 500.000, 1, 5.00000, 0.000, 100.00000, '1', '2025-07-24 12:22:58', '2025-07-24 12:22:58', NULL, NULL, NULL, NULL, 2, 2, 1, 'Cr'),
(9, 35, '2253', '3', '2-25-3', 'OPEN', '2025-07-24 12:22:58', 1, 'POS', 'Point OF Sale', 13, 19, '', '', NULL, NULL, 15.000, 1, 0.00000, 0.000, 0.00000, '1', '2025-07-24 12:22:58', '2025-07-24 12:22:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(9, 36, '2253', '3', '2-25-3', 'OPEN', '2025-07-24 12:22:58', 1, 'POS', 'Point OF Sale', 13, 19, '', '', NULL, NULL, 15.000, 1, NULL, 0.000, NULL, '1', '2025-07-24 12:22:58', '2025-07-24 12:22:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cr'),
(10, 37, '3253', '3', '3-25-3', 'OPEN', '2025-07-24 12:23:20', 1, 'POS', 'Point OF Sale', 14, 12, '', '', NULL, NULL, NULL, NULL, 0.00000, 0.000, 0.00000, '1', '2025-07-24 12:23:20', '2025-07-24 12:23:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(10, 38, '3253', '3', '3-25-3', 'OPEN', '2025-07-24 12:23:20', 1, 'POS', 'Point OF Sale', 14, 12, '', '', NULL, 'Detail remarks', 500.000, 1, 10.00000, 0.000, 50.00000, '1', '2025-07-24 12:23:20', '2025-07-24 12:23:20', NULL, NULL, NULL, NULL, 1, 1, 1, 'Cr'),
(10, 39, '3253', '3', '3-25-3', 'OPEN', '2025-07-24 12:23:20', 1, 'POS', 'Point OF Sale', 14, 12, '', '', NULL, 'Another detail remarks', 500.000, 1, 5.00000, 0.000, 100.00000, '1', '2025-07-24 12:23:20', '2025-07-24 12:23:20', NULL, NULL, NULL, NULL, 2, 2, 1, 'Cr'),
(10, 40, '3253', '3', '3-25-3', 'OPEN', '2025-07-24 12:23:20', 1, 'POS', 'Point OF Sale', 14, 19, '', '', NULL, NULL, 15.000, 1, 0.00000, 0.000, 0.00000, '1', '2025-07-24 12:23:20', '2025-07-24 12:23:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(10, 41, '3253', '3', '3-25-3', 'OPEN', '2025-07-24 12:23:20', 1, 'POS', 'Point OF Sale', 14, 19, '', '', NULL, NULL, 15.000, 1, NULL, 0.000, NULL, '1', '2025-07-24 12:23:20', '2025-07-24 12:23:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cr'),
(11, 42, '4253', '3', '4-25-3', 'OPEN', '2025-07-24 12:40:00', 1, 'POS', 'Point OF Sale', 15, 12, '', '', NULL, NULL, NULL, NULL, 0.00000, 0.000, 0.00000, '1', '2025-07-24 12:40:00', '2025-07-24 12:40:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(11, 43, '4253', '3', '4-25-3', 'OPEN', '2025-07-24 12:40:00', 1, 'POS', 'Point OF Sale', 15, 12, '', '', NULL, 'Detail remarks', 500.000, 1, 10.00000, 0.000, 50.00000, '1', '2025-07-24 12:40:00', '2025-07-24 12:40:00', NULL, NULL, NULL, NULL, 1, 1, 1, 'Cr'),
(11, 44, '4253', '3', '4-25-3', 'OPEN', '2025-07-24 12:40:00', 1, 'POS', 'Point OF Sale', 15, 12, '', '', NULL, 'Another detail remarks', 500.000, 1, 5.00000, 0.000, 100.00000, '1', '2025-07-24 12:40:00', '2025-07-24 12:40:00', NULL, NULL, NULL, NULL, 2, 2, 1, 'Cr'),
(11, 45, '4253', '3', '4-25-3', 'OPEN', '2025-07-24 12:40:00', 1, 'POS', 'Point OF Sale', 15, 19, '', '', NULL, NULL, 15.000, 1, 0.00000, 0.000, 0.00000, '1', '2025-07-24 12:40:00', '2025-07-24 12:40:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(11, 46, '4253', '3', '4-25-3', 'OPEN', '2025-07-24 12:40:00', 1, 'POS', 'Point OF Sale', 15, 19, '', '', NULL, NULL, 15.000, 1, NULL, 0.000, NULL, '1', '2025-07-24 12:40:00', '2025-07-24 12:40:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cr'),
(12, 47, '5253', '3', '5-25-3', 'OPEN', '2025-07-24 12:40:39', 1, 'POS', 'Point OF Sale', 16, 12, '', '', NULL, NULL, NULL, NULL, 0.00000, 0.000, 0.00000, '1', '2025-07-24 12:40:39', '2025-07-24 12:40:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(12, 48, '5253', '3', '5-25-3', 'OPEN', '2025-07-24 12:40:39', 1, 'POS', 'Point OF Sale', 16, 12, '', '', NULL, 'Detail remarks', 500.000, 1, 10.00000, 0.000, 50.00000, '1', '2025-07-24 12:40:39', '2025-07-24 12:40:39', NULL, NULL, NULL, NULL, 1, 1, 1, 'Cr'),
(12, 49, '5253', '3', '5-25-3', 'OPEN', '2025-07-24 12:40:39', 1, 'POS', 'Point OF Sale', 16, 12, '', '', NULL, 'Another detail remarks', 500.000, 1, 5.00000, 0.000, 100.00000, '1', '2025-07-24 12:40:39', '2025-07-24 12:40:39', NULL, NULL, NULL, NULL, 2, 2, 1, 'Cr'),
(12, 50, '5253', '3', '5-25-3', 'OPEN', '2025-07-24 12:40:39', 1, 'POS', 'Point OF Sale', 16, 19, '', '', NULL, NULL, 15.000, 1, 0.00000, 0.000, 0.00000, '1', '2025-07-24 12:40:39', '2025-07-24 12:40:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr'),
(12, 51, '5253', '3', '5-25-3', 'OPEN', '2025-07-24 12:40:39', 1, 'POS', 'Point OF Sale', 16, 19, '', '', NULL, NULL, 15.000, 1, NULL, 0.000, NULL, '1', '2025-07-24 12:40:39', '2025-07-24 12:40:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cr');

--
-- Triggers `GLTD`
--
DELIMITER $$
CREATE TRIGGER `trgAfterDelete_SetAccBal` AFTER DELETE ON `GLTD` FOR EACH ROW BEGIN
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
CREATE TRIGGER `trgAfterUpdate_SetAccBal` AFTER UPDATE ON `GLTD` FOR EACH ROW BEGIN
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
CREATE TRIGGER `trg_after_insert_gltd` AFTER INSERT ON `GLTD` FOR EACH ROW BEGIN
    IF NEW.Amount <> 0 THEN
        CALL SetAccBalance(NEW.AccountCode, NEW.BUnit);
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `GltH`
--

CREATE TABLE `GltH` (
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
-- Dumping data for table `GltH`
--

INSERT INTO `GltH` (`Code`, `BookCode`, `VirtualCode`, `TBook`, `TType`, `TDate`, `BUnit`, `Status`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `Lock`, `TotalAmount`) VALUES
(5, '1253', '1-25-3', 'POS', 'Point OF Sale', '2025-07-23 16:19:14', 1, 'OPEN', 'Updated record', NULL, '2025-07-23 16:19:14', '2025-07-23 16:19:14', NULL, NULL, NULL, 0, 0, '1475'),
(9, '2253', '2-25-3', 'POS', 'Point OF Sale', '2025-07-24 12:22:58', 1, 'OPEN', 'Customer order remarks', '1', '2025-07-24 12:22:58', '2025-07-24 12:22:58', NULL, NULL, NULL, 0, 0, '1030.5'),
(10, '3253', '3-25-3', 'POS', 'Point OF Sale', '2025-07-24 12:23:20', 1, 'OPEN', 'Customer order remarks', '1', '2025-07-24 12:23:20', '2025-07-24 12:23:20', NULL, NULL, NULL, 0, 0, '1030.5'),
(11, '4253', '4-25-3', 'POS', 'Point OF Sale', '2025-07-24 12:40:00', 1, 'OPEN', 'Customer order remarks', '1', '2025-07-24 12:40:00', '2025-07-24 12:40:00', NULL, NULL, NULL, 0, 0, '1030.5'),
(12, '5253', '5-25-3', 'POS', 'Point OF Sale', '2025-07-24 12:40:39', 1, 'OPEN', 'Customer order remarks', '1', '2025-07-24 12:40:39', '2025-07-24 12:40:39', NULL, NULL, NULL, 0, 0, '1030.5');

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
('admin_members', -1, 'ADESPIM', NULL),
('admin_rights', -1, 'ADESPIM', NULL),
('admin_users', -1, 'ADESPIM', NULL),
('GLTD', -1, 'ADESPIM', NULL),
('GltH', -1, 'ADESPIM', NULL),
('karsaaz_posuggroups', -1, 'ADESPIM', NULL),
('karsaaz_posugmembers', -1, 'ADESPIM', NULL),
('karsaaz_posugrights', -1, 'ADESPIM', NULL),
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
-- Table structure for table `pAccounts`
--

CREATE TABLE `pAccounts` (
  `ID` bigint(20) NOT NULL,
  `ParentAccountCode` decimal(18,0) DEFAULT 0,
  `Code` decimal(18,0) NOT NULL,
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
-- Dumping data for table `pAccounts`
--

INSERT INTO `pAccounts` (`ID`, `ParentAccountCode`, `Code`, `VirtualCode`, `BUnit`, `OldCode`, `CoaCode`, `AccSubCode`, `Name`, `AccType`, `Remarks`, `UnitCode`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `GroupCode`) VALUES
(1, 0, 11, '1-1', 0, NULL, 1, 1, 'Cash In Hand', 'Cash', NULL, 0.0000, '1', '2022-04-15 11:21:43', '11:21:43 AM', '1', '2022-04-15 11:21:46', '11:21:46 AM', 0, 0),
(2, 0, 12, '3-2', 0, NULL, 3, 25, 'Capital', 'Capital', NULL, 0.0000, '1', '2022-04-15 11:22:15', NULL, NULL, NULL, NULL, 0, 0),
(3, 0, 13, '0-3', 0, NULL, 1, 26, 'Profit And Loss', 'Profit And Loss', NULL, 0.0000, '1', '2022-04-16 09:36:09', NULL, NULL, NULL, NULL, 0, 0),
(4, 0, 14, '0-4', 0, NULL, 0, 0, 'Income Summary', 'System Account', NULL, 0.0000, '1', '2022-04-16 09:49:54', NULL, NULL, NULL, NULL, 0, 0),
(5, 0, 15, '1-5', 0, NULL, 1, 9, 'Credit / Debit Card', 'Banks', NULL, 0.0000, '1', '2022-06-24 20:25:45', '20:25:45 PM', '1', '2022-06-24 20:26:10', '20:26:10 PM', 0, 0),
(6, 0, 16, '2-6', 0, NULL, 2, 16, 'RCT Inword', 'Current Liabilities', NULL, 0.0000, '1', '2022-06-28 20:52:53', '20:52:53 PM', NULL, NULL, NULL, 1, 0),
(7, 0, 17, '1-17', 0, NULL, 1, 2, 'RCT Outword', 'Current Asset', NULL, 0.0000, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(8, 0, 18, '2-18', 0, NULL, 2, 16, 'Freight Inword Payable', 'Current Liabilities', NULL, 0.0000, '1', '2022-06-28 20:52:53', NULL, NULL, NULL, NULL, 0, 0),
(9, 0, 19, '2-19', 0, NULL, 2, 16, 'Labor Inword Payable', 'Current Liabilities', NULL, 0.0000, '1', '2022-06-28 20:52:53', NULL, NULL, NULL, NULL, 0, 0),
(10, 0, 20, '0-20', 0, NULL, 6, 30, 'Trading Sale', 'Sales', NULL, 0.0000, '1', '2022-04-16 09:49:54', NULL, NULL, NULL, NULL, 0, 0),
(11, 0, 21, '0-21', 0, NULL, 7, 31, 'Trading Cost', 'Cost', NULL, 0.0000, '1', '2022-04-16 09:49:54', NULL, NULL, NULL, NULL, 0, 0),
(12, 0, 22, '0-22', 0, NULL, 6, 30, 'Water Sale', 'Sales', NULL, 0.0000, '1', '2022-04-16 09:49:54', NULL, NULL, NULL, NULL, 0, 0),
(13, 0, 23, '0-23', 0, NULL, 7, 31, 'Water Cost', 'Cost', NULL, 0.0000, '1', '2022-04-16 09:49:54', NULL, NULL, NULL, NULL, 0, 0),
(14, 0, 24, '0-24', 0, NULL, 6, 30, 'Counter Sale', 'Sales', NULL, 0.0000, '1', '2022-04-16 09:49:54', NULL, NULL, NULL, NULL, 0, 0),
(15, 0, 25, '0-25', 0, NULL, 7, 31, 'Counter Cost', 'Cost', NULL, 0.0000, '1', '2022-04-16 09:49:54', NULL, NULL, NULL, NULL, 0, 0),
(16, 0, 26, '4-17', 0, NULL, 4, 29, 'Other Income', 'Other Income', NULL, 0.0000, '1', '2023-03-14 19:06:12', NULL, NULL, NULL, NULL, 0, 0),
(17, 0, 27, '2-27', 0, NULL, 2, 16, 'Salary Payable', 'Current Liabilities', NULL, 0.0000, '1', '2022-06-28 20:52:53', NULL, NULL, NULL, NULL, 0, 0),
(18, 0, 28, '5-28', 0, NULL, 5, 19, 'Salary Expense', 'Operating Expenses', NULL, 0.0000, '1', '2022-06-24 20:25:45', '20:25:45 PM', '1', '2022-06-24 20:26:10', '20:26:10 PM', 0, 0),
(19, 0, 29, '5-5', 0, NULL, 5, 19, 'Commission', 'Operating Expenses', NULL, 0.0000, '1', '2022-06-24 20:25:45', '20:25:45 PM', '1', '2022-06-24 20:26:10', '20:26:10 PM', 0, 0),
(20, 0, 30, '0-30', 0, NULL, 0, 0, 'Stock Transfer', 'System Account', NULL, 0.0000, '1', '2022-06-24 20:25:45', '20:25:45 PM', '1', '2022-06-24 20:26:10', '20:26:10 PM', 0, 0),
(21, 0, 29, '5-5', 0, '', 5, 19, 'Discount', 'Operating Expenses', '', NULL, '', NULL, '', '', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pBU`
--

CREATE TABLE `pBU` (
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
-- Dumping data for table `pBU`
--

INSERT INTO `pBU` (`Code`, `Name`, `ContactName`, `BusinessType`, `Address`, `Address2`, `Phone`, `Cell`, `Fax`, `EMail`, `WebAddress`, `CNIC`, `NTNNo`, `StnNo`, `CurrencyNo`, `BraNo`, `Remarks`, `CountryCode`, `ProvinceCode`, `CityCode`, `DivisionCode`, `DistrictCode`, `TahsileCode`, `MainAreaCode`, `SubAreaCode`, `NameInUrdu`, `RemarksInUrdu`, `Pic`, `PictureStatus`, `UserName`, `CreateDate`, `CreateTime`, `CreatePcName`, `CreatePCUser`, `CreateLoc`, `CreateDevice`, `UpdatePcUser`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `UpdatePcName`, `UpdateLoc`, `UpdateDevice`, `TotalUpdate`, `Block`, `Lock`, `Hide`, `Bookmark`, `BMStatus`, `BMIConID`, `BMRowID`, `DBRowID`, `ECol1`, `VirtualCode`) VALUES
(1, 'AquaPeo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pCustomer`
--

CREATE TABLE `pCustomer` (
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
-- Dumping data for table `pCustomer`
--

INSERT INTO `pCustomer` (`ID`, `Code`, `BUnit`, `OldCode`, `Name`, `ContactName`, `GroupCode`, `Address`, `SaleTaxRegNo`, `NTNNo`, `CNIC`, `Phone`, `Fax`, `Cell`, `WebAddress`, `EMail`, `Remarks`, `SecurtyDeposit`, `SaleMenCode`, `Commission`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(9, 79, 0, '', 'Sarosh ', 'Hamza Danish', 1, 'H-no A-60 Quetta Town Scheme 33 Karachi', '', '', '', '03172825059', '', '', 'H-no A-60 Quetta Town Scheme 33 Karachi', '', '', NULL, NULL, NULL, NULL, '2025-07-22 11:17:35', '2025-07-22 11:17:35', NULL, '2025-07-22 11:28:19', '2025-07-22 11:28:19', 0);

--
-- Triggers `pCustomer`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_CUSTOMER_DELETED` BEFORE DELETE ON `pCustomer` FOR EACH ROW DELETE FROM pAccounts
WHERE
    `ParentAccountCode` = OLD.ID
    AND `Code` = CONCAT('7', OLD.ID)
    AND `AccSubCode` = 7
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pEmployee`
--

CREATE TABLE `pEmployee` (
  `ID` bigint(20) NOT NULL,
  `Code` decimal(18,0) NOT NULL,
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
-- Dumping data for table `pEmployee`
--

INSERT INTO `pEmployee` (`ID`, `Code`, `BUnit`, `OldCode`, `Name`, `FatherName`, `EmployeeGroup`, `Gender`, `Address`, `Phone`, `Cell`, `CNIC`, `NTNNo`, `Fax`, `EMail`, `PerHourRate`, `TotalSalary`, `OfficeTimeFrom`, `OfficeTimeTo`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(4, 64, 0, '', 'Sarosh ALI', 'gfgdg', 1, '', 'H-no A-60 Quetta Town Scheme 33 Karachi', '03172825059', '', '', '', '', '', NULL, NULL, NULL, NULL, '', NULL, '2025-07-22 12:12:06', '2025-07-22 12:12:06', NULL, '2025-07-22 12:12:26', '2025-07-22 12:12:26', 0);

--
-- Triggers `pEmployee`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_EMPLOYEE_DELETED` BEFORE DELETE ON `pEmployee` FOR EACH ROW DELETE FROM pAccounts
WHERE
    `ParentAccountCode` = OLD.ID
    AND `Code` = CONCAT('6', OLD.ID)
    AND `AccSubCode` = 6
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pProductItems`
--

CREATE TABLE `pProductItems` (
  `ID` bigint(20) NOT NULL,
  `Code` decimal(18,0) NOT NULL,
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
  `Block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pProductItems`
--

INSERT INTO `pProductItems` (`ID`, `Code`, `BUnit`, `OldCode`, `BarCode`, `ProductGroupCode`, `UnitCode`, `Name`, `rate`, `Packing`, `PackingQty`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(2, 52, NULL, '', '', 0, 2, 'waterfall', 0.00, '', NULL, '', NULL, '2025-07-22 12:25:01', '2025-07-22 12:25:01', NULL, '2025-07-22 12:25:23', '2025-07-22 12:25:23', 0);

--
-- Triggers `pProductItems`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_PRODUCTITEMS_DELETED` BEFORE DELETE ON `pProductItems` FOR EACH ROW DELETE FROM pAccounts
WHERE
    `ParentAccountCode` = OLD.ID
    AND `Code` = CONCAT('5', OLD.ID)
    AND `AccSubCode` = 5
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `psAccountSubGroup`
--

CREATE TABLE `psAccountSubGroup` (
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
-- Dumping data for table `psAccountSubGroup`
--

INSERT INTO `psAccountSubGroup` (`Code`, `BUnit`, `CofAccCode`, `Name`, `Remarks`, `NameInUrdu`, `RemarksInUrdu`, `UserName`, `CreateDate`, `CreateTime`, `CreatePcName`, `CreatePCUser`, `CreateLoc`, `CreateDevice`, `UpdatePcUser`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `UpdatePcName`, `UpdateLoc`, `UpdateDevice`, `TotalUpdate`, `Block`, `Lock`, `Hide`, `Bookmark`, `BMStatus`, `BMIConID`, `BMRowID`, `DBRowID`, `ECol1`, `ECol2`) VALUES
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
(19, 0, 19, 'Operating Expenses', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, '', '', '', NULL, 0, 0, 0, NULL, '', NULL, NULL, NULL, NULL, ''),
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
-- Table structure for table `psChartofAccounts`
--

CREATE TABLE `psChartofAccounts` (
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
-- Dumping data for table `psChartofAccounts`
--

INSERT INTO `psChartofAccounts` (`Code`, `BUnit`, `CoaCode`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(1, 0, 0, 'System Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 0, 1, 'Asset Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 0, 2, 'Liability Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 0, 3, 'Equity Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 0, 4, 'Revenue Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 0, 5, 'Expense Accounts', '', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psCustomerGroup`
--

CREATE TABLE `psCustomerGroup` (
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
-- Dumping data for table `psCustomerGroup`
--

INSERT INTO `psCustomerGroup` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(1, 0, 'General Custome', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psEmployeeGroup`
--

CREATE TABLE `psEmployeeGroup` (
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
-- Dumping data for table `psEmployeeGroup`
--

INSERT INTO `psEmployeeGroup` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(1, NULL, 'General Group', '', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psProductGroup`
--

CREATE TABLE `psProductGroup` (
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
-- Dumping data for table `psProductGroup`
--

INSERT INTO `psProductGroup` (`Code`, `BUnit`, `Name`, `Remarks`, `NameInUrdu`, `RemarksInUrdu`, `UserName`, `CreateDate`, `CreateTime`, `CreatePcName`, `CreatePCUser`, `CreateLoc`, `CreateDevice`, `UpdatePcUser`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `UpdatePcName`, `UpdateLoc`, `UpdateDevice`, `TotalUpdate`, `Block`, `Lock`, `Hide`, `Bookmark`, `BMStatus`, `BMIConID`, `BMRowID`, `DBRowID`, `ECol1`, `ECol2`) VALUES
(0, NULL, 'Water', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `psSupplierGroup`
--

CREATE TABLE `psSupplierGroup` (
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
-- Dumping data for table `psSupplierGroup`
--

INSERT INTO `psSupplierGroup` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(1, NULL, 'General Supplier', '', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psUnits`
--

CREATE TABLE `psUnits` (
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
-- Dumping data for table `psUnits`
--

INSERT INTO `psUnits` (`ID`, `BUnit`, `Name`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
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
-- Table structure for table `pSupplier`
--

CREATE TABLE `pSupplier` (
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
-- Dumping data for table `pSupplier`
--

INSERT INTO `pSupplier` (`ID`, `Code`, `BUnit`, `OldCode`, `Name`, `ContactName`, `GroupCode`, `Address`, `SaleTaxRegNo`, `NTNNo`, `CNIC`, `Phone`, `Fax`, `Cell`, `WebAddress`, `EMail`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(2, 82, NULL, '', 'Supplier ', 'Hamza Danish', 1, 'H-no A-60 Quetta Town Scheme 33 Karachi', '', '', '', '03172825059', '', '', 'H-no A-60 Quetta Town Scheme 33 Karachi', '', '', NULL, '2025-07-22 12:31:33', '2025-07-22 12:31:33', NULL, '2025-07-22 12:31:59', '2025-07-22 12:31:59', 0);

--
-- Triggers `pSupplier`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_SUPPLIER_DELETED` BEFORE DELETE ON `pSupplier` FOR EACH ROW DELETE FROM pAccounts
WHERE
    `ParentAccountCode` = OLD.ID
    AND `Code` = CONCAT('8', OLD.ID)
    AND `AccSubCode` = 8
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `psUserGroup`
--

CREATE TABLE `psUserGroup` (
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

-- --------------------------------------------------------

--
-- Table structure for table `tSaleD`
--

CREATE TABLE `tSaleD` (
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
-- Dumping data for table `tSaleD`
--

INSERT INTO `tSaleD` (`Code`, `CodeD`, `VirtualCode`, `Tdate`, `Status`, `PartyCode`, `StoreCode`, `ProductCode`, `ProductGroupCode`, `UnitCode`, `Qty`, `Rate`, `Amount`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `BuCode`, `TotalNos`) VALUES
(9, 26, '1-25-3', '2025-07-23 16:19:14', NULL, 1, 1, 1, 1, NULL, 5.000, 200.000, 1000.000, 'Updated qty', 'admin', '2025-07-23 16:19:14', NULL, NULL, NULL, '2025-07-23 16:19:14', NULL, 1.000, NULL),
(9, 27, '1-25-3', '2025-07-23 16:19:14', NULL, 1, 1, 2, 1, NULL, 1.000, 500.000, 500.000, 'New item', 'admin', '2025-07-23 16:19:14', NULL, NULL, NULL, '2025-07-23 16:19:14', NULL, 1.000, NULL),
(13, 34, '2-25-3', '2025-07-24 12:22:58', NULL, 1, 1, 1, 1, 1, 10.000, 50.000, 500.000, 'Detail remarks', '1', '2025-07-24 12:22:58', '2025-07-24 12:22:58', NULL, NULL, NULL, NULL, 1.000, NULL),
(13, 35, '2-25-3', '2025-07-24 12:22:58', NULL, 1, 1, 2, 2, 1, 5.000, 100.000, 500.000, 'Another detail remarks', '1', '2025-07-24 12:22:58', '2025-07-24 12:22:58', NULL, NULL, NULL, NULL, 1.000, NULL),
(14, 36, '3-25-3', '2025-07-24 12:23:20', NULL, 1, 1, 1, 1, 1, 10.000, 50.000, 500.000, 'Detail remarks', '1', '2025-07-24 12:23:20', '2025-07-24 12:23:20', NULL, NULL, NULL, NULL, 1.000, NULL),
(14, 37, '3-25-3', '2025-07-24 12:23:20', NULL, 1, 1, 2, 2, 1, 5.000, 100.000, 500.000, 'Another detail remarks', '1', '2025-07-24 12:23:20', '2025-07-24 12:23:20', NULL, NULL, NULL, NULL, 1.000, NULL),
(15, 38, '4-25-3', '2025-07-24 12:40:00', NULL, 1, 1, 1, 1, 1, 10.000, 50.000, 500.000, 'Detail remarks', '1', '2025-07-24 12:40:00', '2025-07-24 12:40:00', NULL, NULL, NULL, NULL, 1.000, NULL),
(15, 39, '4-25-3', '2025-07-24 12:40:00', NULL, 1, 1, 2, 2, 1, 5.000, 100.000, 500.000, 'Another detail remarks', '1', '2025-07-24 12:40:00', '2025-07-24 12:40:00', NULL, NULL, NULL, NULL, 1.000, NULL),
(16, 40, '5-25-3', '2025-07-24 12:40:39', NULL, 1, 1, 1, 1, 1, 10.000, 50.000, 500.000, 'Detail remarks', '1', '2025-07-24 12:40:39', '2025-07-24 12:40:39', NULL, NULL, NULL, NULL, 1.000, NULL),
(16, 41, '5-25-3', '2025-07-24 12:40:39', NULL, 1, 1, 2, 2, 1, 5.000, 100.000, 500.000, 'Another detail remarks', '1', '2025-07-24 12:40:39', '2025-07-24 12:40:39', NULL, NULL, NULL, NULL, 1.000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tSaleH`
--

CREATE TABLE `tSaleH` (
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
-- Dumping data for table `tSaleH`
--

INSERT INTO `tSaleH` (`ID`, `Code`, `TMonth`, `TYear`, `BookCode`, `BookID`, `VirtualCode`, `TBook`, `TType`, `SaleType`, `TDate`, `BUnit`, `Status`, `PartyCode`, `TotalAmount`, `FreightAccountCode`, `FreightCharges`, `LaborAccountCode`, `LaborCharges`, `SaleTaxAccCode`, `SaleTaxRate`, `SaleTaxAmount`, `DiscountAccCode`, `DiscountRemarks`, `DiscountRate`, `DiscountAmount`, `GrandTotal`, `SaleMenCode`, `Commission`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`) VALUES
(9, 1253, '07', '25', 3, 3, '1-25-3', 'POS', 'Point OF Sale', 'Cash', '2025-07-23 16:19:14', 1, 'OPEN', 1, 1500.000, NULL, 100.000, NULL, 50.000, NULL, 5.000, 75.000, NULL, 'Seasonal discount', 10.000, 150.000, 1475.000, NULL, 25.000, 'Updated record', NULL, '2025-07-23 16:17:03', '16:17:03', NULL, '2025-07-23 16:19:14', '16:19:14', NULL),
(13, 2253, '07', '25', 3, 3, '2-25-3', 'POS', 'Point OF Sale', 'Cash', '2025-07-24 12:22:58', 1, 'OPEN', 1, 1000.500, 1, 100.000, 1, 30.000, 1, 10.000, 100.000, 1, 'Seasonal Discount', 5.000, 50.000, 1030.500, 1, 15.000, 'Customer order remarks', 1, '2025-07-24 12:22:58', '12:22:58', NULL, NULL, NULL, 0),
(14, 3253, '07', '25', 3, 3, '3-25-3', 'POS', 'Point OF Sale', 'Cash', '2025-07-24 12:23:20', 1, 'OPEN', 1, 1000.500, 1, 100.000, 1, 30.000, 1, 10.000, 100.000, 1, 'Seasonal Discount', 5.000, 50.000, 1030.500, 1, 15.000, 'Customer order remarks', 1, '2025-07-24 12:23:20', '12:23:20', NULL, NULL, NULL, 0),
(15, 4253, '07', '25', 3, 3, '4-25-3', 'POS', 'Point OF Sale', 'Cash', '2025-07-24 12:40:00', 1, 'OPEN', 1, 1000.500, 1, 100.000, 1, 30.000, 1, 10.000, 100.000, 1, 'Seasonal Discount', 5.000, 50.000, 1030.500, 1, 15.000, 'Customer order remarks', 1, '2025-07-24 12:40:00', '12:40:00', NULL, NULL, NULL, 0),
(16, 5253, '07', '25', 3, 3, '5-25-3', 'POS', 'Point OF Sale', 'Cash', '2025-07-24 12:40:39', 1, 'OPEN', 1, 1000.500, 1, 100.000, 1, 30.000, 1, 10.000, 100.000, 1, 'Seasonal Discount', 5.000, 50.000, 1030.500, 1, 15.000, 'Customer order remarks', 1, '2025-07-24 12:40:39', '12:40:39', NULL, NULL, NULL, 0);

--
-- Triggers `tSaleH`
--
DELIMITER $$
CREATE TRIGGER `BEFORE_SALESH_DELETED` BEFORE DELETE ON `tSaleH` FOR EACH ROW DELETE FROM GltH
WHERE `VirtualCode` = OLD.VirtualCode
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `umUserInfo`
--

CREATE TABLE `umUserInfo` (
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
-- Dumping data for table `umUserInfo`
--

INSERT INTO `umUserInfo` (`Code`, `UserName`, `CellNo`, `Email`, `LoginUserName`, `Password`, `PasswordHint`, `GroupCode`, `Remarks`, `UserType`, `isAccountActive`, `NoOfAttempt`, `NoOfWorngAttempt`, `api_key`) VALUES
(1, NULL, '', NULL, 'admin', 'admin123', NULL, NULL, NULL, NULL, NULL, '10', 0, '123'),
(2, NULL, '', NULL, 'admin1', 'admin123', NULL, NULL, NULL, NULL, NULL, '10', 0, NULL),
(3, 'asdad', 'sadsad', 'asdsad', 'user1', '$argon2id$v=19$m=65536,t=4,p=1$N1E1bEIzeVlucTV1VDNFMw$j66+QApGXtGy3siSIpdkLMdZYxVLZ2xrY+Q9smZdeuw', '', NULL, '', NULL, NULL, '', NULL, '16d4799d288be9f666820e9745ec8053');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AccountCBal`
--
ALTER TABLE `AccountCBal`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `GLTD`
--
ALTER TABLE `GLTD`
  ADD PRIMARY KEY (`CodeD`);

--
-- Indexes for table `GltH`
--
ALTER TABLE `GltH`
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
-- Indexes for table `pAccounts`
--
ALTER TABLE `pAccounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pBU`
--
ALTER TABLE `pBU`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `pCustomer`
--
ALTER TABLE `pCustomer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pEmployee`
--
ALTER TABLE `pEmployee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pProductItems`
--
ALTER TABLE `pProductItems`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psAccountSubGroup`
--
ALTER TABLE `psAccountSubGroup`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `psChartofAccounts`
--
ALTER TABLE `psChartofAccounts`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `psCustomerGroup`
--
ALTER TABLE `psCustomerGroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psEmployeeGroup`
--
ALTER TABLE `psEmployeeGroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psProductGroup`
--
ALTER TABLE `psProductGroup`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `psSupplierGroup`
--
ALTER TABLE `psSupplierGroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psUnits`
--
ALTER TABLE `psUnits`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pSupplier`
--
ALTER TABLE `pSupplier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `psUserGroup`
--
ALTER TABLE `psUserGroup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tSaleD`
--
ALTER TABLE `tSaleD`
  ADD PRIMARY KEY (`CodeD`);

--
-- Indexes for table `tSaleH`
--
ALTER TABLE `tSaleH`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `umUserInfo`
--
ALTER TABLE `umUserInfo`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `GLTD`
--
ALTER TABLE `GLTD`
  MODIFY `CodeD` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `GltH`
--
ALTER TABLE `GltH`
  MODIFY `Code` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `pAccounts`
--
ALTER TABLE `pAccounts`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pBU`
--
ALTER TABLE `pBU`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pCustomer`
--
ALTER TABLE `pCustomer`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pEmployee`
--
ALTER TABLE `pEmployee`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pProductItems`
--
ALTER TABLE `pProductItems`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psAccountSubGroup`
--
ALTER TABLE `psAccountSubGroup`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `psChartofAccounts`
--
ALTER TABLE `psChartofAccounts`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `psCustomerGroup`
--
ALTER TABLE `psCustomerGroup`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `psEmployeeGroup`
--
ALTER TABLE `psEmployeeGroup`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `psSupplierGroup`
--
ALTER TABLE `psSupplierGroup`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `psUnits`
--
ALTER TABLE `psUnits`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pSupplier`
--
ALTER TABLE `pSupplier`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psUserGroup`
--
ALTER TABLE `psUserGroup`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tSaleD`
--
ALTER TABLE `tSaleD`
  MODIFY `CodeD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tSaleH`
--
ALTER TABLE `tSaleH`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `umUserInfo`
--
ALTER TABLE `umUserInfo`
  MODIFY `Code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

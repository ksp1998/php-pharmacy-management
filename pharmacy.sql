-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 07:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `PHARMACY_NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL,
  `EMAIL` varchar(50) COLLATE utf16_bin NOT NULL,
  `CONTACT_NUMBER` varchar(10) COLLATE utf16_bin NOT NULL,
  `USERNAME` varchar(50) COLLATE utf16_bin NOT NULL,
  `PASSWORD` varchar(50) COLLATE utf16_bin NOT NULL,
  `IS_LOGGED_IN` varchar(5) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`PHARMACY_NAME`, `ADDRESS`, `EMAIL`, `CONTACT_NUMBER`, `USERNAME`, `PASSWORD`, `IS_LOGGED_IN`) VALUES
('Thakur Chemist', 'Thakur Village, Kandivali East, Mumbai', 'thakur@gmail.com', '9876543210', 'thakur', 'thakur123', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) COLLATE utf16_bin NOT NULL,
  `CONTACT_NUMBER` varchar(10) COLLATE utf16_bin NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL,
  `DOCTOR_NAME` varchar(20) COLLATE utf16_bin NOT NULL,
  `DOCTOR_ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `NAME`, `CONTACT_NUMBER`, `ADDRESS`, `DOCTOR_NAME`, `DOCTOR_ADDRESS`) VALUES
(1001, 'Kiran Suthar', '9999999999', 'Andheri East, Mumbai', 'Dr Bharat', 'Andheri East'),
(1002, 'Aditya Tiwari', '2222222222', 'Virar West, Palghar', 'Dr Kappor', 'Virar West'),
(1003, 'Shivam Tiwari', '3333333333', 'Prabhadevi, Mumbai', 'Dr Chagan', 'Prabhadevi'),
(1004, 'Vijeth Poojary', '4444444444', 'Kandivali West, Mumbai', 'Dr Patel', 'Charkop'),
(1005, 'Mahesh Shinde', '5555555555', 'Kandivali East, Mumbai', 'Dr Thakur', 'Kandivali East'),
(1006, 'Sharvil Patel', '6666666666', 'Charkop, Mumbai', 'Dr Patel', 'Charkop'),
(1007, 'Nishita Shetty', '7777777777', 'Kandivali East, Mumbai', 'Dr Thakur', 'Kandivali East'),
(1009, 'Yagnesh Vakhariya', '1010101010', 'Virar West', 'Dr Kapoor', 'Virar West');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `INVOICE_NUMBER` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) NOT NULL,
  `INVOICE_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `TOTAL_AMOUNT` double NOT NULL,
  `TOTAL_DISCOUNT` double NOT NULL,
  `NET_TOTAL` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`INVOICE_NUMBER`, `CUSTOMER_ID`, `INVOICE_DATE`, `TOTAL_AMOUNT`, `TOTAL_DISCOUNT`, `NET_TOTAL`) VALUES
(10001, 1009, '2020-05-11', 410.4, 41.04, 369.35999999999996),
(10002, 1001, '2020-05-11', 647.2, 36.910000000000004, 610.2900000000001),
(10003, 1002, '2020-05-06', 709.55, 71.4454, 638.1045999999999),
(10004, 1007, '2020-05-11', 729.6, 72.96, 656.64),
(10005, 1006, '2020-05-11', 693, 37.45, 655.55);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `PACKING` varchar(20) COLLATE utf16_bin NOT NULL,
  `GENERIC_NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `SUPPLIER_NAME` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`ID`, `NAME`, `PACKING`, `GENERIC_NAME`, `SUPPLIER_NAME`) VALUES
(54, 'Dolo 650MG', '15TAB', 'Acetaminophen Or Paracetamol', 'Shree Sai Pharma'),
(55, 'Sinarest', '10TAB', 'Caffeine', 'Garodia Distributors'),
(56, 'Crocin 500MG', '10TAB', 'Acetaminophen or Paracetamol', 'Shree Sai Pharma'),
(57, 'Becosules', '20CAP', 'Biotin', 'Euro India'),
(58, 'Anacin', '10TAB', 'Aspirin', 'Vsb Life Care'),
(59, 'Gelusil-MPS', '170ML', 'Magnesium Hydroxide', 'Devanshi Pharma'),
(60, 'Celin', '20TAB', 'Ascorbic Acid', 'Vsb Life Care'),
(61, 'LIMCEE', '15TAB', 'Ascorbic Acid (Vitacin C)', 'Vsb Life Care'),
(62, 'Diclogem', '10TAB', 'Diclofenac and Paracetamol', 'Garodia Distributors'),
(68, 'Omme', '10CAP', 'Omeprazole', 'Euro India'),
(69, 'Alkof DX Syrup', '100ML', 'Chlorpheniramine Maleate 4 MG Dextromethorphan 10 MG /5ML', 'Desai Pharma'),
(70, 'Azirox 500', '3TAB', 'Azithromycin', 'Shree Sai Pharma');

-- --------------------------------------------------------

--
-- Table structure for table `medicines_stock`
--

CREATE TABLE `medicines_stock` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `BATCH_ID` varchar(20) COLLATE utf16_bin NOT NULL,
  `EXPIRY_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `MRP` double NOT NULL,
  `RATE` double NOT NULL,
  `INVOICE_NUMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `medicines_stock`
--

INSERT INTO `medicines_stock` (`ID`, `NAME`, `BATCH_ID`, `EXPIRY_DATE`, `QUANTITY`, `MRP`, `RATE`, `INVOICE_NUMBER`) VALUES
(31, 'Alkof DX Syrup', 'ALK123', '09/21', 0, 91.2, 79.8, 101),
(32, 'Dolo 650MG', 'DOLO12', '12/21', 48, 30.2, 21.8, 5432),
(33, 'Azirox 500', 'AZI45', '09/22', 10, 70, 57.7, 5432),
(34, 'Crocin 500MG', 'CROS89', '12/22', 30, 11.2, 8.9, 5432),
(35, 'Sinarest', 'SIN12', '09/21', 25, 50.7, 39.5, 5431),
(36, 'Diclogem', 'DICLO7632', '04/23', 43, 25, 18.8, 5431),
(37, 'Becosules', 'BEC154', '11/20', 16, 37.38, 29.64, 51516),
(38, 'Omme', 'OMME10', '06/22', 22, 54.25, 44.23, 51516),
(39, 'Anacin', 'ANA1', '02/21', 15, 22.5, 17.12, 141),
(40, 'Celin', 'CEL4', '01/24', 40, 30, 24, 141),
(41, 'Limcee', 'LIM9C', '12/23', 17, 70.01, 56.6, 141),
(42, 'Gelusil-MPS', 'GMPS', '02/23', 0, 91, 74.3, 5135);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `SUPPLIER_NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `INVOICE_NUMBER` int(11) NOT NULL,
  `VOUCHER_NUMBER` int(11) NOT NULL,
  `PURCHASE_DATE` varchar(10) COLLATE utf16_bin NOT NULL,
  `TOTAL_AMOUNT` double NOT NULL,
  `PAYMENT_STATUS` varchar(20) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`SUPPLIER_NAME`, `INVOICE_NUMBER`, `VOUCHER_NUMBER`, `PURCHASE_DATE`, `TOTAL_AMOUNT`, `PAYMENT_STATUS`) VALUES
('Desai Pharma', 101, 20006, '2020-05-11', 798, 'DUE'),
('Shree Sai Pharma', 5432, 20007, '2020-05-09', 2267, 'PAID'),
('Garodia Distributors', 5431, 20008, '2020-05-11', 1833.5, 'PAID'),
('Euro India', 51516, 20009, '2020-05-01', 1862.26, 'DUE'),
('Vsb Life Care', 141, 20010, '2020-05-06', 2588.8, 'PAID'),
('Devanshi Pharma', 5135, 20011, '2020-05-01', 594.4, 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `ID` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) NOT NULL,
  `INVOICE_NUMBER` int(11) NOT NULL,
  `MEDICINE_NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `BATCH_ID` varchar(100) COLLATE utf16_bin NOT NULL,
  `EXPIRY_DATE` varchar(100) COLLATE utf16_bin NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `MRP` double NOT NULL,
  `DISCOUNT` double NOT NULL,
  `TOTAL` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`ID`, `CUSTOMER_ID`, `INVOICE_NUMBER`, `MEDICINE_NAME`, `BATCH_ID`, `EXPIRY_DATE`, `QUANTITY`, `MRP`, `DISCOUNT`, `TOTAL`) VALUES
(38, 1009, 10001, 'Dolo 650MG', 'DOLO12', '12/23', 2, 30.2, 10, 54.36),
(39, 1009, 10001, 'Azirox 500', 'AZI45', '09/22', 5, 70, 10, 315),
(40, 1001, 10002, 'Alkof DX Syrup', 'ALK123', '09/21', 2, 91.2, 5, 173.28),
(41, 1001, 10002, 'Becosules', 'BEC154', '11/20', 10, 37.38, 5, 355.11),
(42, 1001, 10002, 'Gelusil-MPS', 'GMPS', '02/23', 1, 91, 10, 81.9),
(43, 1002, 10003, 'Celin', 'CEL4', '01/24', 10, 30, 10, 270),
(44, 1002, 10003, 'Diclogem', 'DICLO7632', '04/23', 2, 25, 5, 47.5),
(45, 1002, 10003, 'Becosules', 'BEC154', '11/20', 4, 37.38, 12, 131.57760000000002),
(46, 1002, 10003, 'Limcee', 'LIM9C', '12/23', 3, 70.01, 10, 189.02700000000004),
(47, 1007, 10004, 'Alkof DX Syrup', 'ALK123', '09/21', 8, 91.2, 10, 656.64),
(48, 1006, 10005, 'Gelusil-MPS', 'GMPS', '02/23', 7, 91, 5, 605.15),
(49, 1006, 10005, 'Crocin 500MG', 'CROS89', '12/22', 5, 11.2, 10, 50.4);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) COLLATE utf16_bin NOT NULL,
  `EMAIL` varchar(100) COLLATE utf16_bin NOT NULL,
  `CONTACT_NUMBER` varchar(10) COLLATE utf16_bin NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `NAME`, `EMAIL`, `CONTACT_NUMBER`, `ADDRESS`) VALUES
(2001, 'Shree Sai Pharma', 'ssp@gmail.com', '1212121212', 'Azad Nagar, Andheri West'),
(2002, 'Euro India', 'ei@gmail.com', '2323232323', 'Akurli Road, Kandivali East'),
(2004, 'Vsb Life Care', 'vlc@gmail.com', '4545454545', 'Seawoods'),
(2005, 'Garodia Distributors', 'gd@gmail.com', '5656565656', 'Bhayandar West'),
(2006, 'Devanshi Pharma', 'dp@gmail.com', '6767676767', 'Kalbadevi'),
(2007, 'Crystel Pharma', 'crystelpharma@gmail.com', '9898989898', 'Andheri East, Mumbai, 400069'),
(2008, 'Desai Pharma', 'desai@gmail.com', '9090909090', 'Mahim West');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`INVOICE_NUMBER`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicines_stock`
--
ALTER TABLE `medicines_stock`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `BATCH_ID` (`BATCH_ID`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`VOUCHER_NUMBER`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `INVOICE_NUMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `medicines_stock`
--
ALTER TABLE `medicines_stock`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `VOUCHER_NUMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20012;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
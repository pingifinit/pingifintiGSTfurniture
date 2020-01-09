-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 12:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newlook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'newlook', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `ac_num` varchar(50) NOT NULL,
  `ifsc_num` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name`, `bank`, `ac_num`, `ifsc_num`) VALUES
(1, 'Rahul', 'SBI', 'SBI1235', '987654');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `id` int(50) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `category_name`) VALUES
(1, ''),
(5, 'Category 2'),
(6, ''),
(7, 'CONSTRUCTION');

-- --------------------------------------------------------

--
-- Table structure for table `credit_history`
--

CREATE TABLE `credit_history` (
  `id` int(50) NOT NULL,
  `credit_id` int(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `pay` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credit_table`
--

CREATE TABLE `credit_table` (
  `id` int(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `pay` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `contact_sec` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `refer_name` varchar(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `gst_num` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `contact`, `contact_sec`, `address`, `category_name`, `type`, `refer_name`, `staff_name`, `gst_num`) VALUES
(6, 'S K CONSTRUCTIONS', '9843321111', '', '375/2,IInd FLOOR,NATHAN MEDICAL-C,NEAR OLD BUSSTAN', '7', 'Direct', '', '', '33DMJPS9389L1ZY'),
(7, 'ARUN', '9222856230', '', 'Perundurai', 'Select Business Category', 'Direct', '', '', ''),
(8, 'saran', '9000428563', '', 'Erode', 'Select Business Category', 'Direct', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `debit_table`
--

CREATE TABLE `debit_table` (
  `id` int(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `pay1` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debit_table`
--

INSERT INTO `debit_table` (`id`, `sub_name`, `category_name`, `pay1`, `date`, `total`) VALUES
(1, 'Pragati', 'Salary', '10000', '2019-12-27', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `joining_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `id` int(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`id`, `category_name`, `sub_name`) VALUES
(1, 'Salary', 'Pragati');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice`, `status`) VALUES
(1, 'Newlook', '0'),
(2, 'NLWD20-21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_add`
--

CREATE TABLE `invoice_add` (
  `id` int(50) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `gst_num` varchar(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `total_sqft` varchar(50) NOT NULL,
  `price_per1` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `no_sqft` varchar(50) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `round_off` varchar(50) NOT NULL,
  `net_amount` varchar(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `invoice_new` varchar(50) NOT NULL,
  `invoice_non` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_add`
--

INSERT INTO `invoice_add` (`id`, `sub_id`, `customer_id`, `gst_num`, `product_id`, `width`, `height`, `quantity`, `total_sqft`, `price_per1`, `amount`, `no_sqft`, `total_amount`, `cgst`, `sgst`, `round_off`, `net_amount`, `invoice_no`, `invoice_new`, `invoice_non`, `date`, `type`, `discount`) VALUES
(1, '1', 8, '', 3, '2', '2', '2', '8', '200', '1600', '8', '1600', '144', '144', '-', '1888.00', 'NLWD20-21/1', '1', '', '2020-01-09', 'GST', ''),
(2, '1', 6, '9843321111', 1, '2', '2', '1', '4', '200', '800', '8', '1600', '144', '144', '-', '1888.00', '', '', '1', '2020-01-09', 'Non GST', ''),
(3, '2', 6, '9843321111', 3, '1', '2', '1', '4', '200', '800', '8', '1600', '144', '144', '-', '1888.00', '', '', '1', '2020-01-09', 'Non GST', ''),
(4, '1', 6, '', 4, '2', '2', '2', '8', '200', '1600', '8', '1600', '144.00', '144.00', '-', '1888.00', 'NLWD20-21/3', '3', '', '2020-01-09', 'GST', '');

-- --------------------------------------------------------

--
-- Table structure for table `permission_table`
--

CREATE TABLE `permission_table` (
  `id` int(50) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `edit` varchar(50) NOT NULL,
  `delete_data` varchar(50) NOT NULL,
  `view` varchar(50) NOT NULL,
  `add_data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_table`
--

INSERT INTO `permission_table` (`id`, `pages`, `customer_id`, `edit`, `delete_data`, `view`, `add_data`) VALUES
(1, 'add_category', '1', '0', '0', '0', '0'),
(2, 'add_customer', '1', '0', '0', '0', '0'),
(3, 'add_employee', '1', '0', '0', '0', '0'),
(4, 'add_permission', '1', '0', '0', '0', '0'),
(5, 'add_product', '1', '0', '0', '0', '0'),
(6, 'add_quotation', '1', '0', '0', '0', '0'),
(7, 'edit_category', '1', '0', '0', '0', '0'),
(8, 'edit_customer', '1', '0', '0', '0', '0'),
(9, 'edit_product', '1', '0', '0', '0', '0'),
(10, 'edit_quotation', '1', '0', '0', '0', '0'),
(11, 'list_billing', '1', '0', '0', '0', '0'),
(12, 'list_category', '1', '0', '0', '0', '0'),
(13, 'list_customer', '1', '0', '0', '0', '0'),
(14, 'list_customer_quotation', '1', '0', '0', '0', '0'),
(15, 'list_employee', '1', '0', '0', '0', '0'),
(16, 'list_product', '1', '0', '0', '0', '0'),
(17, 'list_quotation', '1', '0', '0', '0', '0'),
(18, 'list_quotation_bill', '1', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `quantity`, `price`, `total`, `purchase_date`) VALUES
(1, 'Door', '20', '1000', '20000', '2019-12-27'),
(2, 'Window', '30', '1000', '30000', '2019-12-27'),
(3, 'Table', '40', '200', '8000', '2019-12-27'),
(4, 'Open', '', '350', '0', '2020-01-02'),
(5, 'SL/SL/SL', '', '', '', '2020-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_address` varchar(50) NOT NULL,
  `supplier_phone` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quantity_list`
--

CREATE TABLE `quantity_list` (
  `id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_add`
--

CREATE TABLE `quotation_add` (
  `id` int(50) NOT NULL,
  `sub_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `price_per1` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `sqft` varchar(50) NOT NULL,
  `total_sqft` varchar(50) NOT NULL,
  `no_qty` varchar(50) NOT NULL,
  `no_sqft` varchar(50) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `round_off` varchar(50) NOT NULL,
  `net_amount` varchar(50) NOT NULL,
  `avg_sqft` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `invoice_new` varchar(50) NOT NULL,
  `invoice_status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation_add`
--

INSERT INTO `quotation_add` (`id`, `sub_id`, `customer_id`, `product_id`, `price_per1`, `quantity`, `amount`, `width`, `height`, `sqft`, `total_sqft`, `no_qty`, `no_sqft`, `total_amount`, `gst`, `round_off`, `net_amount`, `avg_sqft`, `date`, `invoice_no`, `invoice_new`, `invoice_status`) VALUES
(1, 1, 7, 2, '200', '1', '800', '2', '2', '4', '4', '1', '4', '800', '144.00', '-', '944.00', '200.00', '2020-01-09', 'NLWD20-21/1', '1', 1),
(2, 1, 6, 1, '200', '1', '800', '2', '2', '4', '4', '3', '8', '1600', '288.00', '-', '1888.00', '200.00', '2020-01-09', 'NLWD20-21/2', '2', 1),
(3, 2, 6, 3, '200', '2', '800', '1', '2', '2', '4', '3', '8', '1600', '288.00', '-', '1888.00', '200.00', '2020-01-09', 'NLWD20-21/2', '2', 1),
(4, 1, 8, 3, '200', '2', '1600', '2', '2', '4', '8', '2', '8', '1600', '288.00', '-', '1888.00', '200.00', '2020-01-09', 'NLWD20-21/4', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock_product`
--

CREATE TABLE `stock_product` (
  `product_id` int(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_product`
--

INSERT INTO `stock_product` (`product_id`, `quantity`, `id`) VALUES
(1, '20', 1),
(2, '30', 2),
(3, '40', 3),
(1, '18', 4),
(2, '28', 5),
(1, '16', 6),
(1, '14', 7),
(2, '26', 8),
(2, '24', 9),
(1, '12', 10),
(2, '22', 11),
(2, '20', 12),
(1, '10', 13),
(3, '35', 14),
(3, '30', 15),
(3, '25', 16),
(1, '8', 17),
(2, '18', 18),
(2, '16', 19),
(2, '16', 20),
(2, '16', 21),
(2, '16', 22),
(2, '18', 23),
(2, '16', 24),
(1, '6', 25),
(1, '6', 26),
(1, '8', 27),
(1, '6', 28),
(2, '11', 29),
(2, '6', 30),
(4, '', 31),
(4, '-6', 32),
(4, '-12', 33),
(4, '-18', 34),
(1, '8', 35),
(4, '-18', 36),
(2, '6', 37),
(2, '-4', 38),
(2, '-4', 39),
(5, '', 40),
(2, '1', 41),
(2, '-9', 42),
(4, '-12', 43),
(2, '-19', 44),
(2, '-29', 45),
(2, '-39', 46),
(2, '-41', 47),
(2, '-51', 48),
(2, '-61', 49),
(2, '-71', 50),
(4, '-22', 51),
(0, '-22', 52),
(4, '-32', 53),
(0, '-32', 54),
(2, '-81', 55),
(2, '-83', 56),
(2, '-93', 57),
(2, '-95', 58),
(4, '-42', 59),
(0, '-42', 60),
(2, '-105', 61),
(2, '-107', 62),
(4, '-52', 63),
(2, '-117', 64),
(1, '6', 65),
(4, '-54', 66),
(1, '4', 67),
(4, '-56', 68),
(3, '23', 69),
(2, '-119', 70),
(3, '21', 71),
(3, '19', 72),
(1, '2', 73),
(4, '-58', 74),
(0, '', 75),
(1, '0', 76),
(4, '-60', 77),
(2, '-121', 78),
(4, '-62', 79),
(3, '17', 80),
(2, '-123', 81),
(3, '15', 82),
(1, '-1', 83),
(3, '14', 84),
(4, '-64', 85),
(4, '-64', 86);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `description`) VALUES
(2, 'Terms and condtion are completed : 2019 @www.newlook.com'),
(3, 'Terms and condtion are completed : 2019 @www.newlook.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_history`
--
ALTER TABLE `credit_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_table`
--
ALTER TABLE `credit_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debit_table`
--
ALTER TABLE `debit_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_add`
--
ALTER TABLE `invoice_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_table`
--
ALTER TABLE `permission_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantity_list`
--
ALTER TABLE `quantity_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_add`
--
ALTER TABLE `quotation_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_product`
--
ALTER TABLE `stock_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `credit_history`
--
ALTER TABLE `credit_history`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credit_table`
--
ALTER TABLE `credit_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `debit_table`
--
ALTER TABLE `debit_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice_add`
--
ALTER TABLE `invoice_add`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quantity_list`
--
ALTER TABLE `quantity_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotation_add`
--
ALTER TABLE `quotation_add`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_product`
--
ALTER TABLE `stock_product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

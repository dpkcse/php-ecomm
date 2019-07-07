-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2019 at 08:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akt_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `akt_users`
--

CREATE TABLE `akt_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akt_users`
--

INSERT INTO `akt_users` (`id`, `username`, `email`, `password`, `image`, `phone_number`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 1800000000, 'admin'),
(2, 'robiul', 'robiulalamsanny@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'user.jpg', 0, '1'),
(3, 'nayeem', 'nayeem@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(4, 'jony', 'jony@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(5, 'saiful', 'saiful@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(6, 'pohel', 'pohel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(7, 'demo', 'demo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1'),
(8, 'demo1', 'demo1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user.jpg', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `fa_class` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `has_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `item_name`, `fa_class`, `status`, `has_link`) VALUES
(10, 'Mobiles', 'fa fa-mobile', 1, ''),
(11, 'Computers', 'fa fa-desktop', 1, ''),
(12, 'Electronics', 'fa fa-tablet', 1, ''),
(13, 'Men', 'fa fa-male', 1, ''),
(14, 'Women', 'fa fa-female', 1, ''),
(15, 'Kids', 'fa fa-child', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_logo`, `created_at`) VALUES
(39, 'Levi\'s', 'upload/brand/1547797799_2000px-Levis_logo_svg.png', '2019-01-19 16:56:29'),
(44, 'Lotto', 'upload/brand/1547798073_a7d5c2cbe8bdb83262f3babf9388d42c.jpeg', '2019-01-19 16:56:29'),
(45, 'Armani', 'upload/brand/1547798114_emporio-armani-logo-vector-1040x737.png', '2019-01-19 16:56:29'),
(48, 'Apple', 'upload/brand/1548002176_7a645fe6ffb2a4475a607337a7b9f08a.jpg', '2019-01-20 16:36:16'),
(49, 'Samsung', 'upload/brand/1548002208_Samsung-logo-2015-Nobg.png', '2019-01-20 16:36:48'),
(50, 'MI', 'upload/brand/1548002242_Xiaomi_logo_Mi-700x700.png', '2019-01-20 16:37:22'),
(51, 'Nokia', 'upload/brand/1548002304_Xiaomi_logo_Mi-700x700.png', '2019-01-20 16:38:24'),
(52, 'HUAWEI', 'upload/brand/1548002359_Huawei-Logo.jpg', '2019-01-20 16:39:19'),
(53, 'OPPO', 'upload/brand/1548002390_OPPO_Logo_wiki.png', '2019-01-20 16:39:50'),
(54, 'ASUS', 'upload/brand/1548002750_1_NwfoiV9f96_MhpmJwdinPA.png', '2019-01-20 16:45:50'),
(55, 'HP', 'upload/brand/1548002785_Colors-HP-Logo.jpg', '2019-01-20 16:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cart_qty` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(250) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `product_count` int(12) NOT NULL DEFAULT '0',
  `subcat_count` int(12) NOT NULL DEFAULT '0',
  `category_description` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_image`, `menu_id`, `product_count`, `subcat_count`, `category_description`, `publication_status`) VALUES
(11, 'Smartphones', 'upload/category/p81.jpg', 10, 0, 0, 'test', 1),
(12, 'Feature Phones', 'upload/category/p182.jpg', 10, 0, 0, 'test', 1),
(13, 'Mobile Accessories', 'upload/category/p811.jpg', 10, 0, 0, 'test', 1),
(14, 'Laptops', 'upload/category/p812.jpg', 11, 0, 0, 'ssds', 1),
(15, 'Desktop', 'upload/category/p2411.jpg', 11, 0, 0, 'test', 1),
(16, 'Computer Accessories', 'upload/category/p8121.jpg', 11, 0, 0, 'test', 1),
(17, 'Televisions', 'upload/category/p1811.jpg', 12, 0, 0, 'dsd', 1),
(18, 'Men\'s Clothing', 'upload/category/p2412.jpg', 13, 0, 0, 'test', 1),
(19, 'Traditional Wear', 'upload/category/p8122.jpg', 13, 0, 0, 'test', 1),
(20, 'Women\'s Clothing', 'upload/category/p8123.jpg', 14, 0, 0, 'test', 1),
(21, 'Baby & Kids Clothing', 'upload/category/b3e48d56fce0d45caab996badce96acf_jpg_340x340q901.jpg', 15, 0, 0, 'test', 1),
(22, 'Exercise & Fitness', 'upload/category/p81231.jpg', 16, 0, 0, 'test', 1),
(26, 'Baby & Kids Clothing', 'upload/category/Xiaomi_logo_Mi-700x7003.png', 15, 0, 0, 'asdf', 1),
(27, 'Beauty & Grooming', 'upload/category/Xiaomi_logo_Mi-700x7004.png', 14, 0, 0, 'test', 1),
(28, 'Women\'s Accessories', 'upload/category/Xiaomi_logo_Mi-700x7005.png', 14, 0, 0, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_phone` int(20) NOT NULL,
  `customer_region` varchar(150) DEFAULT NULL,
  `customer_city` varchar(150) DEFAULT NULL,
  `customer_area` varchar(150) DEFAULT NULL,
  `customer_addr` varchar(255) DEFAULT NULL,
  `customer_image` varchar(255) DEFAULT NULL,
  `customer_dob` date DEFAULT NULL,
  `customer_password` varchar(200) NOT NULL,
  `customer_total_orders` int(11) DEFAULT NULL,
  `customer_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `manufacture_id` int(11) NOT NULL,
  `category_id` int(5) NOT NULL,
  `manufacture_for` tinyint(2) NOT NULL DEFAULT '0',
  `manufacture_name` varchar(100) NOT NULL,
  `manufacture_image` varchar(250) NOT NULL,
  `manufacture_description` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacture_id`, `category_id`, `manufacture_for`, `manufacture_name`, `manufacture_image`, `manufacture_description`, `publication_status`) VALUES
(7, 11, 0, 'iPhone', 'upload/subcategory/images.png', 'test', 1),
(8, 11, 0, 'Samsung', 'upload/subcategory/nokia-phones-lead-05-1480939336.jpg', 'test', 1),
(9, 11, 0, 'Huawei', 'upload/subcategory/Huawei-Logo.jpg', 'test', 1),
(10, 11, 0, 'Nokia', 'upload/subcategory/nokia-phones-lead-05-14809393361.jpg', 'test', 1),
(11, 12, 0, 'Samsung', 'upload/subcategory/Huawei-Logo1.jpg', 'test', 1),
(12, 12, 0, 'MI', 'upload/subcategory/Xiaomi_logo_Mi-700x700.png', 'test', 1),
(13, 11, 0, 'MI', 'upload/subcategory/Xiaomi_logo_Mi-700x7001.png', 'test', 1),
(14, 13, 0, 'Flip Cover', 'upload/subcategory/Xiaomi_logo_Mi-700x7002.png', 'test', 1),
(15, 13, 0, 'Back Cover', 'upload/subcategory/Xiaomi_logo_Mi-700x7003.png', 'test', 1),
(16, 13, 0, 'Screen Protector', 'upload/subcategory/Xiaomi_logo_Mi-700x7004.png', 'test', 1),
(17, 14, 0, 'ASUS', 'upload/subcategory/Huawei-Logo2.jpg', 'test', 1),
(18, 14, 0, 'APPLE', 'upload/subcategory/7a645fe6ffb2a4475a607337a7b9f08a.jpg', 'test', 1),
(19, 14, 0, 'HP', 'upload/subcategory/nokia-phones-lead-05-14809393362.jpg', 'test', 1),
(20, 15, 0, 'ASUS', 'upload/subcategory/Xiaomi_logo_Mi-700x7005.png', 'test', 1),
(21, 15, 0, 'MAC', 'upload/subcategory/7a645fe6ffb2a4475a607337a7b9f08a1.jpg', 'test', 1),
(22, 16, 0, 'Printer', 'upload/subcategory/Xiaomi_logo_Mi-700x7006.png', 'test', 1),
(23, 16, 0, 'Motherboard', 'upload/subcategory/Xiaomi_logo_Mi-700x7007.png', 'test', 1),
(24, 16, 0, 'Monitor', 'upload/subcategory/Xiaomi_logo_Mi-700x7008.png', 'test', 1),
(25, 17, 0, 'SONY', 'upload/subcategory/Xiaomi_logo_Mi-700x7009.png', 'test', 1),
(26, 17, 0, 'Samsung', 'upload/subcategory/Xiaomi_logo_Mi-700x70010.png', 'test', 1),
(27, 18, 0, 'T-Shirts', 'upload/subcategory/Xiaomi_logo_Mi-700x70011.png', 'test', 1),
(28, 18, 0, 'Casual Shirts', 'upload/subcategory/Xiaomi_logo_Mi-700x70012.png', '', 1),
(29, 18, 0, 'Suits', 'upload/subcategory/Xiaomi_logo_Mi-700x70013.png', '', 1),
(30, 18, 0, 'Formal Shirts', 'upload/subcategory/Xiaomi_logo_Mi-700x70014.png', '', 1),
(31, 18, 0, 'Hoodies', 'upload/subcategory/Xiaomi_logo_Mi-700x70015.png', '', 1),
(32, 19, 0, 'Panjabi', 'upload/subcategory/Xiaomi_logo_Mi-700x70016.png', '', 1),
(33, 19, 0, 'Pajama', 'upload/subcategory/Xiaomi_logo_Mi-700x70017.png', '', 1),
(34, 20, 0, 'Sweater', 'upload/subcategory/Xiaomi_logo_Mi-700x70018.png', 't', 1),
(35, 20, 0, 'Hoodies', 'upload/subcategory/Xiaomi_logo_Mi-700x70019.png', 'test', 1),
(36, 20, 0, 'Coats & Jackets', 'upload/subcategory/Xiaomi_logo_Mi-700x70020.png', '', 1),
(37, 21, 0, 'Baby Diapers', 'upload/subcategory/Xiaomi_logo_Mi-700x70021.png', '', 1),
(38, 21, 0, 'Baby Wipes', 'upload/subcategory/Xiaomi_logo_Mi-700x70022.png', 'test', 1),
(39, 21, 0, 'Baby Bath & Skin', 'upload/subcategory/Xiaomi_logo_Mi-700x70023.png', 'Baby Bath & Skin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_shipping_addr` varchar(255) NOT NULL,
  `shipping_method` varchar(32) NOT NULL,
  `payment_method` varchar(32) NOT NULL,
  `total_ammount` int(11) NOT NULL,
  `order_status` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_model` varchar(50) NOT NULL DEFAULT 'P001',
  `pro_label` varchar(50) DEFAULT NULL,
  `category_id` int(5) NOT NULL,
  `product_for` int(10) DEFAULT NULL,
  `manufacture_id` int(5) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_new_price` float(10,2) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_img2` varchar(255) DEFAULT NULL,
  `product_img3` varchar(255) DEFAULT NULL,
  `product_img4` varchar(255) DEFAULT NULL,
  `product_img5` varchar(255) DEFAULT NULL,
  `product_tags` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `brand_id`, `product_model`, `pro_label`, `category_id`, `product_for`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_new_price`, `product_quantity`, `product_image`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_tags`, `is_featured`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 'Apple iPhone 6 32GB', 48, '1', NULL, 11, NULL, 7, 'Apple iPhone 6 32GB Mobile Phone\r\nOS: iOS 8\r\nProcessor: Dual-Core 1.4 GHz Cyclone (ARM v8-based) Processor\r\nChipset: Apple A8\r\nRear Camera: 8 Megapixel Camera (3264 x 2448 pixels)\r\nFront Camera: 1.2 Megapixel \r\nDisplay: 4.7-Inch LED-backlit IPS LCD Multi-Touchscreen (750 x 1334 pixels)\r\nSensor: Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer\r\nBattery: Non-removable Li-Po 1810 mAh battery (6.9 Wh)', 'Apple iPhone 6 32GB Mobile Phone\r\nOS: iOS 8\r\nProcessor: Dual-Core 1.4 GHz Cyclone (ARM v8-based) Processor\r\nChipset: Apple A8\r\nRear Camera: 8 Megapixel Camera (3264 x 2448 pixels)\r\nFront Camera: 1.2 Megapixel \r\nDisplay: 4.7-Inch LED-backlit IPS LCD Multi-Touchscreen (750 x 1334 pixels)\r\nSensor: Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer\r\nBattery: Non-removable Li-Po 1810 mAh battery (6.9 Wh)', 29999.00, 28999.00, 50, 'upload/products/GUEST_c9ee8b9f-1be0-42a1-a60a-d29771e07375.jpeg', 'upload/products/iphone-iphone6-colors.jpg', NULL, NULL, NULL, NULL, 0, 1, '2019-01-20 17:14:22', NULL),
(6, 'Samsung Galaxy J7 Duo', 49, '2', NULL, 11, NULL, 8, 'test', 'Samsung Galaxy J7 Duo Mobile - Ram: 4GB I ROM: 32GB\r\nOperating System: Android Oreo 8.0\r\nProcessor: Octa-core 1.6 GHz\r\nDisplay Size: 5.5” HD Super AMOLED\r\nRear Camera: 13MP (F1.9)/ 5MP (1.9)\r\nFront Camera: 8MP (F1.9)\r\nMemory: 4 GB Ram + 32 GB ROM\r\nExpandalbe Memory: microSD up to 256 GB\r\nBattery: 3,000 mAh (Li-ion-Removable)\r\nSamsung Galaxy J7 Duo smartphone comes with the Dual Camera, So turn up the fun with the dual camera.', 24990.00, 23990.00, 20, 'upload/products/samsung-galaxy-j7-duo_1531307945.jpeg', NULL, NULL, NULL, NULL, NULL, 1, 1, '2019-01-20 17:16:23', NULL),
(7, 'Xiaomi Mi A1 4GB/32GB', 50, '3', 'New', 11, NULL, 13, 'test', 'Xiaomi Mi A1 Mobile Phone 4GB/32GB\r\nOperating System: Android 7.1.2 (Nougat), planned upgrade to Android 8.0 (Oreo)\r\nSIM: Hybrid Dual SIM (Nano-SIM, dual stand-by)\r\nProcessor: Octa-core 2.0 GHz Cortex-A53\r\nChipset: Qualcomm MSM8953 Snapdragon 625\r\nGPU: Adreno 506\r\nDisplay Size: 5.5 inch (diagonal) LTPS FHD display\r\nResolution: 1080 x 1920 pixels (~403 ppi pixel density)\r\nRear Camera: Dual 12 MP (26mm, f/2.2; 50mm, f/2.6), phase detection autofocus, 2x optical zoom, dual-LED (dual tone) flash\r\nFront Camera: 5 MP, 1080p\r\nVideo: 4K / 1080p / 720p video, 30 fps; 720p slow-mo video, 120 fps\r\nSensors: Fingerprint (rear-mounted), accelerometer, gyro, proximity, compass\r\nGPS Navigation: GPS; AGPS; GLONASS; BEIDOU\r\nConnectivity & Wireless: 3-choose-2; Nano SIM/MicroSD; Supports 802.11a/b/g/n/ac protocols; Supports 2.4/5G WiFi / WIFI Direct / WiFi Display; Supports Bluetooth 4.2/HID\r\n4G: Supports VoLTE/4G/3G/2G on compatible networks\r\nBattery: Non-removable Li-Ion 3080 mAh battery', 21990.00, 0.00, 20, 'upload/products/8d4f4a93-a6e3-4b32-b154-0956aea2ffbb.jpg', 'upload/products/71tJdEpRFUL__SX425_.jpg', NULL, NULL, NULL, NULL, 0, 1, '2019-01-20 17:18:27', NULL),
(8, 'Nokia 6 2017', 51, 'M205', 'New', 11, NULL, 10, 'test', 'test', 15500.00, 14500.00, 4, 'upload/products/Nokia-6-white1.jpg', NULL, NULL, NULL, NULL, NULL, 1, 1, '2019-01-20 17:20:14', NULL),
(9, 'Samsung Guru Music 2', 49, 'd', 'Hot', 12, NULL, 11, 'test', 'demo test', 5000.00, 3000.00, 50, 'upload/products/Guru-music-2-black.png', NULL, NULL, NULL, NULL, NULL, 1, 1, '2019-01-20 17:22:06', NULL),
(10, 'Asus E203MAH PQC N5000 11.6” 4GB/500GB Laptop', 54, 'd', 'New', 14, NULL, 17, 'test', 'test', 28840.00, 25840.00, 50, 'upload/products/e203mah-11.jpg', NULL, NULL, NULL, NULL, NULL, 0, 1, '2019-01-20 17:23:41', NULL),
(11, 'Apple MacBook Air 2018 Core i5 13.3', 48, 'a', 'Hot', 14, NULL, 18, 'test', 'test', 113300.00, 103300.00, 10, 'upload/products/mba-pfopen-gold-ww-en_tif-screen1.jpg', NULL, NULL, NULL, NULL, NULL, 1, 1, '2019-01-20 17:26:28', NULL),
(12, 'Adidas Chelsea EU Training Mens Jersey', 44, 'df', 'New', 18, NULL, 27, 'test', 'test', 5000.00, 3000.00, 50, 'upload/products/chelsea-1.jpg', NULL, NULL, NULL, NULL, NULL, 0, 1, '2019-01-20 17:27:35', NULL),
(13, 'Official Star Wars Mens T Shirt (Stormtroo Power)', 44, 'M206', 'New', 18, NULL, 27, 'test', 'test', 3000.00, 1500.00, 10, 'upload/products/p1008387_1448291669_ts204399stw_11.jpg', NULL, NULL, NULL, NULL, NULL, 0, 1, '2019-01-20 17:29:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_comment` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slide_id` int(11) NOT NULL,
  `short_title` varchar(100) NOT NULL,
  `long_title` varchar(150) NOT NULL,
  `slide_img` varchar(255) NOT NULL,
  `slide_desc` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slide_id`, `short_title`, `long_title`, `slide_img`, `slide_desc`, `status`, `created_at`) VALUES
(4, 'check2', 'check2', 'upload/slider/1549867483_david-becker-676886-unsplash.jpg', '2222', 0, '2019-02-11 06:44:43'),
(5, 'check', 'check', 'upload/slider/1549870418_anthony-delanoix-222456-unsplash.jpg', 'rtyu', 0, '2019-02-11 07:33:38'),
(6, 'check3', 'check3', 'upload/slider/1549870446_justin-leibow-62-unsplash.jpg', 'asdf', 0, '2019-02-11 07:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akt_users`
--
ALTER TABLE `akt_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akt_users`
--
ALTER TABLE `akt_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

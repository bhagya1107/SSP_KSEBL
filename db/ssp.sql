-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ssp
CREATE DATABASE IF NOT EXISTS `ssp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ssp`;

-- Dumping structure for table ssp.login_history
CREATE TABLE IF NOT EXISTS `login_history` (
  `lg_id` bigint(200) NOT NULL AUTO_INCREMENT,
  `uid` bigint(200) NOT NULL,
  `login_time` datetime DEFAULT NULL,
  `login_ip` varchar(100) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`lg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=160 DEFAULT CHARSET=latin1;

-- Dumping data for table ssp.login_history: 8 rows
/*!40000 ALTER TABLE `login_history` DISABLE KEYS */;
INSERT INTO `login_history` (`lg_id`, `uid`, `login_time`, `login_ip`, `created_date`) VALUES
	(150, 2, '2020-08-08 16:43:26', '::1', '2020-08-08 20:13:26'),
	(151, 2, '2020-08-19 11:47:54', '::1', '2020-08-19 15:17:54'),
	(152, 2, '2020-08-19 12:46:26', '::1', '2020-08-19 16:16:26'),
	(153, 2, '2020-08-19 12:52:38', '::1', '2020-08-19 16:22:38'),
	(154, 2, '2020-08-19 12:53:21', '::1', '2020-08-19 16:23:21'),
	(155, 2, '2020-08-19 13:12:40', '::1', '2020-08-19 16:42:40'),
	(156, 2, '2020-08-19 13:19:14', '::1', '2020-08-19 16:49:14'),
	(157, 2, '2020-08-19 13:19:55', '::1', '2020-08-19 16:49:55'),
	(158, 2, '2020-08-19 14:29:21', '::1', '2020-08-19 17:59:21'),
	(159, 2, '2020-08-19 14:30:44', '::1', '2020-08-19 18:00:44');
/*!40000 ALTER TABLE `login_history` ENABLE KEYS */;

-- Dumping structure for table ssp.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1: Super Admin, 2: Branch Admin, 3: normal users',
  `active_status` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) DEFAULT 0,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table ssp.suppliers: 1 rows
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` (`uid`, `name`, `username`, `password`, `email`, `mobile`, `role_id`, `user_type`, `active_status`, `isDeleted`, `created_user`, `created_date`) VALUES
	(2, 'Super Admin', 'admin', 'admin', 'akhilaptvm@gmail.com', '', 1, 1, 1, 0, 1, '2019-09-26 06:07:25');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;

-- Dumping structure for table ssp.web_users
CREATE TABLE IF NOT EXISTS `web_users` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1: Super Admin, 2: Branch Admin, 3: normal users',
  `active_status` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) DEFAULT 0,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ssp.web_users: 1 rows
/*!40000 ALTER TABLE `web_users` DISABLE KEYS */;
INSERT INTO `web_users` (`uid`, `name`, `username`, `password`, `email`, `mobile`, `role_id`, `user_type`, `active_status`, `isDeleted`, `created_user`, `created_date`) VALUES
	(2, 'Super Admin', 'admin', 'admin', 'akhilaptvm@gmail.com', '', 1, 1, 1, 0, 1, '2019-09-26 06:07:25');
/*!40000 ALTER TABLE `web_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

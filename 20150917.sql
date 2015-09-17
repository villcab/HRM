/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : db_hrm

Target Server Type    : MYSQL
Target Server Version : 50699
File Encoding         : 65001

Date: 2015-09-17 10:35:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contacto
-- ----------------------------
DROP TABLE IF EXISTS `contacto`;
CREATE TABLE `contacto` (
`id`  bigint(20) NOT NULL AUTO_INCREMENT ,
`nombres`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`correo`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`telefono`  int(11) NULL DEFAULT NULL ,
`created_at`  timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
`baja`  smallint(6) NULL DEFAULT 0 ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of contacto
-- ----------------------------
BEGIN;
INSERT INTO `contacto` VALUES ('1', 'BISMARCK VILLCA SOLIZ', 'bismarck.villca@gmail.com', '75307332', '2015-09-12 23:32:59', '0'), ('2', 'NEYER', '', null, '2015-09-12 23:35:12', '0');
COMMIT;

-- ----------------------------
-- Table structure for cuenta
-- ----------------------------
DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE `cuenta` (
`id`  bigint(20) NOT NULL AUTO_INCREMENT ,
`fecha_ini`  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP ,
`fecha_fin`  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP ,
`nombre_usuario`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`clave`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`created_at`  timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP ,
`baja`  smallint(6) NULL DEFAULT 0 ,
`id_contacto`  bigint(20) NOT NULL ,
`id_plan`  bigint(20) NOT NULL ,
`precio`  float NULL DEFAULT NULL ,
PRIMARY KEY (`id`),
FOREIGN KEY (`id_contacto`) REFERENCES `contacto` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
INDEX `fk_plan` (`id_plan`) USING BTREE ,
INDEX `fk_contacto` (`id_contacto`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of cuenta
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
`id`  bigint(20) NOT NULL AUTO_INCREMENT ,
`nombre`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`baja`  smallint(6) NULL DEFAULT 0 ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of plan
-- ----------------------------
BEGIN;
INSERT INTO `plan` VALUES ('1', 'ILIMITADO', '0'), ('2', '30 DIAS', '0'), ('3', '60 DIAS', '0');
COMMIT;

-- ----------------------------
-- Auto increment value for contacto
-- ----------------------------
ALTER TABLE `contacto` AUTO_INCREMENT=3;

-- ----------------------------
-- Auto increment value for cuenta
-- ----------------------------
ALTER TABLE `cuenta` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for plan
-- ----------------------------
ALTER TABLE `plan` AUTO_INCREMENT=4;

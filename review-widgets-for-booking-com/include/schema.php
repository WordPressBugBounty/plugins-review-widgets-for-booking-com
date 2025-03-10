<?php
defined('ABSPATH') or die('No script kiddies please!');
$ti_db_schema = [
'reviews' => "
CREATE TABLE ". $tiReviewsTableName ." (
 `id` TINYINT(1) NOT NULL AUTO_INCREMENT,
 `hidden` TINYINT(1) NOT NULL DEFAULT 0,
 `user` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
 `user_photo` TEXT,
 `text` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
 `rating` DECIMAL(3,1),
 `highlight` VARCHAR(11),
 `date` DATE,
 `reviewId` TEXT,
 `reply` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
 PRIMARY KEY  (`id`)
)
"
];
?>
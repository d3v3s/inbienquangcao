SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ad_spaces
-- ----------------------------
DROP TABLE IF EXISTS `ad_spaces`;
CREATE TABLE `ad_spaces`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_space` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `ad_code_728` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `ad_code_468` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `ad_code_300` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `ad_code_234` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ad_spaces
-- ----------------------------
INSERT INTO `ad_spaces` VALUES (1, 'index_top', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (2, 'index_bottom', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (3, 'post_top', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (4, 'post_bottom', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (5, 'category_top', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (6, 'category_bottom', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (7, 'tag_top', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (8, 'tag_bottom', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (9, 'search_top', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (10, 'search_bottom', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (11, 'profile_top', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (12, 'profile_bottom', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (13, 'reading_list_top', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (14, 'reading_list_bottom', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (15, 'sidebar_top', NULL, NULL, NULL, NULL);
INSERT INTO `ad_spaces` VALUES (16, 'sidebar_bottom', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `keywords` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT 0,
  `category_order` int(11) NULL DEFAULT NULL,
  `show_on_menu` int(11) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 1, 'Tin tức', 'tin-tuc', '1', 'blog', 0, 1, 2, '2020-01-31 10:00:00');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  `comment` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `message` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for gallery_categories
-- ----------------------------
DROP TABLE IF EXISTS `gallery_categories`;
CREATE TABLE `gallery_categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gallery_categories
-- ----------------------------
INSERT INTO `gallery_categories` VALUES (1, 1, 'Banner', '2020-02-04 16:00:55');

-- ----------------------------
-- Table structure for general_settings
-- ----------------------------
DROP TABLE IF EXISTS `general_settings`;
CREATE TABLE `general_settings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_lang` int(11) NOT NULL DEFAULT 1,
  `layout` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'layout_1',
  `slider_active` int(11) NULL DEFAULT 1,
  `site_color` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'default',
  `show_pageviews` int(11) NULL DEFAULT 1,
  `show_rss` int(11) NULL DEFAULT 1,
  `logo_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `favicon_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `google_analytics` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `mail_protocol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'smtp',
  `mail_host` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mail_port` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '587',
  `mail_username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mail_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mail_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `primary_font` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'open_sans',
  `secondary_font` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'roboto',
  `tertiary_font` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'verdana',
  `facebook_comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `pagination_per_page` int(11) NULL DEFAULT 6,
  `menu_limit` int(11) NULL DEFAULT 5,
  `multilingual_system` int(11) NULL DEFAULT 1,
  `registration_system` int(11) NULL DEFAULT 1,
  `comment_system` int(11) NULL DEFAULT 1,
  `emoji_reactions` int(11) NULL DEFAULT 1,
  `head_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `inf_key` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_code` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `recaptcha_site_key` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `recaptcha_secret_key` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `recaptcha_lang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of general_settings
-- ----------------------------
INSERT INTO `general_settings` VALUES (1, 1, 'layout_1', 1, 'default', 1, 0, 'uploads/logo/logo_5e3675b440818.png', 'uploads/logo/favicon_5e3692abc7f18.png', '', 'smtp', '', '', '', '', 'Infinite', 'open_sans', 'roboto', 'verdana', '', 10, 6, 0, 0, 0, 0, '', '', '', '', '', 'en', '2017-07-06 00:11:07');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_big` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_mid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_small` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_slider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 52 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (14, 'uploads/images/image_750x_5e3e2a64d309b.jpg', 'uploads/images/image_750x415_5e3e2a6509257.jpg', 'uploads/images/image_100x75_5e3e2a652b528.jpg', 'uploads/images/image_650x433_5e3e2a6536609.jpg');
INSERT INTO `images` VALUES (15, 'uploads/images/image_750x_5e3e2ae0eff13.jpg', 'uploads/images/image_750x415_5e3e2ae12367c.jpg', 'uploads/images/image_100x75_5e3e2ae1437ba.jpg', 'uploads/images/image_650x433_5e3e2ae14e739.jpg');
INSERT INTO `images` VALUES (16, 'uploads/images/image_750x_5e3e2b20a204c.jpg', 'uploads/images/image_750x415_5e3e2b20de88a.jpg', 'uploads/images/image_100x75_5e3e2b211f5d4.jpg', 'uploads/images/image_650x433_5e3e2b213adfd.jpg');
INSERT INTO `images` VALUES (17, 'uploads/images/image_750x_5e3e2ccc4f16d.jpg', 'uploads/images/image_750x415_5e3e2ccc8a884.jpg', 'uploads/images/image_100x75_5e3e2cccb9dbb.jpg', 'uploads/images/image_650x433_5e3e2cccd2060.jpg');
INSERT INTO `images` VALUES (18, 'uploads/images/image_750x_5e3e2d3aab937.jpg', 'uploads/images/image_750x415_5e3e2d3aedc80.jpg', 'uploads/images/image_100x75_5e3e2d3b30cef.jpg', 'uploads/images/image_650x433_5e3e2d3b552cb.jpg');
INSERT INTO `images` VALUES (19, 'uploads/images/image_750x_5e3e2d7b84c0e.jpg', 'uploads/images/image_750x415_5e3e2d7bc082d.jpg', 'uploads/images/image_100x75_5e3e2d7c00827.jpg', 'uploads/images/image_650x433_5e3e2d7c1b4b0.jpg');
INSERT INTO `images` VALUES (24, 'uploads/images/image_750x_5e3e303333e50.jpg', 'uploads/images/image_750x415_5e3e303376c7a.jpg', 'uploads/images/image_100x75_5e3e3033b0ebb.jpg', 'uploads/images/image_650x433_5e3e3033ccfa1.jpg');
INSERT INTO `images` VALUES (25, 'uploads/images/image_750x_5e3e3076ce6ba.jpg', 'uploads/images/image_750x415_5e3e30770ec5d.jpg', 'uploads/images/image_100x75_5e3e30773f13b.jpg', 'uploads/images/image_650x433_5e3e3077544c8.jpg');
INSERT INTO `images` VALUES (26, 'uploads/images/image_750x_5e3e30ccb07cb.jpg', 'uploads/images/image_750x415_5e3e30cce5c72.jpg', 'uploads/images/image_100x75_5e3e30cd1f1ae.jpg', 'uploads/images/image_650x433_5e3e30cd325c5.jpg');
INSERT INTO `images` VALUES (34, 'uploads/images/image_750x_5e3e34553feb7.jpg', 'uploads/images/image_750x415_5e3e34557d512.jpg', 'uploads/images/image_100x75_5e3e3455ae0c2.jpg', 'uploads/images/image_650x433_5e3e3455c623c.jpg');
INSERT INTO `images` VALUES (35, 'uploads/images/image_750x_5e3e34994feda.jpg', 'uploads/images/image_750x415_5e3e34998dd21.jpg', 'uploads/images/image_100x75_5e3e3499c196c.jpg', 'uploads/images/image_650x433_5e3e3499dc58e.jpg');
INSERT INTO `images` VALUES (36, 'uploads/images/image_750x_5e3e34f0d30e1.jpg', 'uploads/images/image_750x415_5e3e34f10dcbb.jpg', 'uploads/images/image_100x75_5e3e34f134f40.jpg', 'uploads/images/image_650x433_5e3e34f14563c.jpg');
INSERT INTO `images` VALUES (41, 'uploads/images/image_750x_5e3e3686c4d43.jpg', 'uploads/images/image_750x415_5e3e368708625.jpg', 'uploads/images/image_100x75_5e3e3687373d2.jpg', 'uploads/images/image_650x433_5e3e36874f021.jpg');
INSERT INTO `images` VALUES (42, 'uploads/images/image_750x_5e3e36cd45924.jpg', 'uploads/images/image_750x415_5e3e36cd792f3.jpg', 'uploads/images/image_100x75_5e3e36cda4ac8.jpg', 'uploads/images/image_650x433_5e3e36cdb8313.jpg');
INSERT INTO `images` VALUES (43, 'uploads/images/image_750x_5e3e373325fb7.jpg', 'uploads/images/image_750x415_5e3e373356c17.jpg', 'uploads/images/image_100x75_5e3e37337df5b.jpg', 'uploads/images/image_650x433_5e3e37338b9c4.jpg');
INSERT INTO `images` VALUES (45, 'uploads/images/image_750x_5e3eed27480fa.jpg', 'uploads/images/image_750x415_5e3eed27668ef.jpg', 'uploads/images/image_100x75_5e3eed2791ba7.jpg', 'uploads/images/image_650x433_5e3eed279eb5e.jpg');
INSERT INTO `images` VALUES (46, 'uploads/images/image_750x_5e40246736d44.jpg', 'uploads/images/image_750x415_5e402467539ca.jpg', 'uploads/images/image_100x75_5e40246768cc7.jpg', 'uploads/images/image_650x433_5e4024676a80c.jpg');
INSERT INTO `images` VALUES (47, 'uploads/images/image_750x_5e402469c7b35.jpg', 'uploads/images/image_750x415_5e402469e7f98.jpg', 'uploads/images/image_100x75_5e40246a08acb.jpg', 'uploads/images/image_650x433_5e40246a0a897.jpg');
INSERT INTO `images` VALUES (48, 'uploads/images/image_750x_5e40246bb49a6.jpg', 'uploads/images/image_750x415_5e40246bd0267.jpg', 'uploads/images/image_100x75_5e40246be5639.jpg', 'uploads/images/image_650x433_5e40246be711f.jpg');
INSERT INTO `images` VALUES (49, 'uploads/images/image_750x_5e40246deafb3.jpg', 'uploads/images/image_750x415_5e40246e152e1.jpg', 'uploads/images/image_100x75_5e40246e2a605.jpg', 'uploads/images/image_650x433_5e40246e2c04f.jpg');
INSERT INTO `images` VALUES (50, 'uploads/images/image_750x_5e40246ff0ea5.jpg', 'uploads/images/image_750x415_5e4024701c008.jpg', 'uploads/images/image_100x75_5e402470330aa.jpg', 'uploads/images/image_650x433_5e40247034f53.jpg');
INSERT INTO `images` VALUES (51, 'uploads/images/image_750x_5e40247225324.jpg', 'uploads/images/image_750x415_5e40247242521.jpg', 'uploads/images/image_100x75_5e40247256b5f.jpg', 'uploads/images/image_650x433_5e402472587dd.jpg');

-- ----------------------------
-- Table structure for languages
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_form` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_direction` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `language_order` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of languages
-- ----------------------------
INSERT INTO `languages` VALUES (1, 'Tiếng Việt', 'vi', 'vi', 'default', 'ltr', 1, 1);

-- ----------------------------
-- Table structure for newsletters
-- ----------------------------
DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE `newsletters`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `page_description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `page_keywords` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_custom` int(11) NULL DEFAULT 1,
  `page_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `page_order` int(11) NULL DEFAULT 5,
  `page_active` int(11) NULL DEFAULT 1,
  `title_active` int(11) NULL DEFAULT 1,
  `breadcrumb_active` int(11) NULL DEFAULT 1,
  `right_column_active` int(11) NULL DEFAULT 1,
  `need_auth` int(11) NULL DEFAULT 0,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'header',
  `link` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (3, 1, 'Liên hệ', 'Trang liên hệ', 'contact', 'lien-he', 0, NULL, 4, 1, 0, 1, 1, 0, 'header', NULL, 0, '2017-12-20 23:23:51');
INSERT INTO `pages` VALUES (4, 1, 'Login', 'Login Page', 'login,infinite', 'login', 0, NULL, 4, 1, 1, 1, 1, 0, 'none', NULL, 0, '2017-12-20 23:24:51');
INSERT INTO `pages` VALUES (5, 1, 'Register', 'Register Page', 'register,infinite', 'register', 0, NULL, 5, 1, 1, 1, 1, 0, 'none', NULL, 0, '2017-12-20 23:25:55');
INSERT INTO `pages` VALUES (6, 1, 'Change Password', 'Change Password Page', 'change password,infinite', 'change-password', 0, NULL, 6, 1, 1, 1, 1, 0, 'none', NULL, 0, '2017-12-20 23:26:44');
INSERT INTO `pages` VALUES (7, 1, 'Update Profile', 'Update Profile Page', 'update profile,infinite', 'profile-update', 0, NULL, 7, 1, 1, 1, 1, 0, 'none', NULL, 0, '2017-12-20 23:27:23');
INSERT INTO `pages` VALUES (8, 1, 'Reading List', 'Reading List Page', 'reading list,infinite', 'reading-list', 0, NULL, 8, 1, 1, 1, 1, 0, 'none', NULL, 0, '2017-12-20 23:28:19');
INSERT INTO `pages` VALUES (9, 1, 'Reset Password', 'Reset Password Page', 'reset password,infinite', 'reset-password', 0, NULL, 9, 1, 1, 1, 1, 0, 'none', NULL, 0, '2017-12-20 23:29:06');
INSERT INTO `pages` VALUES (12, 1, 'Giới thiệu', 'giới thiệu công ty', 'About us', 'gioi-thieu', 0, '', 1, 1, 1, 1, 1, 0, 'header', NULL, 0, '2020-02-01 04:40:59');
INSERT INTO `pages` VALUES (13, 1, 'Dự án', 'Dự án đã làm', 'projects', 'du-an', 0, '', 2, 1, 1, 1, 1, 0, 'header', NULL, 0, '2020-02-01 04:41:37');
INSERT INTO `pages` VALUES (14, 1, 'Dịch vụ', 'Dịch vụ cung cấp', 'services', 'dich-vu', 0, '', 3, 1, 1, 1, 0, 0, 'header', NULL, 0, '2020-02-01 04:42:24');
INSERT INTO `pages` VALUES (15, 1, 'Mẫu chữ', 'Mẫu chữ', 'Mẫu chữ', 'mau-chu', 0, '', 3, 1, 1, 1, 1, 0, 'header', NULL, 0, '2020-02-01 04:43:09');
INSERT INTO `pages` VALUES (16, 1, 'Tin tức', 'Trang tin tức', 'Tin tức', 'tin-tuc', 0, '', 5, 1, 1, 1, 1, 0, 'header', NULL, 0, '2020-02-01 05:17:52');
INSERT INTO `pages` VALUES (17, 1, 'Hình ảnh', 'Trang hình ảnh', 'Hình ảnh', 'hinh-anh', 0, '', 10, 1, 1, 1, 1, 0, 'header', NULL, 0, '2020-02-01 05:17:52');

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `path_big` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `path_small` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `type` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `visibility` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of photos
-- ----------------------------
INSERT INTO `photos` VALUES (13, 1, 'Slider 1', 1, 'uploads/gallery/image_1920x_5e418093169c9.jpg', 'uploads/gallery/image_500x_5e4180939e406.jpg', '2020-02-10 15:57:39', 'banner', 1);
INSERT INTO `photos` VALUES (14, 1, 'Slider 2', 1, 'uploads/gallery/image_1920x_5e4180c103a00.jpg', 'uploads/gallery/image_500x_5e4180c171bbf.jpg', '2020-02-10 16:11:45', 'banner', 1);

-- ----------------------------
-- Table structure for poll_votes
-- ----------------------------
DROP TABLE IF EXISTS `poll_votes`;
CREATE TABLE `poll_votes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `vote` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for polls
-- ----------------------------
DROP TABLE IF EXISTS `polls`;
CREATE TABLE `polls`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option7` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option8` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option9` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `option10` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` int(11) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for post_images
-- ----------------------------
DROP TABLE IF EXISTS `post_images`;
CREATE TABLE `post_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NULL DEFAULT NULL,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post_images
-- ----------------------------
INSERT INTO `post_images` VALUES (1, 2, 'uploads/images/image_750x_5e34540cf3656.jpg', '2020-02-03 15:35:03');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `title_slug` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `summary` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `keywords` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `subcategory_id` int(11) NULL DEFAULT NULL,
  `image_big` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_mid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_small` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_slider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_slider` int(11) NULL DEFAULT 0,
  `is_picked` int(11) NULL DEFAULT 0,
  `hit` int(11) NULL DEFAULT 0,
  `slider_order` int(11) NULL DEFAULT 0,
  `optional_url` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `need_auth` int(11) NULL DEFAULT 0,
  `visibility` int(11) NULL DEFAULT 1,
  `status` int(11) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 89 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 1, 'Làm biển quảng cáo phòng khám răng đẹp năm 2020', 'sdsd', 'sd', '', 'sd', 1, 1, 0, 'uploads/images/image_750x_5e399951aed04.jpg', 'uploads/images/image_750x415_5e399951cc151.jpg', 'uploads/images/image_100x75_5e399951ec782.jpg', 'uploads/images/image_650x433_5e39995200d60.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:30');
INSERT INTO `posts` VALUES (2, 1, 'Những điều cần biết khi làm biển quảng cáo mica', 'sdsd-3-2', 'Khi bắt đầu kế hoạch thi công một biển quảng cáo cho cửa hàng kinh doanh có phải bạn luôn phân vân không biết nên lựa chọn chất liệu nào thì tốt nhất, chất liệu nào thì sẽ cho chi phí vừa phải hay là chất liệu nào sẽ tôn lên vẻ sang trọng cho cửa hàng của bạn và còn vô vàn câu hỏi bạn muốn được giải đáp, biển quảng cáo sử dụng chất liệu mica là lời giải hoàn hảo cho những câu hỏi của bạn, vậy cùng tìm hiểu thêm thông tin về biển quảng cáo mica qua bài viết sau nhé', '<p>Khi bắt đầu kế hoạch thi c&ocirc;ng một biển quảng c&aacute;o cho cửa h&agrave;ng kinh doanh c&oacute; phải bạn lu&ocirc;n ph&acirc;n v&acirc;n kh&ocirc;ng biết n&ecirc;n lựa chọn chất liệu n&agrave;o th&igrave; tốt nhất, chất liệu n&agrave;o th&igrave; sẽ cho chi ph&iacute; vừa phải hay l&agrave; chất liệu n&agrave;o sẽ t&ocirc;n l&ecirc;n vẻ sang trọng cho cửa h&agrave;ng của bạn v&agrave; c&ograve;n v&ocirc; v&agrave;n c&acirc;u hỏi bạn muốn được giải đ&aacute;p, biển quảng c&aacute;o sử dụng chất liệu mica l&agrave; lời giải ho&agrave;n hảo cho những c&acirc;u hỏi của bạn, vậy c&ugrave;ng t&igrave;m hiểu th&ecirc;m th&ocirc;ng tin về biển quảng c&aacute;o mica qua b&agrave;i viết sau nh&eacute;.</p>\r\n\r\n<h2>1. Tại sao Mica được sử dụng l&agrave;m biển quảng c&aacute;o?</h2>\r\n\r\n<h3>Đặc t&iacute;nh nổi bật của Mica.</h3>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/Mica\" rel=\"noreferrer noopener\" target=\"_blank\">Mica</a>&nbsp;được biết đến l&agrave; một nguy&ecirc;n liệu tuyệt vời, với nhiều t&iacute;nh năng nổi bật như: T&iacute;nh chất b&oacute;ng đều &oacute;ng &aacute;nh, xuy&ecirc;n s&aacute;ng tốt, m&agrave;u sắc đa dạng, kh&ocirc;ng thấm nước. Đặc biệt, tấm Mica c&oacute; khả năng chịu nhiệt cao, uốn dẻo tốt, rất dễ d&agrave;ng trong việc tạo h&igrave;nh, uốn &eacute;p theo &yacute; muốn v&agrave; gia c&ocirc;ng lắp gh&eacute;p.</p>\r\n\r\n<p><img alt=\"Bảng màu mica trong thi công quảng cáo\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/12/bang-mau-mica-trong-quang-cao.jpg\" /></p>\r\n\r\n<p>Bảng m&agrave;u mica trong thi c&ocirc;ng quảng c&aacute;o</p>\r\n\r\n<p>Mica c&ograve;n c&oacute; thể thay đổi độ d&agrave;y mỏng kh&aacute;c nhau từ 1ly &ndash; 10ly, đ&aacute;p ứng được sự đa dạng về y&ecirc;u cầu của Kh&aacute;ch h&agrave;ng, biển quảng c&aacute;o Mica cũng c&oacute; độ d&agrave;y mỏng kh&aacute;c nhau ph&ugrave; hợp với moi kh&ocirc;ng gian cửa h&agrave;ng.</p>\r\n\r\n<h3>Sự đa dạng của Mica.</h3>\r\n\r\n<p>Hiện nay, tr&ecirc;n thị trường c&oacute; rất nhiều loại Mica c&oacute; xuất xứ kh&aacute;c nhau: Trung Quốc, Đ&agrave;i Loan, Malaysia, Nhật Bản. V&igrave; vậy, gi&aacute; cả cũng kh&aacute;c nhau, Kh&aacute;ch h&agrave;ng c&oacute; thể c&acirc;n đối chi ph&iacute; v&agrave; thoải m&aacute;i lựa chọn dễ d&agrave;ng. Tuy nhi&ecirc;n, Mica của Nhật Bản chi ph&iacute; sẽ hơi cao, loại Mica hiện đang được sử dụng phổ biến nhất l&agrave; Mica Đ&agrave;i loan v&igrave; gi&aacute; cả v&agrave; chất lượng đều ph&ugrave; hợp.</p>\r\n\r\n<p><img alt=\"Biển quảng cáo thời trang Messi\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/08/bien-quang-cao-thoi-trang-nam-mesi.jpg\" /></p>\r\n\r\n<p>Biển quảng c&aacute;o thời trang Messi</p>\r\n\r\n<h2>2. Ứng dụng Mica l&agrave;m biển quảng c&aacute;o Mica đẹp</h2>\r\n\r\n<h3>Mica kết hợp với tấm alu l&agrave;m biển quảng c&aacute;o.</h3>\r\n\r\n<p>Sự kết hợp n&agrave;y ch&iacute;nh l&agrave; sử dụng chất liệu Mica để l&agrave;m những bộ chữ nổi, lắp tr&ecirc;n nền những m&agrave;u sắc đa dạng của tấm alu.</p>\r\n\r\n<p>Với c&aacute;c đặc t&iacute;nh tuyệt vời của Mica sẽ tạo n&ecirc;n cho bạn những bộ chữ, logo s&aacute;ng b&oacute;ng v&agrave; nhiều m&agrave;u sắc. Ch&iacute;nh v&igrave; vậy, việc kết hợp những d&ograve;ng chữ nổi bật tr&ecirc;n với một tấm alu nh&atilde; nhặn ch&iacute;nh l&agrave; c&aacute;ch tuyệt vời nhất để t&ocirc;n l&ecirc;n biển quảng c&aacute;o cửa h&agrave;ng của bạn.</p>\r\n\r\n<p><img alt=\"Mẫu chữ: mặt mica viền aluminium hậu fomex\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/06/mat-mica-vien-alu-hau-fomex.jpg\" /></p>\r\n\r\n<p>Mẫu chữ sử dụng mặt mica đỏ kết hợp viền alu</p>\r\n\r\n<p>Hai chất liệu Mica v&agrave; Alu kết hợp c&oacute; thể l&agrave;m biển quảng c&aacute;o alu gắn chữ nổi led hắt ch&acirc;n độc đ&aacute;o, nh&igrave;n rất sang trọng thường được sử dụng trong c&aacute;c trung t&acirc;m thương mại. Với loại biển n&agrave;y, bạn n&ecirc;n sử dụng chữ m&agrave;u tối một ch&uacute;t, khi gắn led, biển hiệu của bạn sẽ nổi bật hơn.</p>\r\n\r\n<h3>Sử dụng Mica l&agrave;m logo cửa h&agrave;ng</h3>\r\n\r\n<p>Đối với những logo y&ecirc;u cầu m&agrave;u sắc sặc sỡ, bạn kh&ocirc;ng n&ecirc;n sử dụng qu&aacute; nhiều m&agrave;u sắc đan xen, sẽ l&agrave;m Kh&aacute;ch h&agrave;ng loạn mắt</p>\r\n\r\n<p>V&igrave; độ b&oacute;ng v&agrave; nổi bật của chất liệu n&agrave;y, n&ecirc;n biển quảng c&aacute;o Mica khi lắp một m&igrave;nh th&igrave; logo của bạn vẫn sẽ được Kh&aacute;ch h&agrave;ng đặc biệt ch&uacute; &yacute;.</p>\r\n\r\n<p><img alt=\"Logo Hai Tea trong nhà\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/09/bien-quang-cao-tra-sua-hai-tea-1.jpg\" /></p>\r\n\r\n<p>Logo Hai Tea sử dụng mica in UV l&ecirc;n bề mặt kết hợp led &acirc;m hắt s&aacute;ng</p>\r\n\r\n<p>Chất liệu Mica c&oacute; nhiều ưu điểm, chủ yếu được sử dụng l&agrave;m chữ nổi của biển quảng c&aacute;o cửa h&agrave;ng, v&igrave; vậy, c&aacute;c loại chữ được tạo n&ecirc;n từ Mica rất đa dạng như: chữ Mica &eacute;p nổi, Mica uốn nổi, Mica lắp đ&egrave;n led&hellip;</p>\r\n\r\n<h2>C&aacute;c chất liệu kết hợp với Mica l&agrave;m chữ nổi</h2>\r\n\r\n<p>Ngo&agrave;i alu th&igrave; chất liệu Mica c&oacute; thể kết hợp với inox, fomex tole, nh&ocirc;m xước mỗi chất liệu đều c&oacute; những điểm mạnh điểm yếu kh&aacute;c nhau nhưng mica lu&ocirc;n l&agrave; sự lựa chọn của kh&aacute;ch h&agrave;ng khi l&ecirc;n kế hoạch thi c&ocirc;ng biển bảng quảng c&aacute;o cho cửa h&agrave;ng của m&igrave;nh</p>\r\n\r\n<p>Sự kết hợp n&agrave;y c&oacute; thể tạo n&ecirc;n t&iacute;nh độc đ&aacute;o cho c&aacute;c mẫu chữ, khai th&aacute;c tối đa c&aacute;c ưu điểm, loại trừ nhược điểm của c&aacute;c chất liệu l&agrave;m biển quảng c&aacute;o. Một số loại biển kết hợp c&aacute;c chất liệu như vậy c&ograve;n c&oacute; thể giảm gi&aacute; th&agrave;nh, mang lại nhiều lợi &iacute;ch v&agrave; gi&aacute; trị cho bạn.</p>\r\n\r\n<p><img alt=\"Chữ lọng viền inox gương mặt mica\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/06/mat-mica-vien-inox-guong-hau-fomex.jpg\" /></p>\r\n\r\n<p>chữ mặt Mica kết hợp với Inox</p>\r\n\r\n<p><img alt=\"Mặt mica, viền nhôm địmh hình, hậu fomex gắn led âm\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/06/mat-mica-vien-inox-xuoc-hau-fomex-4.jpg\" /></p>\r\n\r\n<p>Chữ mica kết hợp với viền Nh&ocirc;m</p>\r\n\r\n<p>Nếu bạn đang c&oacute; nhu cầu về l&agrave;m biển quảng c&aacute;o, đừng ngần ngại, h&atilde;y nhấc m&aacute;y gọi cho ch&uacute;ng t&ocirc;i để được tư vấn miễn ph&iacute; nh&eacute;. Holine&hellip;</p>\r\n', 'sdsd', 1, 1, 0, 'uploads/images/image_750x_5e399951aed04.jpg', 'uploads/images/image_750x415_5e399951cc151.jpg', 'uploads/images/image_100x75_5e399951ec782.jpg', 'uploads/images/image_650x433_5e39995200d60.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:39');
INSERT INTO `posts` VALUES (3, 1, 'Sự cần thiết của biển vẫy và các mẫu biển vẫy HOT năm 2020', 'sdsdasas', 'áas', '', 'á', 1, 1, 0, 'uploads/images/image_750x_5e384e3404470.jpg', 'uploads/images/image_750x415_5e384e34235a8.jpg', 'uploads/images/image_100x75_5e384e343cce1.jpg', 'uploads/images/image_650x433_5e384e3441cb0.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:58');
INSERT INTO `posts` VALUES (4, 1, 'Thu hút tối đa sự chú ý với biển quảng cáo hộp đèn', 'thu-hut-toi-da-su-chu-y-voi-bien-quang-cao-hop-den', 'dfsdd', '<h2>Kh&aacute;i niệm biển quảng c&aacute;o hộp đ&egrave;n</h2>\r\n\r\n<p>Biển quảng c&aacute;o hộp đ&egrave;n l&agrave; loại biển c&oacute; khung hộp, được căng phủ một lớp chất liệu xuy&ecirc;n s&aacute;ng v&agrave; c&oacute; lắp đ&egrave;n b&ecirc;n trong. Biển c&oacute; thể sử dụng được trong nhiều m&ocirc;i trường kh&aacute;c nhau, dễ lắp đặt v&agrave; th&aacute;o bỏ m&agrave; kh&ocirc;ng ảnh hưởng đến bề mặt tiếp x&uacute;c d&ugrave; trong thời gian d&agrave;i.</p>\r\n\r\n<p><img alt=\"Biển quảng cáo nhà hàng nướng Hu-Tong tại Nguyễn Hoàng\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/06/bien-quang-cao-nha-hang-hutong-nguyen-hoang.jpg\" /></p>\r\n\r\n<p>Biển quảng c&aacute;o nh&agrave; h&agrave;ng nướng Hu-Tong tại Nguyễn Ho&agrave;ng</p>\r\n\r\n<p>Loại&nbsp;<a href=\"https://quangcaotaybac.vn/\" rel=\"noreferrer noopener\" target=\"_blank\"><strong>biển quảng c&aacute;o</strong></a>&nbsp;n&agrave;y được c&aacute;c đơn vị kinh doanh sử dụng rộng r&atilde;i bởi sự đa dạng về mẫu m&atilde; v&agrave; sự tiện dụng của n&oacute;. Mẫu biển sơ khai đơn giản nhất l&agrave; biển được l&agrave;m bởi khung xương sắt h&agrave;n th&agrave;nh hộp, căng bạt xuy&ecirc;n s&aacute;ng v&agrave; lắp b&oacute;ng điện b&ecirc;n trong nhằm mục đ&iacute;ch g&acirc;y s&aacute;ng nổi bật khi trời tối. Việc n&agrave;y khiến cho biển quảng c&aacute;o ph&aacute;t huy được tối đa c&ocirc;ng dụng của n&oacute;, g&acirc;y được sự ch&uacute; &yacute;, nổi bật thương hiệu với người đi qua d&ugrave; ban ng&agrave;y hay ban đ&ecirc;m.</p>\r\n\r\n<h2>C&aacute;c loại đ&egrave;n được sử dụng trong l&ograve;ng biển</h2>\r\n\r\n<p>C&oacute; hai loại biển quảng c&aacute;o hộp đ&egrave;n được d&ugrave;ng phổ biến l&agrave; b&oacute;ng đ&egrave;n điện v&agrave; đ&egrave;n Led, mục đ&iacute;ch đều l&agrave; chiếu s&aacute;ng nội dung biển quảng c&aacute;o, tuy nhi&ecirc;n, việc sử dụng b&oacute;ng đ&egrave;n hay đ&egrave;n leb lại l&agrave; một c&acirc;u chuyện đ&aacute;ng lưu t&acirc;m.</p>\r\n\r\n<p><img alt=\"Led sử dụng trong công trình tại nguyễn xiển\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/05/bien-hop-den-su-dung-lam-hang-dao-cong-trinh.jpg\" /></p>\r\n\r\n<p>Led sử dụng trong c&ocirc;ng tr&igrave;nh tại nguyễn xiển</p>\r\n\r\n<p>Đối với việc sử dụng b&oacute;ng đ&egrave;n điện: Việc n&agrave;y đang dần trở n&ecirc;n lạc hậu, kh&ocirc;ng khả thi v&agrave; &iacute;t được sử dụng bởi chi ph&iacute; cao, đ&egrave;n dễ hư hỏng dẫn đến tuổi thọ của biển rất thấp. Ngo&agrave;i ra, &aacute;nh s&aacute;ng của đ&egrave;n điện kh&ocirc;ng được trong v&agrave; xuy&ecirc;n suốt, kh&ocirc;ng ph&aacute;t huy được tối đa c&ocirc;ng dụng của biển quảng c&aacute;o.</p>\r\n\r\n<p>Ngược lại, khi sử dụng đ&egrave;n leb, chi ph&iacute; tương đương với b&oacute;ng đ&egrave;n điện, &aacute;nh s&aacute;ng trong, xuy&ecirc;n s&aacute;ng tốt v&agrave; độ bền cao. Việc sử dụng loại đ&egrave;n n&agrave;y gần như đ&aacute;p ứng được tối đa nhu cầu của mọi Kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<blockquote>\r\n<p>Bạn đọc xem th&ecirc;m!</p>\r\n<cite>&gt;&gt;&nbsp;<a href=\"https://quangcaotaybac.vn/bien-quang-cao-led-nhung-van-de-khach-hang-phai-biet/\" rel=\"noreferrer noopener\" target=\"_blank\">Biển quảng c&aacute;o led v&agrave; những vấn đề kh&aacute;ch h&agrave;ng cần phải biết?</a></cite></blockquote>\r\n\r\n<h2>C&aacute;c chất liệu sử dụng l&agrave;m mặt biển quảng c&aacute;o hộp đ&egrave;n</h2>\r\n\r\n<p>Do nhu cầu s&aacute;ng tạo v&agrave; độc đ&aacute;o về biển quảng c&aacute;o của từng chủ cửa h&agrave;ng v&agrave; doanh nghiệp, n&ecirc;n loại biển n&agrave;y cũng được thi c&ocirc;ng tr&ecirc;n nhiều chất liệu bạt xuy&ecirc;n s&aacute;ng kh&aacute;c nhau, tạo n&ecirc;n những điểm nổi bật ri&ecirc;ng biệt.</p>\r\n\r\n<h3>Loại thứ nhất: Sử dụng bạt xuy&ecirc;n s&aacute;ng 3M.</h3>\r\n\r\n<p>Đ&acirc;y l&agrave; loại bạt cao cấp, được c&aacute;c doanh nghiệp lớn sử dụng nhiều nhất. Chất liệu bạt n&agrave;y c&oacute; ưu điểm vượt trội l&agrave; khả năng xuy&ecirc;n s&aacute;ng v&agrave; độ sắc n&eacute;t rất cao, g&acirc;y ch&uacute; &yacute; mạnh tới người đi đường, thể hiện r&otilde; logo, h&igrave;nh ảnh thương hiệu.</p>\r\n\r\n<p><img alt=\"Biển hộp đèn mica gắn led siêu sáng\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/04/bien-hop-den-mica-gan-led.jpg\" /></p>\r\n\r\n<p>Biển hộp đ&egrave;n mica gắn led si&ecirc;u s&aacute;ng</p>\r\n\r\n<p>Ngo&agrave;i ra, bạt 3M c&ograve;n giữ m&agrave;u rất ổn định trong mọi điều kiện &aacute;nh s&aacute;ng ng&agrave;y hay đ&ecirc;m. Độ bền cao, chống chọi được mọi thời tiết, d&ugrave; trong nh&agrave;, trong trung t&acirc;m thương mại hay ngo&agrave;i trời&hellip;chất liệu bạt n&agrave;y vẫn rất tốt, &iacute;t hư hỏng.</p>\r\n\r\n<h3>Loại thứ hai: Sử dụng chất liệu Mica si&ecirc;u mỏng.</h3>\r\n\r\n<p>Với chất liệu biển quảng c&aacute;o n&agrave;y, sản phẩm biển của bạn sẽ rất tinh tế v&agrave; g&acirc;y ch&uacute; &yacute;, thiện cảm với người nh&igrave;n bởi độ mỏng, s&aacute;ng v&agrave; tiết kiệm kh&ocirc;ng gian tối đa. Với độ d&agrave;y tấm Mica chỉ từ 3.5mm bạn c&oacute; thể gắn trực tiếp v&agrave;o tường m&agrave; kh&ocirc;ng hề g&acirc;y độ cợn hay d&agrave;y tường, kh&ocirc;ng gian vẫn rất tho&aacute;ng m&agrave; sự nổi bật thương hiệu của bạn th&igrave; tuyệt vời.</p>\r\n\r\n<p><img alt=\"Tranh điện mica siêu mỏng\" src=\"https://quangcaotaybac.vn/wp-content/uploads/2019/12/tranh-dien-mica-sieu-mong.jpg\" /></p>\r\n\r\n<p>Tranh điện mica si&ecirc;u mỏng</p>\r\n\r\n<h3>Loại thứ ba: Sử dụng bạt xuy&ecirc;n s&aacute;ng Hiflex</h3>\r\n\r\n<p>Bạt in hiflex l&agrave; chất liệu m&agrave;n nhựa m&agrave;u trắng sữa, với kết cấu l&agrave; 1 lớp vải polime, ở giữa được phủ một lớp nhựa PVC mỏng bao bọc.</p>\r\n\r\n<p>Loại biển sử dụng chất liệu n&agrave;y c&oacute; ưu điểm l&agrave; gi&aacute; th&agrave;nh vừa phải, ph&ugrave; hợp với c&aacute;c cửa h&agrave;ng kinh doanh quy m&ocirc; vừa v&agrave; nhỏ, c&oacute; thể in đa dạng nội dung, h&igrave;nh ảnh, c&aacute;c k&iacute;ch cỡ chữ kh&aacute;c nhau. C&oacute; độ dẻo dai, chống chọi tốt với mọi thời tiết. Đặc biệt, n&oacute; c&oacute; đặc t&iacute;nh chống thấm nước, chịu lực, bề mặt phẳng ph&ugrave; hợp để căng trải tr&ecirc;n mọi loại khung, đ&aacute;p ứng được đa dạng y&ecirc;u cầu của c&aacute;c Kh&aacute;ch h&agrave;ng.</p>\r\n', '', 1, 1, 0, 'uploads/images/image_750x_5e40246736d44.jpg', 'uploads/images/image_750x415_5e402467539ca.jpg', 'uploads/images/image_100x75_5e40246768cc7.jpg', 'uploads/images/image_650x433_5e4024676a80c.jpg', 0, 0, 2, 0, '', 0, 1, 1, '2020-02-04 16:18:08');
INSERT INTO `posts` VALUES (5, 1, 'Biển Quảng Cáo Led Những Vấn Đề Khách Hàng Phải Biết', 'sdsd', 'sd', '', 'sd', 1, 1, 0, 'uploads/images/image_750x_5e399951aed04.jpg', 'uploads/images/image_750x415_5e399951cc151.jpg', 'uploads/images/image_100x75_5e399951ec782.jpg', 'uploads/images/image_650x433_5e39995200d60.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:30');
INSERT INTO `posts` VALUES (6, 1, 'Tổng hợp chất liệu làm biển nail đẹp, giá rẻ', 'sdsd-3', 'sdsd', '', 'sdsd', 1, 1, 0, 'uploads/images/image_750x_5e399951aed04.jpg', 'uploads/images/image_750x415_5e399951cc151.jpg', 'uploads/images/image_100x75_5e399951ec782.jpg', 'uploads/images/image_650x433_5e39995200d60.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:39');
INSERT INTO `posts` VALUES (7, 1, 'Tư vấn và thiết kế biển vẫy tiệm nail đẹp', 'sdsdasas', 'áas', '', 'á', 1, 1, 0, 'uploads/images/image_750x_5e384e3404470.jpg', 'uploads/images/image_750x415_5e384e34235a8.jpg', 'uploads/images/image_100x75_5e384e343cce1.jpg', 'uploads/images/image_650x433_5e384e3441cb0.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:58');
INSERT INTO `posts` VALUES (8, 1, 'Tiêu chuẩn và yêu cầu bắt buộc để có một mẫu biển nail đẹp', 'hfdg', 'dfsdd', '', '', 1, 1, 0, 'uploads/images/image_750x_5e34540cf3656.jpg', 'uploads/images/image_750x415_5e34540d2272a.jpg', 'uploads/images/image_100x75_5e34540d3d7b0.jpg', 'uploads/images/image_650x433_5e34540d4346f.jpg', 0, 0, 3, 0, '', 0, 1, 1, '2020-02-04 16:18:08');
INSERT INTO `posts` VALUES (11, 1, 'Biển led vẫy cafe: Phương tiện hút khách đến của hàng', 'sdsd', 'sd', '', 'sd', 1, 1, 0, 'uploads/images/image_750x_5e399951aed04.jpg', 'uploads/images/image_750x415_5e399951cc151.jpg', 'uploads/images/image_100x75_5e399951ec782.jpg', 'uploads/images/image_650x433_5e39995200d60.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:30');
INSERT INTO `posts` VALUES (22, 1, 'Địa chỉ thiết kế và thi công mẫu biển hiệu quán cafe thu hút tại Hà Nội', 'sdsd-3', 'sdsd', '', 'sdsd', 1, 1, 0, 'uploads/images/image_750x_5e399951aed04.jpg', 'uploads/images/image_750x415_5e399951cc151.jpg', 'uploads/images/image_100x75_5e399951ec782.jpg', 'uploads/images/image_650x433_5e39995200d60.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:39');
INSERT INTO `posts` VALUES (33, 1, 'Gợi ý một số mẫu chữ làm biển nail đẹp', 'sdsdasas', 'áas', '', 'á', 1, 1, 0, 'uploads/images/image_750x_5e384e3404470.jpg', 'uploads/images/image_750x415_5e384e34235a8.jpg', 'uploads/images/image_100x75_5e384e343cce1.jpg', 'uploads/images/image_650x433_5e384e3441cb0.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:58');
INSERT INTO `posts` VALUES (44, 1, 'Mẫu chữ cực đẹp dành riêng cho biển hiệu café', 'hfdg', 'dfsdd', '', '', 1, 1, 0, 'uploads/images/image_750x_5e34540cf3656.jpg', 'uploads/images/image_750x415_5e34540d2272a.jpg', 'uploads/images/image_100x75_5e34540d3d7b0.jpg', 'uploads/images/image_650x433_5e34540d4346f.jpg', 0, 0, 1, 0, '', 0, 1, 1, '2020-02-04 16:18:08');
INSERT INTO `posts` VALUES (55, 1, 'Tăng doanh thu và khách hàng nhờ mẫu biển quảng cáo nail mi đẹp', 'sdsd', 'sd', '', 'sd', 1, 1, 0, 'uploads/images/image_750x_5e399951aed04.jpg', 'uploads/images/image_750x415_5e399951cc151.jpg', 'uploads/images/image_100x75_5e399951ec782.jpg', 'uploads/images/image_650x433_5e39995200d60.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:30');
INSERT INTO `posts` VALUES (66, 1, 'Làm biển cafe đẹp – “vũ khí” bí mật tạo sức hút với khách hàng', 'sdsd-3', 'sdsd', '', 'sdsd', 1, 1, 0, 'uploads/images/image_750x_5e399951aed04.jpg', 'uploads/images/image_750x415_5e399951cc151.jpg', 'uploads/images/image_100x75_5e399951ec782.jpg', 'uploads/images/image_650x433_5e39995200d60.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:39');
INSERT INTO `posts` VALUES (77, 1, 'Biển quảng cáo cafe: lựa chọn loại biển quảng cáo nào đẹp nhất hiện nay?', 'sdsdasas', 'áas', '', 'á', 1, 1, 0, 'uploads/images/image_750x_5e384e3404470.jpg', 'uploads/images/image_750x415_5e384e34235a8.jpg', 'uploads/images/image_100x75_5e384e343cce1.jpg', 'uploads/images/image_650x433_5e384e3441cb0.jpg', 0, 0, 0, 0, '', 0, 1, 1, '2020-02-04 16:17:58');
INSERT INTO `posts` VALUES (88, 1, 'Làm biển quán cafe đẹp tiết kiệm chi phí', 'hfdg', 'dfsdd', '', '', 1, 1, 0, 'uploads/images/image_750x_5e34540cf3656.jpg', 'uploads/images/image_750x415_5e34540d2272a.jpg', 'uploads/images/image_100x75_5e34540d3d7b0.jpg', 'uploads/images/image_650x433_5e34540d4346f.jpg', 0, 0, 1, 0, '', 0, 1, 1, '2020-02-04 16:18:08');

-- ----------------------------
-- Table structure for project_images
-- ----------------------------
DROP TABLE IF EXISTS `project_images`;
CREATE TABLE `project_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NULL DEFAULT NULL,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

DROP TABLE IF EXISTS `service_images`;
CREATE TABLE `service_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NULL DEFAULT NULL,
  `image_path` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

DROP TABLE IF EXISTS `typography_images`;
CREATE TABLE `service_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typography_id` int(11) NULL DEFAULT NULL,
  `image_path` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `summary` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `keywords` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `image_big` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_mid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_small` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_slider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `project_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'ALL',
  `customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `estimation` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES (3, 1, 'Công trình: Len Việt - Đản Dị', 'Công trình: Len Việt - Đản Dị', '<p>sdsd</p>\r\n', 'sd', 1, 'uploads/images/image_750x_5e3e36cd45924.jpg', 'uploads/images/image_750x415_5e3e36cd792f3.jpg', 'uploads/images/image_100x75_5e3e36cda4ac8.jpg', 'uploads/images/image_650x433_5e3e36cdb8313.jpg', 1, '2020-02-03 15:35:32', 'healthcare', NULL, NULL);
INSERT INTO `projects` VALUES (6, 1, 'Công trình: Novigas - Ngã tư 1/5 TT Đông Anh', 'Công trình: Novigas - Ngã tư 1/5 TT Đông Anh', '<p>sd</p>\r\n', 'sdsd', 1, 'uploads/images/image_750x_5e3e3686c4d43.jpg', 'uploads/images/image_750x415_5e3e368708625.jpg', 'uploads/images/image_100x75_5e3e3687373d2.jpg', 'uploads/images/image_650x433_5e3e36874f021.jpg', 1, '2020-02-04 15:33:52', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (7, 1, 'Công trình: HN Boutique - Lạc Long Quân', 'Công trình: HN Boutique - Lạc Long Quân', '<p>dffgdfdf</p>\r\n', 'ssd', 1, 'uploads/images/image_750x_5e3e34f0d30e1.jpg', 'uploads/images/image_750x415_5e3e34f10dcbb.jpg', 'uploads/images/image_100x75_5e3e34f134f40.jpg', 'uploads/images/image_650x433_5e3e34f14563c.jpg', 1, '2020-02-04 15:33:59', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (8, 1, 'Công trình: Landmark - Long Biên', 'Công trình: Landmark - Long Biên', '<p>dfsfsf</p>\r\n', '', 1, 'uploads/images/image_750x_5e3e34994feda.jpg', 'uploads/images/image_750x415_5e3e34998dd21.jpg', 'uploads/images/image_100x75_5e3e3499c196c.jpg', 'uploads/images/image_650x433_5e3e3499dc58e.jpg', 1, '2020-02-04 15:34:04', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (9, 1, 'Công trình:  Spa Diệp Loan - Cổ Dương - ĐA', 'Công trình:  Spa Diệp Loan - Cổ Dương - ĐA', '', '', 1, 'uploads/images/image_750x_5e3e34553feb7.jpg', 'uploads/images/image_750x415_5e3e34557d512.jpg', 'uploads/images/image_100x75_5e3e3455ae0c2.jpg', 'uploads/images/image_650x433_5e3e3455c623c.jpg', 1, '2020-02-04 15:34:07', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (10, 1, 'Công trình: Trà tranh - Nguyên Khê', 'Công trình: Trà tranh - Nguyên Khê', '', '', 1, 'uploads/images/image_750x_5e3e30ccb07cb.jpg', 'uploads/images/image_750x415_5e3e30cce5c72.jpg', 'uploads/images/image_100x75_5e3e30cd1f1ae.jpg', 'uploads/images/image_650x433_5e3e30cd325c5.jpg', 1, '2020-02-04 15:34:10', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (11, 1, 'Công trình: Trà tranh - Tổ 4 TT Đông Anh', 'Công trình: Trà tranh - Tổ 4 TT Đông Anh', '<p>&nbsp;Tr&agrave; tranh - Tổ 4 TT Đ&ocirc;ng Anh</p>\r\n', 'Biển quảng cáo', 1, 'uploads/images/image_750x_5e3e3076ce6ba.jpg', 'uploads/images/image_750x415_5e3e30770ec5d.jpg', 'uploads/images/image_100x75_5e3e30773f13b.jpg', 'uploads/images/image_650x433_5e3e3077544c8.jpg', 1, '2020-02-04 15:34:15', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (12, 1, 'Công trình: Max istore - Đản Dị', 'Công trình: Max istore - Đản Dị', '', '', 1, 'uploads/images/image_750x_5e3e303333e50.jpg', 'uploads/images/image_750x415_5e3e303376c7a.jpg', 'uploads/images/image_100x75_5e3e3033b0ebb.jpg', 'uploads/images/image_650x433_5e3e3033ccfa1.jpg', 1, '2020-02-04 15:34:20', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (13, 1, 'Công trình: Day Spa - TT Đông Anh', 'Công trình: Day Spa - TT Đông Anh', '', '', 1, 'uploads/images/image_750x_5e3e2d7b84c0e.jpg', 'uploads/images/image_750x415_5e3e2d7bc082d.jpg', 'uploads/images/image_100x75_5e3e2d7c00827.jpg', 'uploads/images/image_650x433_5e3e2d7c1b4b0.jpg', 1, '2020-02-04 15:34:23', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (14, 1, 'Công trình: Spa Sao Ly - Cơ Sở 2', 'Công trình: Spa Sao Ly - Cơ Sở 2', '', '', 1, 'uploads/images/image_750x_5e3e2d3aab937.jpg', 'uploads/images/image_750x415_5e3e2d3aedc80.jpg', 'uploads/images/image_100x75_5e3e2d3b30cef.jpg', 'uploads/images/image_650x433_5e3e2d3b552cb.jpg', 1, '2020-02-04 15:34:26', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (15, 1, 'Công trình: Nhật Việt Mobile', 'Công trình: Nhật Việt Mobile', '', '', 1, 'uploads/images/image_750x_5e3e2ccc4f16d.jpg', 'uploads/images/image_750x415_5e3e2ccc8a884.jpg', 'uploads/images/image_100x75_5e3e2cccb9dbb.jpg', 'uploads/images/image_650x433_5e3e2cccd2060.jpg', 1, '2020-02-04 15:34:28', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (16, 1, 'Công trình: Ngọc Kim house - Tổ 26 TT Đông Anh', 'Công trình: Ngọc Kim house - Tổ 26 TT Đông Anh', '', '', 1, 'uploads/images/image_750x_5e3e2b20a204c.jpg', 'uploads/images/image_750x415_5e3e2b20de88a.jpg', 'uploads/images/image_100x75_5e3e2b211f5d4.jpg', 'uploads/images/image_650x433_5e3e2b213adfd.jpg', 1, '2020-02-04 15:34:31', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (17, 1, 'Công trình: SunKids - Núi Đôi - TT Sóc Sơn', 'Công trình: SunKids - Núi Đôi - TT Sóc Sơn', '', '', 1, 'uploads/images/image_750x_5e3e2ae0eff13.jpg', 'uploads/images/image_750x415_5e3e2ae12367c.jpg', 'uploads/images/image_100x75_5e3e2ae1437ba.jpg', 'uploads/images/image_650x433_5e3e2ae14e739.jpg', 1, '2020-02-04 15:34:34', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (18, 1, 'Công trình: FEC English', 'Công trình: FEC English', '', '', 1, 'uploads/images/image_750x_5e3e2a64d309b.jpg', 'uploads/images/image_750x415_5e3e2a6509257.jpg', 'uploads/images/image_100x75_5e3e2a652b528.jpg', 'uploads/images/image_650x433_5e3e2a6536609.jpg', 1, '2020-02-04 15:34:48', 'ALL', NULL, NULL);
INSERT INTO `projects` VALUES (24, 1, 'Công trình: Khiêu Vũ Thanh Quý - Phú Minh Sóc Sơn', 'Công trình: Khiêu Vũ Thanh Quý - Phú Minh Sóc Sơn', '', '', 1, 'uploads/images/image_750x_5e3e373325fb7.jpg', 'uploads/images/image_750x415_5e3e373356c17.jpg', 'uploads/images/image_100x75_5e3e37337df5b.jpg', 'uploads/images/image_650x433_5e3e37338b9c4.jpg', 1, '2020-02-11 17:19:33', 'ALL', 'Vũ Thanh Quý', '50000000');

-- ----------------------------
-- Table structure for reactions
-- ----------------------------
DROP TABLE IF EXISTS `reactions`;
CREATE TABLE `reactions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NULL DEFAULT NULL,
  `re_like` int(11) NULL DEFAULT 0,
  `re_dislike` int(11) NULL DEFAULT 0,
  `re_love` int(11) NULL DEFAULT 0,
  `re_funny` int(11) NULL DEFAULT 0,
  `re_angry` int(11) NULL DEFAULT 0,
  `re_sad` int(11) NULL DEFAULT 0,
  `re_wow` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reactions
-- ----------------------------
INSERT INTO `reactions` VALUES (1, 1, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `reactions` VALUES (2, 5, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `reactions` VALUES (3, 8, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `reactions` VALUES (4, 4, 0, 0, 0, 0, 0, 0, 0);

-- ----------------------------
-- Table structure for reading_lists
-- ----------------------------
DROP TABLE IF EXISTS `reading_lists`;
CREATE TABLE `reading_lists`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `keywords` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT 0,
  `service_order` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `status` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` int(11) NULL DEFAULT 1,
  `application_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Infinite',
  `site_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `home_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `site_description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `keywords` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `facebook_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `twitter_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `google_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `instagram_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pinterest_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `linkedin_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `vk_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `optional_url_button_name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Click Here to Visit',
  `about_footer` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contact_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `contact_address` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contact_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contact_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `copyright` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Copyright © 2018 Infinite - All Rights Reserved.',
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 1, 'Tân Thái Dương', 'In ấn biển quảng cáo', 'Tân Thái Dương', 'Tổng hợp các tin tức liên quan đến tư vấn, thi công và thiết kế biển quảng cáo. Cùng thông tin địa chỉ làm biển quảng cáo uy tín, chất lượng tại Hà Nội', 'Quảng cáo Tân Thái Dương, printing, advertising, in biển quảng cáo', 'https://www.facebook.com/InAnQuangCao', 'https://twitter.com/', '', '', '', '', '', 'Click Here To See More', '', '<p>Ch&uacute;ng t&ocirc;i ở đ&acirc;y v&igrave; doanh nghiệp của bạn, nếu c&ograve;n thắc mắc về sản phẩm dịch vụ của ch&uacute;ng t&ocirc;i h&atilde;y li&ecirc;n hệ để được tư vấn ho&agrave;n to&agrave;n miễn ph&iacute;</p>\r\n', 'Hà Nội - Việt Nam', 'inquangcaottd@gmail.com', '0948998383', 'Copyright © 2018 Infinite - All Rights Reserved.', '2018-07-12 04:15:40');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NULL DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tag_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES (5, 4, 'sxds', 'sxds', '2020-02-09 15:25:44');
INSERT INTO `tags` VALUES (6, 4, 'ưdsdsd', 'udsdsd', '2020-02-09 15:25:44');

-- ----------------------------
-- Table structure for typography
-- ----------------------------
DROP TABLE IF EXISTS `typography`;
CREATE TABLE `typography`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'name@domain.com',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'user',
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 1,
  `about_me` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `facebook_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `twitter_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `google_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `instagram_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pinterest_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `linkedin_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `vk_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `youtube_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'administrator', 'hoa9x3@gmail.com', '$2a$08$AyCgAT9hkst6ynbSJlkQd.y.H9.9XDXWDLIWje6vC.m7oEX0kArBy', 'admin', NULL, 1, '', '', '', '', '', '', '', '', '', '2020-01-31 13:50:15');

SET FOREIGN_KEY_CHECKS = 1;

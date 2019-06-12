-- Update Matrimonial Database from v1.4 to v1.5 --

INSERT INTO `frontend_settings` (`frontend_settings_id`, `type`, `value`) VALUES (NULL, 'google_analytics_set', 'no');
INSERT INTO `frontend_settings` (`frontend_settings_id`, `type`, `value`) VALUES (NULL, 'sticky_header', 'no');


INSERT INTO `third_party_settings` (`third_party_settings_id`, `type`, `value`) VALUES (NULL, 'google_analytics_key', '');


CREATE TABLE `deleted_member` (
  `member_id` int(11) NOT NULL,
  `member_profile_id` varchar(25) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `is_closed` varchar(20) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `height` decimal(10,2) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` text NOT NULL,
  `introduction` longtext NOT NULL,
  `basic_info` longtext NOT NULL,
  `present_address` longtext NOT NULL,
  `education_and_career` longtext NOT NULL,
  `physical_attributes` longtext NOT NULL,
  `language` longtext NOT NULL,
  `hobbies_and_interest` longtext NOT NULL,
  `personal_attitude_and_behavior` longtext NOT NULL,
  `residency_information` longtext NOT NULL,
  `spiritual_and_social_background` longtext NOT NULL,
  `life_style` longtext NOT NULL,
  `astronomic_information` longtext NOT NULL,
  `permanent_address` longtext NOT NULL,
  `family_info` longtext NOT NULL,
  `additional_personal_details` longtext NOT NULL,
  `partner_expectation` longtext NOT NULL,
  `interest` longtext NOT NULL,
  `short_list` longtext NOT NULL,
  `followed` longtext NOT NULL,
  `ignored` longtext NOT NULL,
  `ignored_by` longtext NOT NULL,
  `gallery` longtext NOT NULL,
  `happy_story` longtext NOT NULL,
  `package_info` longtext NOT NULL,
  `payments_info` longtext NOT NULL,
  `interested_by` longtext NOT NULL,
  `follower` int(11) NOT NULL,
  `membership` int(11) NOT NULL,
  `notifications` longtext NOT NULL,
  `profile_status` int(11) NOT NULL,
  `member_since` datetime NOT NULL,
  `express_interest` int(11) NOT NULL,
  `direct_messages` int(11) NOT NULL,
  `photo_gallery` int(11) NOT NULL,
  `profile_completion` int(11) NOT NULL,
  `is_blocked` varchar(20) NOT NULL,
  `privacy_status` longtext NOT NULL,
  `pic_privacy` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `deleted_member`
  ADD PRIMARY KEY (`member_id`);


ALTER TABLE `member` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `city` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `contact_message` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `email_template` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `happy_story` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `state` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `contact_message` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `contact_message` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `contact_message` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `contact_message` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE `contact_message` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
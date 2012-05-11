CREATE TABLE sp_user_meta
(
	id BIGINT UNSIGNED NOT NULL,
	user_id BIGINT UNSIGNED NOT NULL,
	meta_key VARCHAR(255) NOT NULL,
	meta_value TEXT NOT NULL,
	PRIMARY KEY (id),
	KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;


CREATE TABLE sp_contact
(
	id BIGINT UNSIGNED NOT NULL,
	user_id VARCHAR(64) NOT NULL,
	contact_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	contact_content TEXT NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;


CREATE TABLE sp_link
(
	id BIGINT UNSIGNED NOT NULL,
	team_id SMALLINT UNSIGNED NOT NULL,
	link_url VARCHAR(255) NOT NULL,
	link_name VARCHAR(255) NOT NULL,
	link_image VARCHAR(255) NOT NULL,
	link_description VARCHAR(255),
	link_visible VARCHAR(20) NOT NULL DEFAULT 'yes',
	link_rating SMALLINT NOT NULL DEFAULT 1,
	link_pr SMALLINT,
	link_rss VARCHAR(255),
	link_note TEXT,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;


CREATE TABLE sp_option
(
	id BIGINT UNSIGNED NOT NULL,
	team_id SMALLINT UNSIGNED NOT NULL DEFAULT 1,
	blog_id BIGINT,
	option_name VARCHAR(64) NOT NULL,
	option_value TEXT NOT NULL,
	option_variable VARCHAR(50),
	auto_load VARCHAR(20) NOT NULL DEFAULT 'yes',
	PRIMARY KEY (id, option_name),
	KEY (team_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;


CREATE TABLE sp_comment
(
	id BIGINT UNSIGNED NOT NULL,
	user_id BIGINT UNSIGNED NOT NULL,
	comment_post_id BIGINT UNSIGNED NOT NULL,
	comment_author VARCHAR(50) NOT NULL,
	comment_author_email VARCHAR(100) NOT NULL,
	comment_author_url VARCHAR(200),
	comment_author_IP VARCHAR(100),
	comment_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	comment_content TEXT NOT NULL,
	comment_agent VARCHAR(255) NOT NULL,
	PRIMARY KEY (id),
	KEY (comment_post_id),
	KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;


CREATE TABLE sp_team
(
	id SMALLINT UNSIGNED NOT NULL,
	name VARCHAR(100) NOT NULL,
	alias VARCHAR(200),
	type VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;


CREATE TABLE sp_post
(
	id BIGINT UNSIGNED NOT NULL,
	team_id SMALLINT UNSIGNED NOT NULL DEFAULT 1,
	post_date DATETIME NOT NULL,
	post_title TEXT NOT NULL,
	post_excerpt TEXT NOT NULL,
	post_content TEXT NOT NULL,
	post_status VARCHAR(20) NOT NULL DEFAULT 'publish',
	post_author_id BIGINT UNSIGNED NOT NULL DEFAULT 1,
	post_url VARCHAR(200),
	comment_status VARCHAR(20) NOT NULL DEFAULT 'open',
	comment_counts SMALLINT NOT NULL DEFAULT 0,
	PRIMARY KEY (id),
	KEY (team_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;


CREATE TABLE sp_user
(
	id BIGINT UNSIGNED NOT NULL,
	user_login VARCHAR(60) NOT NULL,
	user_pass VARCHAR(64) NOT NULL,
	user_nickname VARCHAR(50),
	user_email VARCHAR(100),
	user_url VARCHAR(100),
	user_registered DATETIME DEFAULT '0000-00-00 00:00:00',
	activation_key VARCHAR(60),
	active_status BOOL NOT NULL DEFAULT true,
	display_name VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;


-- 插入管理员用户
INSERT INTO `spblog`.`sp_user` (`id`, `user_login`, `user_pass`, `user_nickname`, `user_email`, `user_url`, `user_registered`, `activation_key`, `active_status`, `display_name`) VALUES ('1', 'admin', '656107093210321bf1c14ee1a5c003ac', '呢称：动网', NULL, NULL, '0000-00-00 00:00:00', NULL, '1', '管理员');
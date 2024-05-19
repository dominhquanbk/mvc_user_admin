CREATE DATABASE IF NOT EXISTS training_php;

CREATE TABLE IF NOT EXISTS users (
  id int(10) NOT NULL auto_increment,
  last_name varchar(255) collate utf8_unicode_ci NOT NULL,
  first_name varchar(255) collate utf8_unicode_ci NOT NULL,
  address varchar(255) collate utf8_unicode_ci,
  city varchar(255) collate utf8_unicode_ci,
  image varchar(255) collate utf8_unicode_ci NOT NULL,
  is_admin boolean, -- FALSE is users, TRUE is admin 
  PRIMARY KEY  (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
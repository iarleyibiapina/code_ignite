create database ci4tutorial;

use ci4tutorial;

create table news(
	id int unsigned not null auto_increment,
	title VARCHAR(128) not null,
	slug varchar(128) not null,
	body text not null,
	primary key (id),
	unique slug (slug)
);

INSERT INTO news VALUES
(1,'Elvis sighted','elvis-sighted','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2,'Say it isn\'t so!','say-it-isnt-so','Scientists conclude that some programmers have a sense of humor.'),
(3,'Caffeination, Yes!','caffeination-yes','World\'s largest coffee shop open onsite nested coffee shop for staff only.');

select * from news;
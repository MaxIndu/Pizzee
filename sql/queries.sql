DROP TABLE IF EXISTS USERS ;

CREATE TABLE USERS(
username VARCHAR(25) PRIMARY KEY ,
password varchar(30) NOT NULL,
usertype ENUM('admin','system_user') default 'system_user' NOT NULL
);

DESCRIBE USERS;

INSERT INTO USERS(username,password,usertype) VALUES
('Darshana','123456','admin'),
('Sahan','12345','system_user');

SELECT * FROM USERS;
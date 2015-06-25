DROP TABLE IF EXISTS PIZZA_TYPE;

CREATE TABLE PIZZA_TYPE(
	PizzaID INT(3) PRIMARY KEY,
	Pizza_Name VARCHAR(40) NOT NULL,
	Pizza_Discription TEXT(500),
	Availability BOOLEAN NOT NULL
) ENGINE = innodb;

describe Pizza_type;


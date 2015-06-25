DROP TABLE IF EXISTS PIZZA_TYPE;

CREATE TABLE PIZZA_TYPE(
	PizzaID VARCHAR(10) PRIMARY KEY,
	Pizza_Name VARCHAR(40) NOT NULL,
	Pizza_Price int(4) NOT NULL,
	Availability BOOLEAN NOT NULL,
	P_img_URL VARCHAR(100),
	Pizza_Description TEXT(500)
	
) ENGINE = innodb;

describe Pizza_type;

insert into Pizza_Type (PizzaID,Pizza_Name,Pizza_Price,Availability,Pizza_Description) values
('Fq8EHcpdjS','Devilled Chicken',810,true,'Devilled chicken in spicy sauce with a double layer of mozzarella cheese'),
('FD00YVOcM2','Hot & Spicy Chicken',870,true,'Spicy chunks of Chicken, capsicums & onions with a double layer of mozzarella cheese'),
('EIyDC4fLPN','Sausage Delight',810,true,'Chicken sausages & onions with a double layer of mozzarella cheese'),
('q91ri017t6','Tandoori Chicken',870,false,'Tandoori chicken & onions with a double layer of mozzarella cheese'),
('V7uu65tS68','Devilled Fish',870,true,'Devilled fish, onions, capsicums & green chilies with a double layer of Mozzarella Cheese'),
('Py63s3V1m6','Spicy Seafood',1020,true,'Prawns, Devilled Fish, olives, Bell peppers & onions with a double layer of Mozzarella Cheese'),
('to6YD61zlk','Chillie Chicken',910,true,'Chicken in spicy sauce with chillie and a double layer of mozzarella cheese'),
('m85DjE8Euk','BBQ Chicken',910,true,'BBQ Chicken with pineapple, onions, & peppers with a double layer of mozzarella cheese'),
('C470319kEv','Hot Garlic Prawns',1020,false,'Spicy prawns, hot garlic sauce, onions, peppers and tomato with a layer of mozzarella cheese'),
('ttNT6DyeMr','Cheese Lovers',870,true,'Rich tomato sauce with a Triple layer of mozzarella cheese'),
('3hN5Xfiau6','Chicken Hawaiian',910,false,'Chicken ham & pineapple with a double layer of mozzarella cheese'),
('z3y300TA9A','Meat Lovers',910,true,'Choice of 4 meats (Chicken Ham, Chicken bacon, Chicken sausage, Beef Pepperoni, BBQ chicken, Spicy Chicken, Tandoori Chicken) with a double layer of mozzarella cheese'),
('H4733qwpnq','Veggie Supreme',870,true,'Mushrooms, tomatoes, onions, black olives and bell peppers with a double layer of mozzarella cheese'),
('rSnXY6l80a','Cheesy Onion',810,true,'Crispy onions with a double layer of mozzarella cheese'),
('i73x7T0OzA','Beef Pepperoni',910,true,'Australian beef pepperoni in pizza sauce with a double layer of mozzarella cheese'),
('63aw0lJ1bQ','Ultimate Cheese Treat',1020,true,'An exquisitely rich pan pizza topped with Cheddar, Gouda, Edam, Parmesan, Mozzarella cheese and fiery jalapenos to celebrate 20 years of heartwarming moments'),
('oluVk5gNfT','Spicy Veggie With Paneer',810,false,'Capsicums, leeks, carrots, cabbage, pineapple and paneer with a double layer of mozzarella cheese'),
('p45wKbUhNK','Super Supreme',1020,true,'Chicken ham, Chicken bacon, chicken sausage, beef pepperoni, pineapple, peppers, mushrooms and olives with a double layer of mozzarella cheese');
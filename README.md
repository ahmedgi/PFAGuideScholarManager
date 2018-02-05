la conception de la base de données , 

Table product :
•	id  (int(10) unsigned Incrément automatique)
•	name(varchar(128))
•	qauntite(int(10))
•	price (decimal(20,6))
Table carts
•	id	int(10) unsigned Incrément automatique	
•	product_id( int(10))
•	session_id( varchar(128))
Table orders
•	id (int(10) unsigned Incrément automatique)
•	reference(varchar(9) NULL)
•	cart_id	(int(10) unsigned)	

* Arborescence du projet.
    script
        script.js
    style
        style.css
    classes
        Cart.php
        Product.php
        Order.php
        DB.php
    images
        logo.jpg
    config   : la configuration de la base de données
        config.php
    index.php
    back.php
    README.md


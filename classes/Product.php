<?php

    class Product
    {
        private $name,
            $id,
            $price,
            $quantite,
            $ean13;

        public function __construct($name)
        {
            $this->name = $name;
        }

        //récupérer la liste des produits a partir de la base de données
        public static function getProducts()
        {
            return DB::getInstance()->query("SELECT * FROM product")->getResult();
        }

        //chercher un produit dans la base de donner
        public static function getProduct($field, $value)
        {
            return DB::getInstance()->query("SELECT * FROM product WHERE {$field} =?", array($value))->getResult();

        }
        //get the least expensive product
        public static function getLeastExpensiveProduct(){
            return DB::getInstance()->query("SELECT * FROM product ORDER BY price ASC ")->getResult()[0];
        }

        //tester la validation de code ean13
        public function isValide()
        {
            return true;
        }

        //enregistrer le produit dans la base de donner
        public function Save()
        {
            DB::getInstance()->query("INSERT INTO product (name,price,quantite) VALUES (?,?,?)"
                , array($this->name, $this->price, $this->quantite));
        }

        //getters
        public function getName()
        {
            return $this->name;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function getQuantite()
        {
            return $this->quantite;
        }

        public function getEan()
        {
            return $this->ean13;
        }

        public function getId()
        {
            return $this->id;
        }

        //setters
        public function setName($name)
        {
            $this->name = $name;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function setQuantite($quantite)
        {
            $this->quantite = $quantite;
        }

        public function setEan($ean13)
        {
            $this->ean13 = $ean13;
        }

    }
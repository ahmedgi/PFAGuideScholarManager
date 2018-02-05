  <?php
      
    class Order{
    private $cart_id,
            $reference,
            $id;
    //récupérer la liste des orders a partir de la base de données
    public static function getOrders(){
        return DB::getInstance()->query("SELECT * FROM orders")->getResult();
    }
    //chercher un order dans la base de donner
    public static function getOrder($id){
        return DB::getInstance()->query("SELECT * FROM orders WHERE id =?",array($id))->getResult();

    }
    //getters
    public function getId(){
        return $this->id;
    }
    public function getCart(){
        return Cart::getCart("id",$this->cart_id);
    }
    public function getReference(){
        return $this->reference;
    }
    //setters
    public function setReference($reference){
        $this->reference=$reference;
    }
    public function setCartId($id){
        $this->cart_id=$id;
    }
    // pour enregister l'order dans la base de donner
    public function Save(){
        DB::getInstance()->query("INSERT INTO orders (id,reference,cart_id) VALUES (?,?,?)"
            ,array($this->id,$this->reference,$this->cart_id));
    }


}

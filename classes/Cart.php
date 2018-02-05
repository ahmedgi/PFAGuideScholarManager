 <?php
class Cart{
    private $product_id,
            $session_id,
            $id;
    //récupérer la liste des carts a partir de la base de données
    public static function getCarts(){
        return DB::getInstance()->query("SELECT * FROM carts")->getResult();
    }
    //chercher une cart dans la base de donner
    public static function getCart($field,$value){
        return DB::getInstance()->query("SELECT * FROM carts WHERE {$field}=?",array($value))->getResult();

    }
    //enregistrer la cart dans la base
    public function Save(){
        DB::getInstance()->query("INSERT INTO carts(id,product_id,session_id) VALUES (?,?,?)"
            ,array($this->id,$this->product_id,$this->session_id));
    }
    //getters
    public function getProduct(){
        Product::getProduct("id",$this->product_id);
    }
    public function getId(){
        return $this->id;
    }
    public function getSessionId(){
             return $this->session_id;
    }
    //setters
    public function setProductId($id){
        $this->product_id=$id;
    }
    public function setSessionId($id){
        $this->session_id=$id;
    }



}

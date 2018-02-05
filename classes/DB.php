<?php
class DB{
    private static $_instance=null;
    private $_pdo,
        $_query,
        $_result;
    public function __construct()
    {
        try{
            //etablir la connexion a la base de donner
            $this->_pdo=new PDO("mysql:host={$GLOBALS['config']['host']};dbname={$GLOBALS['config']['dbname']}"
                ,$GLOBALS['config']["username"],$GLOBALS['config']["password"]);
            // print("connected");
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public static function getInstance(){
        //instancier la class db if it is not
        if(!isset(self::$_instance)){
            self::$_instance=new DB();
        }
        return self::$_instance;
    }
    //pour facilité l'interaction avec la base de données
    public function query($sql,$params=array()){
        if($this->_query=$this->_pdo->prepare($sql)){
            $x=1;
            if(count($params)){
                foreach ($params as $param) {
                    $this->_query->bindValue($x,$param);
                    $x++;
                }
            }
            if($this->_query->execute()){
                $this->_result=$this->_query->fetchAll(PDO::FETCH_OBJ);
            }else{
                print_r($this->_query->errorInfo());
            }
        }
        return $this;
    }
    public function getResult(){
        return $this->_result;
    }
}

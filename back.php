<?php

require_once("config/config.php");
// démarrer la session
session_start();

if(isset($_POST)){
    // créer une nouvelle cart dans la base de données
    if(!empty($_POST['id'])){
        //echo session_id();
        $cart=new Cart();
        $cart->setProductId($_POST['id']);
        $cart->setSessionId(session_id());
        $cart->Save();

    }
    //créer un order dans la base de données
    if(!empty($_POST["order"])){
        //echo "new order";
        $carts=Cart::getCart("session_id",session_id());
        foreach ($carts as $cart){
            $order=new Order();
            $order->setCartId($cart->id);
            $order->setReference("reference");
            $order->Save();
        }
    }
}

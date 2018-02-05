<html>
<?php
require_once ("back.php");
?>
<head>
    <meta charset="UTF-8">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script src="script/script.js"></script>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-faded">
            <a class="navbar-brand" href="#">
                <img src="images/logo.jpg" width="100" height="100" alt="">
            </a>
            <table style="position: absolute; right: 0;background-color:#d6d6d6">
                <form>
                    <tr><td><b>Connexion</b></td></tr>
                    <tr><td>Identifiant</td><td><input type="text" name="identifiant"></td></tr>
                    <tr><td>password</td><td><input type="password" name="password"></td>
                        <td><input type="submit" value="OK"></td>
                    </tr>
                </form>
            </table>
        </nav>
        <hr class="separateur"style=" color:#cbcbcb; background-color:#d6d6d6; height:20px;" />
        <div class="row body">
            <div class="col-sm-2">
                <div class="row">
                    <aside class="col-md-12 " >
                        <div class="col-m">
                            <b>Promotions</b>
                            <a href="#"   class="offer-img">
                                <img src="images/logo.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="mid-1">
                                <?php
                                $LeastExpensiveProduct=Product::getLeastExpensiveProduct();
                                ?>
                                <div class="mid-2">
                                    <p><?php echo $LeastExpensiveProduct->name;?></p>
                                    <p><label>Prix :$ <?php echo $LeastExpensiveProduct->price;?></label></p>
                                </div>
                                <div class="add">
                                    <input class="btn btn-danger my-cart-btn my-cart-b" type="submit" value="Add to Cart"
                                           product-id="<?php echo $LeastExpensiveProduct->id;?>" product-name="<?php echo $LeastExpensiveProduct->name;?>"
                                           product-price="<?php echo $LeastExpensiveProduct->price;?>">
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="col-md-12 ">
                        <div class="col-m">
                            <p>Fabrications/marques</p>
                            <a href="#"  class="offer-img">
                                <div><p><span>marque 1</span></p></div>
                            </a>
                            <div class="mid-1">
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b"  >Tout Voir</button>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <section class="col-sm-9 col-md-7 ">
                <div class="row">
                    <?php foreach (Product::getProducts() as $product){ ?>

                        <div class="col-sm-4">
                            <div class="col-m">
                                <a href="#"  class="offer-img">
                                    <img src="images/logo.jpg" class="img-responsive" alt="">
                                </a>
                                <div class="mid-1">
                                    <div class="mid-2">
                                        <p><?php echo $product->name;?> </p>
                                        <p><label>Prix : $<?php echo $product->price;?></label></p>
                                        <div class="clearfix"></div>
                                    </div>
                                        <div class="add ">
                                            <input class="btn btn-danger my-cart-btn my-cart-b" type="submit" value="Add to Cart"
                                            product-id="<?php echo $product->id;?>" product-name="<?php echo $product->name;?>"
                                                   product-price="<?php echo $product->price;?>">
                                        </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>

            </section>
            <div class="col-md-2" >
                <div class="row">
                    <aside class="col-md-12 ">
                        <div class="col-m">
                            <b>Panier</b>
                            <div class="mid-1" >
                                <div class="showresults">
                                </div>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn order" type="submit">Commander</button>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="col-md-12 ">
                        <div class="col-m">
                            <p>NEWSLETTERS</p>
                            <p>Inscirez vous a notre newsletters et recvez les dernieres promotions</p>
                            <p><input type="text" name="nom" value="Votre Nom" style="width: 100%;"></p>
                            <p><input type="text" name="nom" value="Votre Email" style="width: 100%;"></p>
                            <div class="mid-1">
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b">S'inscrire</button>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
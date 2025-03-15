<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Espace login </title>



    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
   <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php
    include("laNav.php");
    ?>
    
    <section class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-12 col-md-6">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                Java developpeur
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/img2.jpg" alt="...">
                            <div class="carousel-caption">
                                Createur site web
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                Developpeur Python
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/img4.jpg" alt="...">
                            <div class="carousel-caption">
                                Java administrateur
                            </div>
                        </div>
                        ...
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <form action="">
                    <div id="avatar">
                        <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="dv">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="email" id="idemail" placeholder="exemple@gmail.com">
                    </div>
                    <div class="dv">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="mdp" id="idmdp">
                        <span id="idspan">
                            <i class="fa fa-eye" aria-hidden="true"id="ideye"></i>
                            <i class="fa fa-eye-slash" aria-hidden="true"id="eyeslash"></i>
                        </span>


                    </div>
                    <div style="text-align: center;">
                        <input type="checkbox" name="check" id="idcheck" value="retenir le mot de passe ">
                        <label for="idcheck">Retenir le mot de passe </label>
                    </div>
                    <button type="submit" name="seco" id="idseco">Se connecter</button>
                </form>

            </div>
        </div>

    </section>
    <?php
    include("lefooter.php");
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/validationlogin.js"></script>
</body>

</html>
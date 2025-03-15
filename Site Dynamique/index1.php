<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <!-- pour afficher les caractere speciaux comme é  -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- c'est pour garantir la comptabilite avec internet exploreur  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- avoir la mise en page (balise structurantes) -->
  <meta name="descreption " content="site promotionelle de l'ecole Amis de JAVA ">
  <!-- DESCREPTION +POUR AJOUTER UNE PETITE DESCREPTION AU SITE LORS DE LA RECHERCHES  -->
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Amis de JAVA </title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- L'entete de la page  -->
  <!-- container=laisser la marge dans les deux cote  -->
  <!-- le container fluide= s'etends sur toute la page  -->
  <header class="container-fluide">
    <div class="row">

      <?php
      include("laNav.php");
      ?>
    </div>
    <div class="row">
      <img src="images/amis.jpg" alt="" class="image1">

    </div>

  </header>
  <!-- bonjour va prendre toute la largeur du smart phone  -->
  <!-- 12 col sur tel / 6 col tab /8 col pc -->
  <!-- <section class="container">
    <div class="row">
      <div class="col-12 col-sm-4 col-md_6" style="background-color: rgb(192, 101, 116);">
        <p>bonjour</p>
      </div>
      <div class="col-12 col-sm-8 col-md_6" style="background-color: peru;">
        <p>Louisa</p>
      </div>
    </div>
  </section> -->
  <main>
    <!-- la section nos formations  -->
    <!-- container=marge G/D qd en travail en boot  -->
    <section class="container">
      <!-- nos formtauion 3 ligenes chaque ligne 2 element -->
      <div class="" row>
        <div class="col-12 col-md-12">
          <h2>Nos formation </h2>
        </div>
        <!-- col12=col-12 col-md-12 -->

      </div>
      <div class="" row>
        <div class="col-12 col-md-6">

          <div class="media">
            <img src="images/javamin.png" class="mr-3" alt="image mignature java ">
            <div class="media-body">
              <h5 class="mt-0">Java devellopeur </h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
              odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
              fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">

          <div class="media">
            <img src="images/adminmin.png" class="mr-3" alt="image mignature admin">
            <div class="media-body">
              <h5 class="mt-0">Jave adiministrateur </h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
              odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
              fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>

      </div>
      <div class="" row>
        <div class="col_12 col-md-6">
          <div class="media">
            <img src="images/androidmin.png" class="mr-3" alt="image mignature android">
            <div class="media-body">
              <h5 class="mt-0">Developpeur android </h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
              odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
              fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>
        <div class="col_12 col-md-6">
          <div class="media">
            <img src="images/anglaismin.png" class="mr-3" alt="image mignature angais ">
            <div class="media-body">
              <h5 class="mt-0">Anglais </h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
              odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
              fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>


      </div>

    </section>
    <hr>
    <!-- la secion nos formation innovantes  -->
    <section class="container">
      <div class="row">
        <div class="col-12"></div>
        <h1>Nos formation innovantes</h1>
      </div>
      <div class="row">
        <div class="col-12 col-md-4">
          <video controls poster="sintel.jpg">
            <source src="videos/vidgame.mp4">
          </video>
        </div>
        <div class="col-12 col-md-8">
          <h2>Creez vos propres jeux video</h2>
          <P class="media-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, eligendi quae? Odio
            quos
            minus, aut
            doloribus impedit consequatur blanditiis vero ipsum nulla dolores nobis, accusamus corporis illum? Animi,
            beatae eos Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, non numquam. Aliquam eaque nisi
            quia
            beatae quaerat iste id illum? Repellat atque voluptas assumenda modi non maiores? Quaerat, possimus neque?
          </P>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-8">
          <h2>Portes ouvertes </h2>
          <p class="media-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, dicta! Adipisci, animi
            inventore libero soluta
            fuga iusto, quae repellendus maxime quisquam aliquam consectetur dicta eligendi aut fugiat doloremque
            nesciunt assumenda Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates fuga mollitia non
            rerum aspernatur quas ullam aliquid sint perferendis quo. Voluptate minus blanditiis mollitia accusamus
            ipsum tempore pariatur illo ullam?</p>
        </div>
        <div class="col-12 col-md-4">
          <video controls poster="sintel.jpg " width=300>
            <source src="videos/promo.mp4">
          </video>
        </div>





      </div>
    </section>
    <hr>
    <section class="container">
      <div class="row">
        <div class="col-12">
          <h1>A propos</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-3">
          <img src="images/logo.png" alt="logo">


        </div>
        <div class="col-12 col-md-4">
          <h2>Amis de java </h2>
          <p class="media-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga autem reiciendis, ad
            officia fugiat veritatis enim maxime sunt vero. Suscipit iure doloribus natus distinctio neque nisi nemo
            animi saepe optio Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, veritatis eligendi? Quasi
            aperiam eum eveniet, debitis, aspernatur ducimus doloribus libero nostrum sed corrupti placeat odit, eaque
            nam velit totam ipsam?</p>


        </div>
        <div class="col-12 col-md-5">
          <img src="images/local.png" alt="localisation" class="image1">

        </div>

      </div>

    </section>
  </main>

 
  <div id="monModal" class="modal fade" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Espace inscreption </h4>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td><input type="text" placeholder="Nom?" name="nom" id="idnom"></td>
              <td><span id="valnom"></span></td>
            </tr>
            <tr>
              <td><input type="text" placeholder="Prénom?" name="prénom" id="idprenom"></td>
              <td><span id="valprenom"></span></td>
            </tr>
            <tr>
              <td><input type="date" placeholder="Date de naissance?" name="ddn" id="idddn"></td>
              <td><input type="text" placeholder="Lieu de naissance?" name="ldn" id="idldn"></td>
            </tr>
            <tr>
              <td><label for="idniveau">Niveau :</label></td>
              <td><select name="niveau" id="idniveau">
                <option value="L1">L1</option>
                <option value="L2">L2</option>
                <option value="L3">L3</option>
                <option value="M1">M1</option>
                <option value="M2">M2</option>
              </select></td>
            </tr>
            <tr>
              <td><input type="email" name="email" id="idemail" placeholder="Email exemple@xxx.com :"></td>
              <td><span id="valemail"></span></td>
            </tr>
            <tr>
              <td><input type="password" name="mdp" id="idmdp" placeholder="Mot de passe ?"></td>
              <td><span id="valmdp"></span></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button class="insc" type="reset" name="annuler" id="idannuler" data-dismiss="modal">Annuler</button>
          <button class="seco" type="submit"name="valider" id="idvalider"> Valider</button>
        </div>
      </div>
    </div>
  </div>
  <?php
  include("lefooter.php");
  ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/validerinscription.js"></script>
  <!-- permet d'afficher le menu sandwich  -->
</body>

</html>
<?PHP
//include "../core/fournisseurc.php";
include "../core/ingredientc.php";

$fournisseurc1=new fournisseurc();
$listefournisseur=$fournisseurc1->afficherfournisseur();

$ingredientc1=new ingredientc();
$listeingredient=$ingredientc1-> afficher_ingredient2();
//var_dump($listecartes->fetchAll());
?>



<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Gestionnaire Omek Houria</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet">
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet">
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet">
  
</head>

<body class="bg-theme bg-theme1  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 <?php
require 'navbarviews.php';
?>

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Bienvenue <?php echo htmlspecialchars($name) ?></h6>
            <p class="user-subtitle"><?php echo htmlspecialchars($name) ?>@OmekHouria.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="https://mail.google.com/mail/u/2/#inbox" class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox de restaurant</a>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            
          </div>
        </div>
        
      </div><!--End Row-->


      <div class="row">
        <div class="col-lg-15">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Les fournisseurs</h5>
              <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(13px, 20px, 0px);">
              <a class="dropdown-item" href="form_ajouter_fournisseur.php">Ajouter un fournisseur</a>
              <a class="dropdown-item" href="email.php">Envoyer un Mail</a>
              <a class="dropdown-item" href="chercher_fournisseur.php">Chercher un fournisseur</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Identifiant de fournisseur</th>
                      <th scope="col">Nom de fournisseur</th>
                      <th scope="col">Prenom de fournisseur</th>
                      <th scope="col">Numeros de telephone de fournisseur</th>
                      <th scope="col">E-mail de fournisseur</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                  <?PHP
                    foreach($listefournisseur as $row){
                      ?>
                    <tr>
              
                      <td><?PHP echo $row['id_fourn']; ?></td>
                      <td><?PHP echo $row['nom_fourn']; ?></td>
                      <td><?PHP echo $row['prenom_fourn']; ?></td>
                      <td><?PHP echo $row['phone_number']; ?></td>
                      <td><?PHP echo $row['email_fourn']; ?></td>
                      <td><form method="POST" action="supprimerfournisseur.php">
                      <button type="submit" name="supprimer"  class="btn btn-light btn-round px-5" onclick="return confirm('Avertissement: Voulez-Vous vraiment supprimer ce fournisseur ?');"> Supprimer </button>
                      <input type="hidden" value="<?PHP echo $row['id_fourn']; ?>" name="id_fourn">
                      </form>
                    </td>
                    <td><a href="Modifier.php?id=<?PHP echo $row['id_fourn']; ?>">
                    Modifier</a></td>
                    </tr>
                    <?PHP
                    }
                    ?>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-15">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Stock</h5>
              <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-197px, -195px, 0px);">
              <a class="dropdown-item" href="form_ajouter_ingredient.php">Ajouter un ingredient</a>
              <a class="dropdown-item" href="chercher_ingredient.php">Chercher un ingredient</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Code de l'ingredient</th>
                      <th scope="col">Nom de l'ingredient</th>
                      <th scope="col">Quantité de l'ingrédient</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                  <?PHP
                    foreach($listeingredient as $row2){
                      ?>
                    <tr>
              
                      <td><?PHP echo $row2['code_ing']; ?></td>
                      <td><?PHP echo $row2['libelle_ing']; ?></td>
                      <td><?PHP echo $row2['qte_ing']; ?></td>
                      
                      <td><form method="POST" action="supprimer_ingredient.php">
                      <button type="submit" name="supprimer"  class="btn btn-light btn-round px-5" onclick="return confirm('Avertissement: Voulez-Vous vraiment supprimer cette ingredient ?');"> Supprimer </button>
                      <input type="hidden" value="<?PHP echo $row2['code_ing']; ?>" name="code_ing">
                      </form>
                    </td>
                    <td><a href="form_modifier_ingredient.php?id=<?PHP echo $row2['code_ing']; ?>">
                    Modifier</a></td>
                    </tr>
                    <?PHP
                    }
                    ?>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            
          </div>
        </div>
      </div>
      <!--End Row-->

      <!--End Row-->
	  
	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	


</body></html>
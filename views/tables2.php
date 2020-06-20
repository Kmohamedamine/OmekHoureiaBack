

<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashtreme Admin </title>
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

<body class="bg-theme bg-theme1  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%"> 

  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
<?php
require "navbarviews.php";
?>
   <!--End sidebar-wrapper-->

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
            <h6 class="mt-2 user-title">Maha Segni </h6>
            <p class="user-subtitle">maha.segni@omekhouria.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"> <a href="customerlogin.php" target="_blank"><i class="icon-power mr-2"></i> Logout</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<div style="text-align:center;padding:8em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/fr/country/tn"><span style="color:black;">Heure actuelle</span><br />Tunisie</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&size=small&timezone=Africa%2FTunis" width="100%" height="90" frameborder="0" seamless></iframe> </div>
<!--End topbar header-->
    
    

          <?PHP
include "../core/employeC.php";

?>

	
  <div class="content-wrapper">
    <div class="container-fluid">
     
     

 <div class="row">
       
        </div>
     <br>
<br>
<br>
<br>          

<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
             <form action="accueil.html">
              <h5 class="card-title">gestion reservation
              
  <input type="submit" name="Ajout" value="ajouter" class="bouton"style="background-color: #47abd5;"></form>
      <form method="POST" action="recherche1.php">
    Rechercher un mot : <input type="text" name="recherche1">
     <input type="SUBMIT" name="ok"value="Search!"style="background-color: #47abd5;">  
       
        
     <div style="padding-left:70%">
        <a href="tri1.php">tri par date</a><br>
   <a href="tri2.php">tri par nombre</a></div></h5></form>  
         <div class="table-responsive">
<?PHP
 $reservation2C=new reservationC();
$listereservation1=$reservation2C->afficherreservation();
//var_dump($listeEmployes->fetchAll());
?><form method="POST">
               <table class="table table-striped">
                  <thead>
         <tr>
<td>id</td>
<td>Nom</td>
<td>Prenom</td>
<td>date  </td>
<td>Heure</td>
<td>numero table </td>
<td>nombre </td>
<td>supprimer</td>
<td>modifier</td>
<td>confirmation</td>
</tr>
                  </thead>
                  <tbody>
                    
<?PHP
 

foreach($listereservation1 as $row){
  ?>
  <center>
  <tr class="donn">
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['date_']; ?></td>
  <td><?PHP echo $row['heure']; ?></td>
  <td><?PHP echo $row['ntable']; ?></td>
  <td><?PHP echo $row['nbr']; ?></td>
  

  <td><form method="POST" action="supprimerReservation.php">
  <input type="submit" name="supprimer" value="supprimer" class="bouton"  onclick="return confirm('Etes vous sûre de vouloir supprimer la reservation suivante ?');" style="background-color: #47abd5;">
<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  
   <td><a href="modifierReservation.php?id=<?PHP echo $row['id']; ?>">
  Modifier</a></td>
  <td><a href="confirm.php">
  confirmation</a></td>
  </tr></center>
  <?PHP
}
?>


                  </tbody>
                </table></form>
            </div>
            </div>
          </div>
        </div>


<br>
<br>
<br>
<br> 



    

<br>
<br>

      
        <div class="col-lg-6">
          <div class="card">
            
          </div>
        </div>
      </div><!--End Row-->

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
          Copyright © 2020 Omek Houria Admin
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
  
</div>

</body></html>
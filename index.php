<?php

?>
<html>
    <head>
        <title>Crinklets Cafe | Menu</title>
        <meta name="description" content="Tasty treats you can't resist.">
        <meta name="keywords" content="Crinklets Cafe, Masaba Cantabaco Toledo City">
    
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Import jquery.js -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <!-- Import materialize.js !-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    
        <!--The overridder CSS -->
        <link rel="stylesheet" href="css/global.css">
        <script type="text/javascript" src="js/script.js"></script>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>

<body>

    <!-- Container begins -->
    <div class="container" style="background-color:#E4B7A0;"> 

    <?php
      include 'sidenav.php';
    ?>

    <!-- Row begins -->
    <div class="row" style="text-align:center">

      <img src="images/logo.png" class="_glogo">
      <p style="color: #fff; font-size:1.3em;"><i>Tasty treats you can't resist.</i></p>
      <h5 class="center-align z-depth-1 _cards">MENU</h5></div>


        <ul class="collapsible popout">
          
         
        <?php
        // Database file goes here...
        include '_menuDatabase.php';
        
        echo "<br>";

        // Crinklets Series section here...
        include '_menuCrinkletsSeries.php';

        echo "<br>";

        // Snackers section here...
        include '_menuSnackers.php';

        echo "<br>";

        // Milk Tea section here...
        include '_menuMilkTea.php';

        echo "<br>";

        // Halo Halo section here...
        include '_menuHaloHalo.php';
        ?>
          <br>
          <li>
            <div class="collapsible-header" style="background-color:#E4B7A0; color: #A45C40; font-weight: bold;"><i class="material-icons">free_breakfast</i>Coffee</div>
            <div class="collapsible-body" style="background-color:#F6EEE0"><span>Coming Soon</span></div>
          </li>

          <br>
          <li>
            <div class="collapsible-header" style="background-color:#E4B7A0; color: #A45C40; font-weight: bold;"><i class="material-icons">wb_sunny</i>Breakfast</div>
            <div class="collapsible-body" style="background-color:#F6EEE0"><span>Coming Soon</span></div>
          </li>

        </ul>
        

        <br><br><br>

      </div>
    

    </div>
    <!-- Row ends -->

  
  </div>
  <!-- Container ends -->


    <?php
    // Includes goes here
    include 'messenger.php';
    include 'footer.php';
    ?>

</body>

</html>
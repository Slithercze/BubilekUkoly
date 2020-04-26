<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Domů - Weekend Theatre</title>
  <link href="index2.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">  
  <link href="obcerstveni.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body>
  <div class="obal">
  
    
  <div class="pozadi" style="height: 1400px;">
    <div class="bila">
     <h1>MENU</h1>
      <div class="nazvy_jidla1">POPCORN + COLA + HRANOLKY</div>
      <div class="nazvy_jidla2">POPCORN + COLA</div>
      <div class="nazvy_jidla3">POPCORN + 2xCOLA + HRANOLKY</div>
      <div class="nazvy_jidla4">POPCORN</div>
      <div class="nazvy_jidla5">HRANOLKY</div>
      <div class="nazvy_jidla6">COLA</div>
      <div class="jidlo2">
   <?php 
   for($x = 1;$x < 7;$x++){ // php cyklus na vytvoření 6 obrázků
     echo "<img class=\"jidlo\" src=\" obrazky/menu".$x.".png \"  alt=\"\">";
   }
   ?>
      </div>
    </div>
  </div>


   

</body>

</html>
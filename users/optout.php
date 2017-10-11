<?php
  include("../includes/head.php");
  include("../includes/navbar.php");

  $uf = new userFactory();
  $u = $uf->getCurrentUser();

  $uf->optout($u->userid);

?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <h1>Opt Out</h1>
   </head>
   <body>
     <div class="container">
      <p>You are now opted out</p>
     </div>
   </body>
 </html>

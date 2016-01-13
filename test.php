<!DOCTYPE html>
<html>
<head><title>Carti</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!-- bootstrap code for table -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link type="text/css" rel="stylesheet" href="css/phpcss.css"/>
</head>
<body>
   <?php 
  include 'include.php';
   ?> 
<div class="tabel">
  <form action="formular.php">
  <input class="formular" type="submit" value="New Book">
   <table class="table-striped" style="width: 100%">
      <tr>
         <th>ID</th>
         <th>Nume</th>
         <th>Autor</th>
         <th>An</th>
         <th>Nr Pagini</th>
         <th>Sterge</th>
      </tr>
      <!--Denumirea coloanelor -->
               <?php
         $sql = "SELECT id, nume, autor, an, nr_pagini FROM carti";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
      // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>';
            echo $row["id"] ;
            echo '</td><td>' ;
            echo $row["nume"] ;
            echo '</td><td>';
            echo $row["autor"];
            echo '</td><td>';
            echo $row["an"];
            echo '</td><td>';
            echo $row["nr_pagini"];
            echo '</td><td>';
            // codul php care adauga coloanele
            echo '<a href="/deleteb.php?id='.$row["id"].'"><input class="buton" type="button" value="X"></a>';
            echo '</td></tr>';
           }
   }       
               else {
            echo "0 results";
      }
            mysqli_close($conn);
        ?>
    <div class="clear">     
   </div>
</body>
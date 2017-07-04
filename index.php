<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8" />
      <script src="jquery-3.2.1.js"></script>
      <title>crud1</title>
    </head>
    <body>
      <h1> Exercice 1 </h1>
      <?php
      include("connect.php");
      $reponse = $pdo->query('SELECT * FROM clients');
          $reponse1 = $reponse->fetchAll();

          foreach ($reponse1 as $value) {

          echo '<p> ID : ' .$value->id. '</p><p> Last Name : '.$value->lastName. '</p><p> First Name : ' .$value->firstName.'</p><p> Birth Date : '.$value->birthDate. '</p><p> Card : ' .$value->card.'</p><p> Card Number :' .$value->cardNumber. '</p><hr>';
          }
       ?>
       <h1> Exercice 2 </h1>
       <?php

       $reponse = $pdo->query('SELECT * FROM genres');
           $reponse1 = $reponse->fetchAll();

           foreach ($reponse1 as $value) {
           echo '<p> Genres de spectacles : '.$value->genre. '</p><hr>';
           }
        ?>
        <h1> Exercice 3 </h1>
        <?php

        $reponse = $pdo->query('SELECT * FROM clients LIMIT 0,20');
            $reponse1 = $reponse->fetchAll();

            foreach ($reponse1 as $value) {
              echo '<p> ID : ' .$value->id. '</p><p> Last Name : '.$value->lastName. '</p><p> First Name : ' .$value->firstName.'</p><p> Birth Date : '.$value->birthDate. '</p><p> Card : ' .$value->card.'</p><p> Card Number :' .$value->cardNumber. '</p><hr>';
            }
         ?>
        <h1> Exercice 4 </h1>
         <?php

         $reponse = $pdo->query('SELECT * FROM clients WHERE card = 1');
             $reponse1 = $reponse->fetchAll();

             foreach ($reponse1 as $value) {
               echo '<p> ID : ' .$value->id. '</p><p> Last Name : '.$value->lastName. '</p><p> First Name : ' .$value->firstName.'</p><p> Birth Date : '.$value->birthDate. '</p><p> Card : ' .$value->card.'</p><p> Card Number :' .$value->cardNumber. '</p><hr>';
             }
          ?>
          <h1> Exercice 5 </h1>
          <?php

          $reponse = $pdo->query('SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName');
              $reponse1 = $reponse->fetchAll();

              foreach ($reponse1 as $value) {
                echo '<p> Nom : '.$value->lastName. '</p><p> Prénom : ' .$value->firstName.'</p><hr>';
              }
           ?>
           <h1> Exercice 6 </h1>
           <?php

           $reponse = $pdo->query('SELECT * FROM shows ORDER BY title');
               $reponse1 = $reponse->fetchAll();

               foreach ($reponse1 as $value) {
                 echo '<p> Spectacle : '.$value->title. '</p><p> Artiste : ' .$value->performer.'</p><p> Date :' .$value->date. '</p><p> Heure de début :' .$value->startTime. '</p><hr>';
               }
            ?>
            <h1> Exercice 7 </h1>
            <?php
            include("connect.php");
            $reponse = $pdo->query('SELECT lastName, firstName, birthDate, card, cardNumber, CASE WHEN card = "1" THEN "oui" ELSE "non" END AS card FROM clients');
                $reponse1 = $reponse->fetchAll();

                foreach ($reponse1 as $value) {

                echo '<p> Last Name : '.$value->lastName. '</p><p> First Name : ' .$value->firstName.'</p><p> Birth Date : '.$value->birthDate. '</p><p> Card : ' .$value->card.'</p><p> Card Number :' .$value->cardNumber. '</p><hr>';
                }
             ?>
    </body>
    </html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
  <body>
    <header>
      <form action="#" method="post">
        <label for="text">entre un jour</label>
        <input type="text" id="text" name="jour" autofocus="">
        <button type="sudmit" id="boutton" name="button">envoie</button>
      </form>
    </header>
    <?php
    // La fonction array permet de créer un array
    $semaine = array ('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche' );

        //boucle for
        echo '<div><h2>Boucle for</h2><br />';

      for ($jour=0; $jour <7 ; $jour++) {
        echo $semaine[$jour] . '<br />';
    }
    echo '</div>';
        // boucle foreach
        echo '<div><h2>boucle foreach</h2><br />';
      foreach ($semaine as $jour) {
        echo $jour . '<br />';
      }
      echo '</div>';
        // boucle white
        echo '<div><h2>boucle white</h2><br />';

        $a = 0;

        while ($a < 7) {
          echo "$semaine[$a]" . '<br />';
          $a++;
        }
        echo '</div>';
    ?>
    <section>
    <?php

      $jour = strtolower($_POST['jour']);

    if ($jour == "lundi") {
      echo "Courage, le lundi c'est dur pour tout le monde!";
    }
    elseif ($jour == "mardi"|| $jour == "mercredi"|| $jour == "jeudi") {
      echo "Courage c'est bientôt fini!!!";
    }
    elseif ($jour == "vendredi") {
      echo "C'est bientôt le week-end!";
    }
    elseif ($jour == "samedi"|| $jour == "dimanche") {
      echo "C'est le week-end!";
    }
    else {
      echo "rentre un jour de la semaine svp !!";
    }
    ?>
    </section>
  </body>
</html>

<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”  -->

<?php

  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];

  // var_dump($name);
  // var_dump($email);
  // var_dump($age);

  //http://localhost:8888/snackz/snack-2/?name=valerio&email=m@i.l&age=30

  if ( empty($name) || empty($email) || empty($age) ) {
    echo "Accesso negato";
  } elseif ( strlen($name) <= 2 ) {
    echo "Accesso negato";
  } elseif ( strpos($email, "@" ) === false || strpos($email, "." ) === false ) {
    echo "Accesso negato";
  } elseif ( is_numeric($age) === false ) {
    echo "Accesso negato";
  } else {
    echo "Accesso riuscito";
  }

?>

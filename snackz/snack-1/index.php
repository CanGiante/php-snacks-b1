<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano
delle partite di basket di un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra ospite, punti fatti dalla
squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60  -->

<?php

  $matches = [

    [
      "team_1" => "A|X Armani Exchange Milano",
      "team_2" => "Virtus Roma",
      "points_1" => 105,
      "points_2" => 99
    ],
    [
      "team_1" => "Acqua San Bernardo Cantù",
      "team_2" => "Fortitudo Pompea Bologna",
      "points_1" => 84,
      "points_2" => 84
    ],
    [
      "team_1" => "Banco di Sardegna Sassari",
      "team_2" => "De'Longhi Treviso",
      "points_1" => 71,
      "points_2" => 67
    ],
    [
      "team_1" => "Allianz Pallacanestro Trieste",
      "team_2" => "Grissin Bon Reggio Emilia",
      "points_1" => 59,
      "points_2" => 73
    ]

  ];

  // var_dump($matches);

?>

<ul style="list-style-type: none;">

  <?php for ($i=0; $i < count($matches); $i++) { ?>

    <?php $this_match = $matches[$i] ?>

    <li> <?php echo $this_match["team_1"] ?> - <?php echo $this_match["team_2"] ?> |
    <?php echo $this_match["points_1"] ?>-<?php echo $this_match["points_2"] ?> </li> <br>

  <?php } ?>

</ul>

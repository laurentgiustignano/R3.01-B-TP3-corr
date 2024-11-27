<?php

require_once '../app/Glace.php';
require_once '../app/devtools.php';
require_once 'header.php';

$glace = new Glace();

if (isset($_POST['parfums'])) {
  foreach ($_POST['parfums'] as $parfum) {
    $glace->ajoutParfum ();
  }
}

if (isset($_POST['topping'])) {
  foreach ($_POST['topping'] as $topping) {
    $glace->ajoutTopping ();
  }
}

if (isset($_POST['cornet'])) {
  $glace->ajoutCornet ();
}

$total = $glace->getAddition ();
echo "<p class='m-2'>Le tarif de votre glace est : $total euros</p>\n";
require_once 'footer.php';
<?php

require_once 'Glace.php';
require_once 'devtools.php';
require_once 'header.php';

$glace = new Glace();
debug($glace->getTarifParfum());
debug($glace->getTarifCornet());
debug($glace->getTarifTopping());

debug($_POST);

require_once 'footer.php';
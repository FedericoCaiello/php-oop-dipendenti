<?php
  require_once __DIR__ . '/classes/dipendenti.php';
  require_once __DIR__ . '/classes/dirigenti.php';
  require_once __DIR__ . '/classes/operaio.php';

  $federico = new Dirigente('12345', 'Federico', 'Caiello', 'San Giovanni', 'pinco pallo','sdfhsjf', 30);

  var_dump($federico);

  try {
    $federico->setBonus(5);
  }catch (Exception $e) {
    echo 'errore' . $e->getMessage();
  }
  var_dump($federico);

  echo $federico->getBonus();

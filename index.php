<?php
  require_once __DIR__ . 'classes/dipendenti.php';
  require_once __DIR__ . 'classes/dirigenti.php';
  require_once __DIR__ . 'classes/operaio.php';

  $federico = new Dirigenti('12345', 'Federico', 'Caiello', 'San Giovanni', 'pinco pallo', 30);
  $federico->indirizzo('San Giovanni');
  $federico->stipendio(3000);
  $federico->giorniFerie(30);
  var_dump($federico);

  try {
    $federico->setBonus(5);
  }catch (Exception $e) {
    echo 'errore' . $e->getMessage();
  }
  var_dump($federico);

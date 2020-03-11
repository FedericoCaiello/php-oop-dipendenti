<?php
require_once 'dipendenti.php';

class Operaio extends Dipendente
{
    private $oreNotturno;
    public function __construct($_matricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban, $_mansioneId, $_oreNotturno)
    {
        parent::__construct($_matricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban, $_mansioneId);
        $this->oreNotturno = $_oreNotturno;
    }
}

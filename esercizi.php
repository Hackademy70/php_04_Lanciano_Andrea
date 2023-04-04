<?php

// ESERCIZIO 1
// Replicare la batmobile vista a lezione


class Batmobile{
    public $parteAnt;
    public $partePost;

    public function __construct(PartAnt $_parteAnt,PartPost $_partePost){
        $this->parteAnt = $_parteAnt;
        $this->partePost = $_partePost;
    }
    public function batAttack(){
        $this->parteAnt->attacco();
    }
    public function moving(){
        $this->partePost->move();
    }
}

abstract class PartAnt {
    abstract public function attacco();
}
abstract class PartPost {
    abstract public function move();
}

class LanciaFiamme extends PartAnt {
    public function attacco(){
        echo "fiamme ovunque \n";
    }
}
class LanciaRazzi extends PartAnt {
    public function attacco(){
        echo "razzi ovunque \n";
    }
}


class Razzo extends PartPost{
    public function move(){
        echo "razzo spaziale attivato \n";
    }
}
class Batwing extends PartPost{
    public function move(){
        echo "Batwings attivate, prepararsi al decollo \n";
    }
}


$bat = new Batmobile (new LanciaFiamme(), new Batwing());
$bat->batAttack();
$bat->moving();
$bat2 = new Batmobile (new LanciaRazzi(), new Razzo());
$bat2->batAttack();
$bat2->moving();
?>
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


// $bat = new Batmobile (new LanciaFiamme(), new Batwing());
// $bat->batAttack();
// $bat->moving();
// $bat2 = new Batmobile (new LanciaRazzi(), new Razzo());
// $bat2->batAttack();
// $bat2->moving();





// ESERCIZIO 2
// Siamo in guerra!
// Creare una classe Esercito, che sarà costituita da una Difesa e da un Attacco.
// Entrambe le classi si estenderanno a loro volta e avranno i rispettivi metodi: date sfoggio alla vostra fantasia!
// Esempio: ATTACCO: Fanteria, cavalleria, arcieri, catapulte, DIFESA: Fossato, fortezza, mura di cinta ecc..
// Creare quindi degli oggetti di classe esercito che possano attaccare o difendere utilizzando i metodi delle diverse classi create



class Esercito {
    public $attaccoSerio;
    public $difesaSeria;

    public function __construct(AttaccoSerio $_attacco,DifesaSeria $_difesa){
        $this->attaccoSerio = $_attacco;
        $this->difesaSeria = $_difesa;
    }
    public function attack(){
        $this->attaccoSerio->attacco();
    }
    public function defense(){
        $this->difesaSeria->difesa();
    }
}

abstract class AttaccoSerio {
    abstract public function attacco();
}

abstract class DifesaSeria {
    abstract public function difesa();
}

class ScudoMetallo extends DifesaSeria {
    public function difesa(){
        echo "Mi difendo con lo scudo di metallo \n";
    }
}
class ScudoQuercia extends DifesaSeria {
    public function difesa(){
        echo "Mi difendo con lo scudo di quercia \n";
    }
}

class Ascia extends AttaccoSerio{
    public function attacco(){
        echo "Ti attacco con un'ascia \n";
    }
}
class Spada extends AttaccoSerio{
    public function attacco(){
        echo "Ti attacco con una spada \n";
    }
}

$eser = new Esercito (new Spada(), new ScudoQuercia());
$eser->attack();
$eser->defense();
$eser2 = new Esercito (new Ascia(), new ScudoMetallo());
$eser2->attack();
$eser2->defense();

?>
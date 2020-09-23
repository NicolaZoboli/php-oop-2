<!-- GOAL: nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto
Note:
area quadrato: lato * lato
perimetro quadrato: 4 * lato
volume cubo: lato * lato * lato
superficie cubo: 6 * lato * lato
N.B.: definire ogni variabile e metodo pubblico come detto in classe -->


<?php

  Class Square {

    protected $side;

    public function __construct($side) {

      $this -> side = $side;
    }

    protected function getArea() {

      return $this -> side * $this -> side;
    }

    protected function getPer() {

      return 4 * $this -> side;
    }

    protected function getStrSqr() {

      return "Side: " . $this -> side . "<br>"
           . "Area: " . $this -> getArea() . "<br>"
           . "Perimeter: " . $this -> getPer();
    }

    public function __toString() {

      return "Square:<br>"
           . $this -> getStrSqr();
    }
  }

  Class Cube extends Square {

    public function __construct($side) {

      parent::__construct($side);
    }

    protected function getVolume() {

      return $this -> side * $this -> side * $this -> side;
    }

    protected function getSurface() {

      return 6 * $this -> side * $this -> side;
    }

    protected function getStrCube() {

      return "Side: " . $this -> side . "<br>"
           . "Volume: " . $this -> getVolume() . "<br>"
           . "Surface: " . $this -> getSurface();
    }

    public function __toString() {

      return "Cube:<br>"
           . $this -> getStrCube();
    }
  }

  $s1 = new Square (15);
  $c1 = new Cube (30);
  $s2 = new Square (7);
  $c2 = new Cube (20);

  echo
      $s1 . "<br><br>"
    . $c1 . "<br><br>"
    . $s2 . "<br><br>"
    . $c2 . "<br><br>";

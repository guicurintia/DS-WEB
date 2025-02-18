<?php 
    abstract class Animal{
        abstract function fazerSom();
        public function mover(){
            return "anda";
        }
    }
    class Cachorro extends Animal{
        public function fazerSom(){
            return "Late";
        }
    }
    class Gato extends Animal{
        public function fazerSom(){
            return "Mia";
        }
    }
    class Passaro extends Animal{
        public function fazerSom(){
            return "Canta";
        }
        public function mover(){
            return "Voa e " . parent::mover();
        }
    }

    $cao = new Cachorro();
    echo $cao->fazerSom();
    $gato = new Gato();
    echo $gato->fazerSom();
    $passaro = new Passaro();
    echo $passaro->fazerSom();
    echo "<br>" . $passaro->mover();
?>
<?php
final class Chu {
    public function maybay(){

    }
}

class Cha {
    public final function xedap(){

    }
    public function nha( $color ){

    }
}

class Con extends Cha {
    // nha
    public function xe(){
        // $this->xedap();
        // $this->nha();
        parent::nha('color');
    }

    public function nha( $color, $tang = 2, $tang3 = 3 ){

    }
}
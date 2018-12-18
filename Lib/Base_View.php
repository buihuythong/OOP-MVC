<?php

class View {
    public function render($name){
        require_once 'View/' . $name . ".php";
    }
}

<?php
function MontaImagens(){
    $this->ExecutaSelct($this->setQuery("SELECT * FROM pizzaria.pizza"));
}


?>
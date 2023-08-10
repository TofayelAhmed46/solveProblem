<?php
namespace App;

abstract class Restaurent{
    protected $name;
    protected $menu=[];
    protected $totalprice=0;
    
    public function SetMenu(array $menu){
        array_push($menu,$this->menu);
        
        
        
    }

    public function SetName($name){
        
        
    }
    
    
}


















?>

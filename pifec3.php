<?php

namespace App\controller;
use cake\controller\controller;
use cake\event\event;

class  Appcontroller extends  controller; {
public  function  initialize (){
parent: :initialize ();
$this  ->loadconponent ('requestHandler');
$this  ->loadconponent('flash');
}
public  function  beforeRender(event $event){
if (!array_key_exist ('_serialize', $this  ->viewvars')&&
in_array ($this  ->response-type (), ['application/json',application/xml'])){
$this  ->set ('_serialize',true);
     }
   }  
}
?>
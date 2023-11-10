<?php
class Calc {  
 
 public $result;

 function plus($num1, $num2) { 
   $this->result = $num1 + $num2; 
   return $this;
 } 

 function minus($num1, $num2) { 
   $this->result = $num1 - $num2; 
   return $this; 
 } 

 function multiply($num1, $num2) { 
   $this->result = $num1 * $num2; 
   return $this; 
 } 

 function divide($num1, $num2) { 
   $this->result = $num1 / $num2; 
   return $this; 
 } 

 function equal() {
  
   $re = $this->result;
    
   $this->result = 0;

   return $re; 
 } 

} 

$calc = new Calc; 

?>
<?php 
class Calculator{
    public $num1=0;
    public $num2=0;
    public $oper;
 public function setData($postData)
 {
    //print_r($postData); 
    if(isset($postData['number1'])){
         $this->num1=$postData['number1'];
     }
     if(isset($postData['number2'])){
         $this->num2=$postData['number2'];
     }
     if(isset($postData['operator'])){
         $this->oper=$postData['operator'];
     }

 } 
 public function calculate(){
     if($this->oper=='+'){
        return $result=$this->sum();
     }
     elseif($this->oper=='-'){
        return $result=$this->sub();
     }
     elseif($this->oper=='*'){
        return $result=$this->mul();
     }
     elseif($this->oper=='/'){
        return $result=$this->devide();
     }
    
 }
 public function sum(){
    return $this->num1+$this->num2;
 } 
 public function sub(){
    return $this->num1-$this->num2;
 } 
 public function mul(){
    return $this->num1*$this->num2;
 }
 public function devide(){
    return $this->num1/$this->num2;
 }
}
?>
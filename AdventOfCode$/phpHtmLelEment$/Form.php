<?php


 class Form {
    private $type=array();  
    private $class=array();
    private $id=array();
    private $name=array();
    private $value=array();
    private $placeholder=array();
    private $labelText=array();
    private $Num;
    function __construct() {
        $this->Num=0;
    }

    function setType($type){
        array_push($this->type,$type);
    }
   
    function setClass($class){
        array_push($this->class,$class);
    }
    function setId($id){
        array_push($this->id,$id);
    }
    function setName($name){
        array_push($this->name,$name);
    }
    public function setPlaceHolder($placeholder){
        array_push($this->placeholder,$placeholder);
        $this->Num++;
    }
    public function setValue($value){
       array_push($this->value,$value);
        $this->Num++;
    }
    public function setLabelText($labeltext){
        array_push($this->labelText,$labeltext);
        $this->Num++;
    }
    private function choose(){
          $j=0;
            $k=0;
            $l=0;
            for ($i = 0; $i < $this->Num; $i++) {  
                $x=$this->type[$i];
                switch($x){
                case 'text':
                echo"<input type='", $this->type[$i], "' class='", $this->class[$i], "' id='", $this->id[$i], "' name='", $this->name[$i], "' placeholder='", $this->placeholder[$j], "'>\n";
                $j++;
                break;
             
                case 'password':
                echo"<input type='", $this->type[$i], "' class='", $this->class[$i], "' id='", $this->id[$i], "' name='", $this->name[$i], "' placeholder='", $this->placeholder[$j], "'>\n";
                $j++;
                break;
            
                case 'email':
                echo"<input type='", $this->type[$i], "' class='", $this->class[$i], "' id='", $this->id[$i], "' name='", $this->name[$i], "' placeholder='", $this->placeholder[$j], "'>\n";
                $j++;
                break;
            
                case 'submit':
                echo"<input type='", $this->type[$i], "' class='", $this->class[$i], "' id='", $this->id[$i], "' name='", $this->name[$i], "' value='", $this->value[$l], "'>\n";
                $l++;
                break;
            
                case 'checkbox':
                echo"<label class='",$this->class[$i],"'>", $this->labelText[$k],"<input type='",$this->type[$i],"'  id='", $this->id[$i], "' name='", $this->name[$i], "'></label>\n";
                $k++;
                break;
                }
            }
     
       
    }
 
     function setForm($formMethod,$formClass,$formId){
         if ($formMethod == "POST" || $formMethod == "GET") {
            echo"<form id='", $formId, "'class='", $formClass, "' method='", $formMethod, "'>\n";
         $this->choose();
            echo"</form>\n";
        }else {
            echo"<h1 class='display-4'>A Form metódusa csak GET vagy POST lehet</h1>";
        }
    }
    
}

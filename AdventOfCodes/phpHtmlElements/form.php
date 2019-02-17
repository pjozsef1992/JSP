<?php
 class Form{
private $type=array();
private $class=array();
private $id=array();
private $name=array();
private $labelText=array();
private $placeholder=array();
private $value=array();
private $placeHolderElementNum; 
private $valueElementNum;
private $cbElementNum;


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
function setPlaceholder($placeholder){
array_push($this->placeholder,$placeholder);
$this->placeHolderElementNum++;
}
function setValue($value){
array_push($this->value,$value);
$valueElementNum++;
}
function setLabelText($text){
array_push($this->labelText,$text);
}
function setFrom($formId,$formClass,$formMethod){

if($formMethod==$_GET['']||$formMethod==$_POST[''])
{

echo "<form id='",formId,"'class='",formClass,"' method='",$formMethod,"'>";
	
for($i=0;$i<=$this->placeHolderElementNum;$i++)
{
echo"<input type='",$this->type[$i],"' class='",$this->class[$i],"' id='",$this->id[$i],"'name='",$this->name[$i],"' placeholder='",$this->palceholder[$i],"'>";
}
for($i=0;$i<=$this->valueElementNum;$i++)
{
echo"<input type='",$this->type[$i],"' class='",$this->class[$i],"' id='",$this->id[$i],"'name='",$this->name[$i],"' placeholder='",$this->value[$i],"'>";
}
for($i=0;$i<=$this->cbElementNum;$i++)
{
echo"<input type='",$this->type[$i],"' class='",$this->class[$i],"' id='",$this->id[$i],"'name='",$this->name[$i],"' placeholder='",$this->value[$i],"'><label>'",$this->labelText[$i],"'</label>";
}
	echo"</form>";
	}else{
	echo"A form metódusa nem megfelelő!";
	}
	}
	

}
?>
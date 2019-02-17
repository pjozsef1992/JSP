<?php

include 'htmlElement.php';
class Link extends htmlElement {
    private $title;
    private $contain;
    private $type;
    private $attribute=array();
    private $attributevalue=array();
    private $href;
    
    private function  getHtmlType(){
        return $this->type;
    }
    private function getHtmltitle(){
        return $this->title;
    }


    public function sethtmlcontain($contain) {
        $this->title = $contain;
    }
    public function sethtmlattribute($attribute,$attributevalue) {
        array_push($this->attribute,$attribute);
        array_push($this->attributevalue,$attributevalue);
    }
    public function setLinkAttribute(){
        for($i=0;$i<sizeof($this->attribute);$i++){
        echo $this->attribute[$i],"='", $this->attributevalue[$i],"'";
        }
        
    }
    public function setLink(){
        echo "<";
        echo $this->gethtmlType()," " ;
        echo $this->setLinkAttribute(); 
        echo ">\n";
        echo "<a";
        echo " href = '";
        echo $this->getHref();
        echo "'>";
        echo $this->getHtmltitle();
        echo "</a>\n";
        echo "</",$this->gethtmlType(),">\n";
    }
    public function setHref($href){
        $this->href=$href;
    }
    private function getHref(){
        return $this->href;
    }

    public function sethtmlType($type) {
        $this->type=$type;
    }

}

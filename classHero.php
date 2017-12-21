<?php
class Hero{
    protected $Pv = "100";
    protected $Name = "Name";
    protected $Weapon = "Weapon";
    protected $Type = "Type";
    protected $Att = 0 ;
    protected $Def = 0 ;

    public function getName(){ 
        return $this->Name;
    }
    public function setName($Name){
        $this->Name =$Name;
    }

    public function getWeapon(){
        return $this->Weapon;
    }
    public function setWeapon($Weapon){
        $this->Weapon = $Weapon;
    }
    public function getType(){
        return $this->Type;
    }
    public function setType($Type){
        $this->Type = $Type;
    }
    public function getAtt(){
        return $this->Att;
    }
    public function setAtt($Att){
        $this->Att = $Att;
    }
    public function getDef(){
        return $this->Def;
    }
    public function setDef($Def){
        $this->Def = $Def;
    }
    public function display():string {
        return "Le héro est un " . $this->Type . " qui s'appelle " . $this->Name . "\n Arme: " . $this->Weapon . "\n Pv:" . $this->Pv ."\n Att: " . $this->Att ."\n Def: " . $this->Def ;
    }
}

$H1=new Hero();
$H1->setName("Gimly");
$H1->setWeapon("Hache");
$H1->setType("Nain");
$H1->setAtt(10);
$H1->setDef(5);
var_dump($H1->display());

$H2=new hero();
$H2->setName("Aragorn");
$H2->setWeapon("Epée");
$H2->setType("Humain");
$H2->setAtt(5);
$H2->setDef(10);
var_dump($H2->display());

function Attack($H1, $H2){
    function Hit($Att, $Def){
    $this->H2->Pv - $this ->H1->Att;
    $this->H1->Pv - $this ->H2->Att;
    }
}

function Combat(){

}
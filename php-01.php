<?php
/*
function customSort($array){
    $array = [10, 3, 7, 5, 1];
    $sorted = false;
    $size = count($array);
    while(!$sorted){

        $sorted = true;
        for($i = 0 ; $i < $size - 1 ; $i++)
        {
            if($array[$i] > $array[$i + 1])
            {
                $tmp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $tmp;
                $sorted = false;
            }
        }
        $size--;
    }
    return($array);
}
var_dump(customSort($tab));
*/

class Person{
    private $firstname= "John";
    private $lastname= "Doe";

    function __construct($first,$last){
        $this->firstname = $first;
        $this->lastname = $last;
    }


    public function getfirstname():string{
        return $this->firstname;
    }
    public function getlastname():string{
        return $this->lastname;
    }
    public function setfirstname($firstname){
        $this->firstname= $first;
        }
    public function setlastname($lastname){
        $this->lastname= $last;
        }
    public function display():string{
        return $this->first . $this->last;
    }
}
 function main(){
    $n = new Person ("Johny","Holliday")
    var_dump($n->display());
    
}
main();
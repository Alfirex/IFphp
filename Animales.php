<?php
class Animal{

	public $animal1;
	public $animal2;
	public $animal3;
	public $animal4;


	public function __construct()
    {
        $this->animal1 ="Perro"." tiene 4 patas";
        $this->animal2= "Caballo"." tiene 4 patas";
		$this->animal3="Gato ". " tiene 4 patas";
		$this->animal4="Gallina"."tiene 2 patas";
		
		    }

	public function getAnimal1()
    {
        return $this->animal1;
    }
	public function getAnimal2()
    {
        return $this->animal2;
    }
	public function getAnimal3()
    {
        return $this->animal3;
    }
	public function getAnimal4()
    {
        return $this->animal4;
	}

		public function setAnimal1($animal1){
		$this->animal1=$animal1;
		}
		public function setAnimal2($animal2){
		$this->animal2=$animal2;
		}
		public function setAnimal3($animal3){
		$this->animal3=$animal3;
		}
		public function setAnimal4($animal4){
		$this->animal4=$animal4;
		}

}
$CrearAnimal= new Animal();
echo"<h4> Animal </h4>";
echo $CrearAnimal->setAnimal1("cienpies"."tendra 100 patas");
echo "Animal:".$CrearAnimal->getAnimal1() . "<br>";

echo $CrearAnimal->setAnimal2("Araña y tendra 8 patas");
echo "Animal:".$CrearAnimal->getAnimal2() . "<br>";

echo "Animal:".$CrearAnimal->getAnimal3() . "<br>";

echo"Animal:".$CrearAnimal->getAnimal4() . "<br>";


?>
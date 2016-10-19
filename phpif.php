<?php
Class Alumno{
public $nombre;
public $edad;
public $curso;
public $ciclo;


	
	public function getNombre()
    {
        return $this->nombre;
    }
	public function getEdad()
    {
        return $this->edad;
    }
	public function getCurso()
    {
        return $this->curso;
    }
	public function getCiclo()
    {
        return $this->ciclo;
    }

    


    public function setNombre($nombre){

    	$this->nombre=$nombre;

    }

    	

	public function setEdad($edad){

		if ($edad>=18){
			$this->edad=$edad;
		}
		else{
			$this->edad="18";
		}
	}

	public function setCurso($curso){

		if ($curso==1){
			$this->curso=$curso;
		}
		elseif ($curso==2){
			$this->curso=$curso;
		}
		else{
			$this->curso="1";
		}
	}

    public function setCiclo($ciclo){

    	$this->ciclo=$ciclo;	
    }

    
	}

	
	
	
	


$Enseñanza= new Alumno();
echo"<h4> Ficha del Alumno </h4>";

echo $Enseñanza->setNombre("Alejandro");
echo "Nombre del Alumno:".$Enseñanza->getNombre() . "<br>";

echo $Enseñanza->setEdad("19€");
echo "Edad:".$Enseñanza->getEdad() . "<br>";

echo $Enseñanza->setCurso("2");
echo"Curso:".$Enseñanza->getCurso() . "<br>";

echo $Enseñanza->setCiclo("DAW");
echo "Ciclo:".$Enseñanza->getCiclo() . "<br>";


?>


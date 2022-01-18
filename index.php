<!-- **
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */ -->

     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class person {
    private $name;
    private $surname;
    private $dateOfBirth;

    public function __construct($name,$surname){
        $this -> setName($name);
        $this -> setSurname($surname);
    }

    public function setName($name){
        if (strlen($name) > 2){
            $this -> name = $name;
        }
    }
    public function getName(){
        return $this -> name;
    }

    public function setSurname($surname){

        if ( strlen($surname) > 2){
            $this -> surname = $surname;
        }
    }
    public function getSurname(){
        return $this -> surname;
    }
    
    public function setDateOfBirth($dateOfBirth){
        if (strlen($dateOfBirth) > 9){
            $this -> dateOfBirth = $dateOfBirth;
        }
    }
    public function getDateOfBirth(){
        return $this -> dateOfBirth;
    }

    public function printFullPerson(){
        if ($this -> dateOfBirth){
            return $this -> getName() . " " . $this -> getSurname(). ": " . $this -> getDateOfBirth();
        } else {
            return $this -> getName() . " " . $this -> getSurname(). ": " . " ( Data Nascita non inserita! )";
        }
    }

    public function __toString(){
        return $this -> printFullPerson();
    }
}


class employee extends person {

    private $salary;
    private $assumptionDate;

    public function __construct($name,$surname,$salary){
        
        parent::__construct($name,$surname);
        $this -> setSalary($salary);

    }

    public function setSalary($salary){
        $this -> salary = $salary;
    }

    public function getSalary(){
        return $this -> salary;
    }

    public function setAssumptionDate($assumptionDate){
        if (strlen($assumptionDate) === 10 ){
            $this -> assumptionDate = $assumptionDate;
        }
    }

    public function getAssumptionDate(){
        return $this -> assumptionDate;
    }


    public function printFullEmployee(){
        if ( $this -> assumptionDate ){
            return $this -> getName() . " " . $this -> getSurname() . ": ". $this -> getSalary() . " ( ". $this -> getAssumptionDate() . " )";
        } else {
            return $this -> getName() . " " . $this -> getSurname() . ": ". $this -> getSalary() . " ( Data Assunzione non inserita ! )";
        }
    }

    public function __toString(){
        return $this -> printFullEmployee();
    }
}



$p1 = new person ("Andrea","Scarpa");
$p2 = new person ("Giada","Casula");
$p3 = new person ("Mirko", "Sanna");
$p4 = new person ("Marco", "Scarpa");
$p5 = new person ("Denise", "Sanna");


$em1 = new employee ($p1 -> getName(),$p1 -> getSurname(), "11002");
$em2 = new employee ($p2 -> getName(),$p2 -> getSurname(), "14050");
$em3 = new employee ($p3 -> getName(),$p3 -> getSurname(), "40000");
$em4 = new employee ($p4 -> getName(),$p4 -> getSurname(), "8800");
$em5 = new employee ($p5 -> getName(),$p5 -> getSurname(), "7034");


$p1 -> setDateOfBirth("13/02/1996");
// $p2 -> setDateOfBirth("24/08/2001");
$p3 -> setDateOfBirth("25/03/1997");
$p4 -> setDateOfBirth("26/04/1966");
$p5 -> setDateOfBirth("26/04/1966");





$em1 -> setAssumptionDate("20/02/2021");
$em2 -> setAssumptionDate("10/01/2022");
$em4 -> setAssumptionDate("02/07/2021");


echo "<h2> persona1 con toString ( Nome, Cognome , Data di Nascita )  </h2>";
echo $p1 . "<br>";
echo "<h2> persona2 con toString ( Nome, Cognome , Data di Nascita ) </h2>";
echo $p2 . "<br>";
echo "<h2> persona3 con printFullPerson() ( Nome, Cognome , Data di Nascita ) </h2>";
echo $p3 -> printFullPerson() . "<br>";
echo "<h2> persona4 con toString ( Nome, Cognome , Data di Nascita ) </h2>";
echo $p4 . "<br>";
echo "<h2> persona5 con toString ( Nome, Cognome , Data di Nascita ) </h2>";
echo $p5 . "<br>";

echo "<br> <br> <br>";

echo "<h2> employee(persona1) con printFullEmployee ( Nome, cognome, salario, data di assunzione ) </h2>";
echo $em1 -> printFullEmployee() ;
echo "<h2> employee(persona2) con toString ( Nome, cognome, salario, data di assunzione ) </h2>";
echo $em2;
echo "<h2> employee(persona3) con printFullEmployee ( Nome, cognome, salario, data di assunzione ) </h2>";
echo $em3 -> printFullEmployee();
echo "<h2> employee(persona4) con toString ( Nome, cognome, salario, data di assunzione ) </h2>";
echo $em4;
echo "<h2> employee(persona5) con toString ( Nome, cognome, salario, data di assunzione ) </h2>";
echo $em5;

?>
</body>
</html>
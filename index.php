<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require("./Alunno.php");
        require("./Veicolo.php");
        require("./Automobile.php");
        require("./Animale.php");
        require("./Cane.php");
        require("./Persona.php");
        require("./Studente.php");

        $a1 = new Alunno("ale", "skorzi1", "12");
        $a2 = new Alunno("ale2", "skorzi2", "123");
        $a3 = new Alunno("ale3", "skorzi3", "124");
        $a4 = new Alunno("ale4", "skorzi4", "126");

        $alunni = array($a1, $a2, $a3, $a4);
        

        foreach($alunni as $x){
            $x->toString();
            echo"<br>";
        }

        echo"<br><br><p>esercizio 1</p><br>";

        $auto = new Automobile("Toyota", 2022, "Corolla");
        echo $auto->getMarca() . "\n";
        echo $auto->getAnno() . "\n";
        echo $auto->getModello() . "\n";

        echo"<br><br><p>esercizio 2</p><br>";

        $cane = new Cane();
        echo $cane->verso() . "\n";

        echo"<br><br><p>esercizio 3</p><br>";

        $studente = new Studente("Mario", "Rossi", "12345");
        echo $studente->presentati() . "\n";
        echo $studente->getMatricola() . "\n";
    ?>
</body>
</html>
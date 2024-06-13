<?php
include_once "PersoClass03.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters et Setters</title>
</head>
<body>
    <h1>Getters et Setters</h1>
    <h2>Accessors ou Getters</h2>
    <p>Ce sont des méthodes publiques, qui permettent de récupérer des propriétées private ou protected (public également, mais peu utilisé car peu sécurisé, et inutile depuis PHP 8.1 grâce au readonly)</p>
    <p>On les nommera comme les propriétés, en rajoutant get devant le nom mis en majuscule</p>
    <pre><code>protected string $name;
protected ?int $hp;
    // getters:
public function getName(): string 
    {
        return $this->name;
    }
public function getHp();

$perso03A = new PersoClass03("Steve",16,"Humain");

// On peut récupérer le nom avec 

echo $perso03A->getName();

</code></pre>
<?php
try{
    $perso03A = new PersoClass03("  <br>  Samuel  <br> ",16,"Humain");
    echo $perso03A->getName();
    
}catch(Exception $e){
    echo $e->getCode(). " ".$e->getMessage();
}
?>

<?php

echo $perso03A;

var_dump($perso03A);

try{
// ici utiliser les setters pour modifier
    $perso03A->setName("Medhi");
    $perso03A->setEspece("Elf");
    $perso03A->setHp(3);
    $perso03A->setAge(13);
    $perso03A->setXp(26);
    $perso03A->setLevel(1);
    $perso03A->setAlive(true);
}catch(Exception $e){
    echo $e->getCode()." ".$e->getMessage();
}

try{
// ici les getters pour afficher
    echo $perso03A->getName()."<br>";
    echo $perso03A->getHp()."<br>";
    echo $perso03A->getAge()."<br>";
    echo $perso03A->getXp()."<br>";
    echo $perso03A->getLevel()."<br>";
    echo $perso03A->getEspece()."<br>";
    echo $perso03A->getAlive()."<br>";
}catch(Exception $e){
    echo $e->getCode()." ".$e->getMessage();
}

var_dump($perso03A);
?>
</body>
</html>
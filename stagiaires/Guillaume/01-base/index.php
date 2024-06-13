<?php
require_once "PremiereClass.php";

// on va instancier notre classe avec le mot de clef new
$instance1 = new PremiereClass; // parenthèses non obligatoires, mais mauvaise pratique de ne pas les mettre

$instance2 = new PremiereClass(); // bonne pratique d'instanciation

?>
<h3>Création d'objet avec le mot clef new</h3>
<p>Une instanciation est créée avec le mot clef new, la variable ne contient pas réellement l'objet, ce n'est qu'un index (ou pointeur) vers l'objet en mémoire.</p>
<code>
    $instance3 = $instance1;
    $instance3 n'est qu'un raccourci vers le même objet (= ne permet pas le clonage)
</code>
<?php

$instance3 = $instance1;

var_dump(
    $instance1, // premier objet de type PremiereClass
    $instance2, // deuxième objet (ou instance de classe) de type PremiereClass
    $instance3, // ceci n'est qu'un lien vers l'instance numéro 1
);

?>
<h3>En PHP les array ne sont pas des objets !</h3>
<p>On peut donc les cloner avec le signe =</p>
<p>C'est historiquement du au fait que PHP est un langage créé pour utiliser les tableaux</p>
<code>
    $tab1 = [1,2,3];
    $tab2 = $tab1;
</code>
<?php
$tab1 = [1,2,3];
$tab2 = $tab1;
var_dump($tab1,$tab2);
$tab1[] = 4;
$tab2[]= "coucou";
$tab2["lulu"]=7;
var_dump($tab1,$tab2);
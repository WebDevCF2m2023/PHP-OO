<?php

require_once "SecondeClass.php";

// instanciation d'un objet de type SecondeClass
$instance1 = new SecondeClass();

var_dump(
    $instance1,
);

?>
<h3>Propriétés publiques</h3>
<p>Elles sont rarement utilisées, car trop permissive (exception avec le readonly (on le verra plus tard)</p>
<p>Le signe pour accéder aux propriétés publiques en dehors de l'instance est $instance->paramètreSansDollar </p>
<h4>On peut les lire depuis l'extérieur de l'instance</h4>
<code>echo $instance1->param2;</code><br>
<?php
echo $instance1->param2;
?>
<h4>On peut les modifier depuis l'extérieur de l'instance sans vérification !</h4>
<pre><code>$instance1->param1 = 25;
echo $instance1->param1;</code></pre><br>
<?php
$instance1->param1 = 25;
echo $instance1->param1;
?>
<h3>Constantes publiques</h3>
<p>On peut les afficher en dehors de l'instance avec ::</p>
<p>Attention c'est une mauvaise pratique (mais qui reste très utilisé), il vaut mieux partir de la classe</p>
<pre><code>
echo $instance1::CONSTANTE_1; // mauvaise pratique

echo SecondeClass::CONSTANTE_1; // bonne pratique
</code></pre>
<?php
echo $instance1::CONSTANTE_1; // mauvaise pratique
echo "<br>";
echo SecondeClass::CONSTANTE_1; // bonne pratique

?>
<h3>Methodes publiques</h3>
<p>Ces méthodes peuvent être appelées en dehors (comme en dedans) de l'instance avec l'opérateur -></p>
<code>$instance1->bonjourLesAmies();</code>
<?php
$instance1->bonjourLesAmies(); // affiche (donc mauvaise pratique)
?><br>
<code>echo $instance1->getParam2(); // getter valide</code>
<?php
echo $instance1->getParam2(); // getter valide


<?php
require_once "TroisiemeClasse.php";
$troisiemeClasse = new TroisiemeClasse();
?>

<h4>Affichage d'un paramètre car il est en visiblité <i style="color: green">public</i>.</h4>
<code>echo $troisiemeClasse->param1;</code>
<?php
echo '<br>' . $troisiemeClasse->param1 . '<br>';
?>

<h4>Ne peut pas accèder a param2 car il est en <i style="color: red">private</i></h4>
<code>echo $troisiemeClasse->param2; // Donne une erreur fatal </code>

<h4>Ne peut pas accèder a param3 car il est en <i style="color: orange">protected</i></h4>
<code>echo $troisiemeClasse->param3; // Donne une erreur fatal </code>
<h4>Réassignement d'une valeur au paramètre <i style="color: green">public</i> param1 : </h4>
<code>$troisiemeClasse->param1 = 255;</code>
<?php
$troisiemeClasse->param1 = 255;
echo '<br>Valeur de param1 : <strong>' . $troisiemeClasse->param1 . '</strong><br>';
?>
<i>Cela n'est pas possible pour param2 et param3 car elles ne sont pas accessible a l'extérieur de la classe.</i>

<h4>Affichage d'un paramètre car il est en visiblité <i style="color: green">public</i> avec <span style="color: blue">readonly</span>. <i style="color: olive">[depuis PHP 8.1]</i></h4>
<p>Le paramètre param4 ressemble a ceci dans la class TroisiemeClasse : </p>
<code>public readonly int $param4;</code>
<br><br>
<i>Le typage du paramètre est <strong style="color: red">obligatoire</strong> et ne peut pas avoir de valeur par défaut.</i>
<br>
<p>On doit au moins une fois initialiser la variable avant de pouvoir la lire.</p>
<code>$troisiemeClasse->initParam4(); // On doit d'abord initialisé la variable</code>
<br>
<code>echo $troisiemeClasse->param4;</code>
<?php
$troisiemeClasse->initParam4();
echo '<br>Valeur de param4 : <strong>' . $troisiemeClasse->param4. '</strong><br>';
?>
<br>
<code>$troisiemeClasse->param4 = 50; // Donne une erreur fatal car param4 est en readonly</code>

<h4>Affichage d'une constante publique :</h4>
<code>echo $troisiemeClasse::CONST_1; // Mauvaise pratique</code>
<br>
<code>echo TroisiemeClasse::CONST_1; // Bonne pratique</code>
<p>Il est conseillé d'utiliser la classe pour accèder aux valeurs constantes et non de/des (l')instance(s)</p>
<?php
echo 'Valeur de CONST_1 : <strong>' . $troisiemeClasse::CONST_1 . '</strong><br>';
?>
<h4>Que sont les Getters ( Accessors ) :</h4>
<p>Ils permettents de récupérer des paramètres <i style="color: red">private</i> et <i style="color: orange">protected</i>.</p>
<p>On doit les déclarer si ils sont nécessaire.</p>
<p>Dans le cas du <i style="color: red">private</i> la déclaration dois être dans la classe où se situe les paramètres <i style="color: red">private</i>.</p>
<p>Si il n'y a aucun accessors pour les paramètres <i style="color: red">private</i>, les héritiers ( via extends ) ne pourront pas y accèder.</p>

<h4>Récupération du paramètre <i style="color: red">private</i> param2 via son Getter :</h4>
<code>echo $troisiemeClasse->getParam2();</code><br>
<?php
echo 'Valeur de param2 : <strong>' . $troisiemeClasse->getParam2() . '</strong><br>';
?>

<h4>Récupération du paramètre <i style="color: orange">protected</i> param3 via son Getter :</h4>
<code>echo $troisiemeClasse->getParam3();</code><br>
<?php
echo 'Valeur de param3 : <strong>' . $troisiemeClasse->getParam3() . '</strong><br>';
?>

<h4>Changement de valeur du paramètre <i style="color: red">private</i> param2 via son Setter :</h4>
<code>echo $troisiemeClasse->setParam2("&lt;i&gt;Changer param2&lt;/i&gt;");</code><br>
<?php
$troisiemeClasse->setParam2("<i>Changer param2</i>");
echo 'Valeur de param2 : <strong>' .  $troisiemeClasse->getParam2() . '</strong><br>';
?>
<br>
<i>Le &lt;i&gt; n'est pas pris en compte grâce a strip_tags.</i>

<h4>Changement de valeur du paramètre <i style="color: orange">protected</i> param3 via son Setter :</h4>
<code>echo $troisiemeClasse->setParam3("&lt;i&gt;Changer param3&lt;/i&gt;");</code><br>
<?php
$troisiemeClasse->setParam3("<i>Changer param3</i>");
echo 'Valeur de param3 : <strong>' .  $troisiemeClasse->getParam3() . '</strong><br>';
?>
<br>
<i>Le &lt;i&gt; n'est pas pris en compte grâce a strip_tags.</i>
<?php
require_once 'SecondeClasse.php';

$secondeClasse = new SecondeClasse();
var_dump($secondeClasse);
?>
<h4>Affichage d'un paramètre par une méthode publique.</h4>
<code>echo $secondeClasse->getParam2();</code>
<?php
# Utilisation d'une méthode publique pour afficher un paramètre ( qui en principe ne sera pas public ) -> getter
echo '<br>' . $secondeClasse->getParam2() . '<hr>';
?>
<h4>Affichage d'un paramètre car il est en visiblité publique.</h4>
<code>echo $secondeClasse->param2;</code>
<?php
# Comme le paramètre est public, on peut l'afficher sans passer par un getter.
echo '<br>' . $secondeClasse->param2 . '<hr>';
?>
<h4>Danger d'un paramètre publique : </h4>
<p>Comme le paramètre est publique, on va pouvoir le modifier en dehors de la classe.</p>
<code>$secondeClasse->param2 = 'aurevoir';</code>
<?php
$secondeClasse->param2 = 'aurevoir';
echo '<br> Valeur de param2 : <strong>' .$secondeClasse->param2. '</strong>';
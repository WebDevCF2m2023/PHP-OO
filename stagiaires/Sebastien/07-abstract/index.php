<?php
require_once "PersoClasse2Abstract.php";
require_once "PersoClasse2.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract | classes abstraites</title>
</head>
<body>
<h1>Abstract | classes abstraites</h1>
<p>Une classe abstraite est une classe qui ne peut pas être instanciée. Elle est utilisée pour définir des méthodes qui seront héritées par des classes enfants.</p>
<p>Une classe abstraite peut contenir des méthodes abstraites et des méthodes non abstraites.</p>
<p>Une méthode abstraite est une méthode qui n'a pas de corps. Elle est définie avec le mot clé abstract et ne peut pas être définie avec les mots clés private, protected ou final</p>
<pre><code>// impossible d'instancier la classe abstraite:
// $perso1 = new PersoClasse2Abstract();</code></pre>
<?php
// impossible d'instancier la classe abstraite:
// $perso1 = new PersoClasse2Abstract();
$perso2 = new PersoClasse2("luc","humain")
?>
</body>
</html>

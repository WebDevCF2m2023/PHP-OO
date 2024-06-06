# PHPOO

## PHP 8 Orienté Objet

---

L'orienté objet, en **PHP** et dans d'autres langages, est également nommé **POO** (programmation orientée objet).

C'est un **paradigme** de programmation informatique. 

La **POO** consiste en la définition et l'interaction de briques logicielles appelées objets.

Un **objet** représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un livre. Il possède une **structure** interne et un **comportement**, et il sait interagir avec ses pairs. 

Il s'agit donc de représenter ces objets et leurs relations. L'interaction entre les objets via leurs relations permet de concevoir et réaliser les fonctionnalités attendues, de mieux résoudre le ou les problèmes. Dès lors, l'étape de modélisation revêt une importance majeure et nécessaire pour la POO. C'est elle qui permet de transcrire les éléments du réel sous forme virtuelle.



## Menu de navigation
- [code](https://github.com/WebDevCF2m2023/PHP-OO)
- [Introduction](#php-8-orienté-objet)
  - [1. Les classes et les objets](#1-les-classes-et-les-objets)
    - [1.1. Déclaration d'une classe](#11-déclaration-dune-classe)
      - [1.1.2 La visibilité des propriétés et des méthodes](#112-la-visibilité-des-propriétés-et-des-méthodes)
      - [1.1.2 La visibilité public readonly](#112-la-visibilité-public-readonly)
    - [1.2. Instanciation d'une classe](#12-instanciation-dune-classe)
    - [1.3. Accès aux propriétés et aux méthodes d'une classe depuis l'intérieur de la classe](#13-accès-aux-propriétés-et-aux-méthodes-dune-classe-depuis-lintérieur-de-la-classe)
    - [1.4. Accès aux propriétés et aux méthodes publiques d'une classe depuis l'extérieur de la classe pour lecture ET modification](#14-accès-aux-propriétés-et-aux-méthodes-publiques-dune-classe-depuis-lextérieur-de-la-classe-pour-lecture-et-modification)
    - [1.5 Les constructeurs](#15-les-constructeurs)
    - [1.6 Les autres méthodes magiques](#16-les-autres-méthodes-magiques)
    - [1.7. Les getters et les setters](#17-les-getters-et-les-setters)
      - [1.7.2 Utilisation des getters pour récupérer des valeurs en dehors de la classe](#172-utilisation-des-getters-pour-récupérer-des-valeurs-en-dehors-de-la-classe)
      - [1.7.3 Utilisation des setters pour modifier des valeurs en dehors de la classe](#173-utilisation-des-setters-pour-modifier-des-valeurs-en-dehors-de-la-classe)
  - [2. L'héritage](#2-lhéritage)
    - [2.2. L'héritage multiple](#22-lhéritage-multiple)
    - [2.3. L'héritage et la visibilité](#23-lhéritage-et-la-visibilité)
    - [2.4. L'héritage et les visibilités des méthodes et des propriétés](#24-lhéritage-et-les-visibilités-des-méthodes-et-des-propriétés)
      - [2.4.2 Les méthodes et les propriétés privées](#242-les-méthodes-et-les-propriétés-privées)
      - [2.4.3 Les méthodes et les propriétés protégées](#243-les-méthodes-et-les-propriétés-protégées)
      - [2.4.4 Les méthodes et les propriétés publiques](#244-les-méthodes-et-les-propriétés-publiques)
      - [2.4.5 La visibilité des constantes de classe](#245-la-visibilité-des-constantes-de-classe)
    - [2.5. La surcharge](#25-la-surcharge)
    - [2.6. Les classes abstraites](#26-les-classes-abstraites)
    - [2.7. Les méthodes et les propriétés statiques](#27-les-méthodes-et-les-propriétés-statiques)
    - [2.8. Les classes et méthodes finales](#28-les-classes-et-méthodes-finales)
    - [2.9. Les interfaces](#29-les-interfaces)
    - [2.10. Les traits](#210-les-traits)
  - [3. Les espaces de noms](#3-les-espaces-de-noms)
  - [4. Auto-chargement des classes](#4-auto-chargement-des-classes)
  - [5. Les exceptions](#5-les-exceptions)
  - [6. Le mapping de tables SQL en classes PHP](#6-le-mapping-de-tables-sql-en-classes-php)
  - [7. Les Managers](#7-les-managers)

---


### 1. Les classes et les objets

**Définition** : Une **classe** est une structure qui permet de définir des objets. Une classe est un modèle qui décrit les caractéristiques communes d'un groupe d'objets.

Un **objet** est une **instance d'une classe**. Un objet est une entité qui possède des propriétés, des constantes et des méthodes.

---

[Menu de navigation](#menu-de-navigation)

---


#### 1.1. Déclaration d'une classe

La déclaration d'une classe en PHP commence par le mot clé `class`, suivi du nom de la classe et de son contenu entre accolades. Voici un exemple de déclaration de classe en PHP

```php
class MaClasse {
    // Propriétés
    private $proprietePrivee;
    public $proprietePublique = 'Valeur par défaut';
    
    // Constantes
    const MA_CONSTANTE = 'Valeur constante';

    // Méthodes
    public function methodePublique() {
        echo "Ceci est une méthode publique";
    }
    
    private function methodePrivee() {
        echo "Ceci est une méthode privée";
    }
}
```

Dans cet exemple, la classe s'appelle MaClasse. Elle a deux propriétés : une propriété privée `$proprietePrivee` et une propriété publique `$proprietePublique` initialisée à 'Valeur par défaut'. 

Elle a également une constante `MA_CONSTANTE` initialisée à 'Valeur constante'. Elle est accessible depuis l'extérieur de la classe en utilisant le nom de la classe suivi de l'opérateur de résolution de portée `::` et du nom de la constante. 

Par exemple, pour accéder à la constante `MA_CONSTANTE` depuis l'extérieur de la classe, on écrira :

```php
echo MaClasse::MA_CONSTANTE;
```

---

[Menu de navigation](#menu-de-navigation)

---


#### 1.1.2 La visibilité des propriétés et des méthodes

Elle a également deux méthodes : une méthode publique `methodePublique()` qui affiche une chaîne de caractères et une méthode privée `methodePrivee()` qui affiche également une chaîne de caractères.

Les propriétés d'une classe peuvent être de différents niveaux d'accessibilité : `public`, `protected` ou `private`. Les méthodes peuvent également être de différents niveaux d'accessibilité. 

- **public** 

Les propriétés et les méthodes publiques sont accessibles depuis l'extérieur de la classe, ainsi que dans la classe elle-même et ses sous-classes.

- **protected** 

Les propriétés et les méthodes protégées ne sont accessibles que dans la classe elle-même et ses sous-classes.

- **private** 

Les propriétés et les méthodes privées ne sont accessibles que dans la classe elle-même.


Nous verrons plus loin l'utilité de ces différents niveaux d'accessibilité.


---

[Menu de navigation](#menu-de-navigation)

---

#### 1.1.2 La visibilité public readonly

**PHP 8.1** introduit un nouveau modificateur d'accès `public readonly` qui permet de déclarer une propriété publique en lecture seule. 

Elle doit être typée et ne peut avoir de valeur par défaut. Elle ne peut être modifiée que dans le constructeur de la classe (ou une méthode de type setter)

```php
class MaClasse {
    // classe avec une propriété publique en lecture seule
    public readonly string $proprietePublique;
    
    // constructeur mettant à jour la propriété publique via un setter
    public function __construct(string $valeur) {
        $this->setProprietePublique($valeur);
    }

    // méthode de type setter pour modifier la propriété publique
    public function setProprietePublique(string $valeur) {
        $this->proprietePublique = $valeur;
    }
}
```

On peut donc accéder à la propriété publique en lecture seule :

```php
$objet = new MaClasse('Valeur');
echo $objet->proprietePublique;
```

Mais on ne peut pas la modifier directement :

```php
// génère une erreur
$objet->proprietePublique = 'Nouvelle valeur'; 
```

On peut par contre la modifier via un setter :

```php
$objet->setProprietePublique('Nouvelle valeur');
```

Cette nouvelle fonctionnalité permet de garantir que la propriété ne sera pas modifiée après son initialisation (sauf via un `setter`) et permet également d'éviter la création de méthodes de type `getter` pour les propriétés en lecture seule.

---

[Menu de navigation](#menu-de-navigation)

---

#### 1.2. Instanciation d'une classe

Il est important de noter que la déclaration d'une classe en PHP ne crée pas directement un objet. Une classe est simplement une structure qui décrit les propriétés et les méthodes d'un objet. Pour **créer un objet** à partir d'une classe, vous devez **instancier** la classe en utilisant le mot clé `new`, comme ceci :

```php
$objet = new MaClasse();
```

Dans cet exemple, nous avons instancié la classe MaClasse qui est un objet stocké en mémoire, la variable $objet est une étiquette pointant vers celui-ci.


---

[Menu de navigation](#menu-de-navigation)

---


#### 1.3. Accès aux propriétés et aux méthodes d'une classe depuis l'intérieur de la classe

Lorsque vous êtes à l'intérieur d'une classe, vous pouvez accéder à ses propriétés et à ses méthodes en utilisant `self` et l'opérateur de résolution de portée `::`, ou le `$this` **si la classe est instanciée** :

```php
class MaClasse {
    // Propriétés
    private $proprietePrivee;
    public $proprietePublique = 'Valeur par défaut';
    
    // Constantes
    const MA_CONSTANTE = 'Valeur constante';

    // Méthodes
    public function methodePublique() {
        echo "Ceci est une méthode publique";
    }
    
    private function methodePrivee() {
        echo "Ceci est une méthode privée";
    }
    
    public function methodePublique2() {
        $this->proprietePrivee=5;
        $this->proprietePublique="Nouvelle valeur";
        $sortie = $this->methodePublique();
        $sortie.=" ".self::MA_CONSTANTE;
        return $sortie;
    }
}
```

---

[Menu de navigation](#menu-de-navigation)

---


#### 1.4. Accès aux propriétés et aux méthodes publiques d'une classe depuis l'extérieur de la classe pour lecture ET modification

Lorsque vous êtes à l'extérieur d'une classe, vous pouvez accéder à ses propriétés et à ses méthodes publiques en utilisant l'opérateur de flèche `->`, comme ceci :

```php
echo $objet->proprietePublique;
echo $objet->methodePublique();
```

**Attention**, une propriété publique peut être modifiée depuis l'extérieur de la classe, ce qui n'est pas le cas d'une propriété privée ou protégée.

```php
$objet->proprietePublique = 'Nouvelle valeur';
```

Nous pouvons même créer une propriété publique à la volée, même si elle n'existe pas dans la classe :

```php
$objet->proprietePublique2 = 'Valeur';
```

**Ceci est une mauvaise pratique**, car cela peut créer des erreurs dans le code. Il est parfois pratique de pouvoir le faire, mais il est préférable de déclarer toutes les propriétés dans la classe et empêcher l'ajout de propriétés à la volée (nous verrons cela plus loin dans le cours).

---

[Menu de navigation](#menu-de-navigation)

---


#### 1.5 Les constructeurs

Le constructeur est une méthode spéciale (méthode magique) qui est appelée automatiquement lorsqu'un objet est instancié. Le constructeur est généralement utilisé pour initialiser les propriétés d'un objet.

Le constructeur d'une classe est défini en créant une méthode avec le nom `__construct()` :

```php
class MaClasse {
    public function __construct() {
        // Code du constructeur
    }
}
```

C'est au constructeur que l'on passe les paramètres lors de l'instanciation de la classe :

```php
$objet = new MaClasse($param1, $param2);
```

Voici un exemple de constructeur :

```php
class MaClasse {
    // Propriétés
    private $proprietePrivee;
    public $proprietePublique = 'Valeur par défaut';
    
    ###

    // Méthodes
    public function __construct($param1, $param2) {
        $this->proprietePrivee=$param1;
        $this->proprietePublique=$param2;
    }
    
    ###
    
    }
}
```

Nous utiliserons plus souvent les getters et les setters pour accéder aux propriétés d'une classe.

---

[Menu de navigation](#menu-de-navigation)

---


#### 1.6 Les autres méthodes magiques

PHP propose d'autres méthodes magiques qui permettent de gérer les objets. Vous pouvez les retrouver ici :

https://www.php.net/manual/fr/language.oop5.magic.php

Nous les verrons au fur et à mesure de nos besoins.

---

[Menu de navigation](#menu-de-navigation)

---

#### 1.7. Les getters et les setters

Les getters et les setters sont utilisés pour accéder aux propriétés d'une classe.

Un `getter` est une méthode qui permet d'accéder à une propriété privée ou protégée.

Un `setter` est une méthode qui permet de modifier une propriété privée ou protégée.

Les bonnes pratiques de programmation orientée objet recommandent de rendre les propriétés privées (ou protégées) et d'utiliser des getters et des setters pour accéder à ces propriétés.

Voici un exemple de getters et de setters :

```php
class MaClasse {
    // Propriétés
    private $proprietePrivee;
    protected $proprieteProtegee;
    public $proprietePublique = 'Valeur par défaut';
    
    ###

    // Méthodes
    public function __construct($param1, $param2, $param3) {
        // utilisation des setters pour modifier les valeurs des propriétés,
        // ce qui permet de vérifier les valeurs
        $this->setProprietePrivee($param1);
        $this->setProprieteProtegee($param2);
        // inutile d'utiliser un setter pour modifier la propriété publique
        $this->proprietePublique=$param3;
    }
    
    // Getters qui récupèrent des valeurs
    
    // Récupère la valeur de la propriété privée de type string ou null
    public function getProprietePrivee():?string {
        return $this->proprietePrivee;
    }
    
    // Récupère la valeur de la propriété protégée de type string ou null
    public function getProprieteProtegee():?string {
        return $this->proprieteProtegee;
    }
    
    // Setters qui modifient des valeurs
    
    // Modifie la valeur de la propriété privée uniquement si elle est de type string
    public function setProprietePrivee(string $valeur) {
        $this->proprietePrivee=$valeur;
    }
    
    // Modifie la valeur de la propriété protégée uniquement si elle est de type string 
    public function setProprieteProtegee(string $valeur) {
        $this->proprieteProtegee=$valeur;
    }
    
    ###
}
```

---

[Menu de navigation](#menu-de-navigation)

---


#### 1.7.2 Utilisation des getters pour récupérer des valeurs en dehors de la classe

```php
// Création d'un objet de la classe MaClasse
$monObjet = new MaClasse('valeur1', 'valeur2', 'valeur3');
// affichage de la valeur de la propriété publique
echo $monObjet->proprietePublique;
// affichage des valeurs de la propriété privée et de la propriété protégée
echo $monObjet->getProprietePrivee();
echo $monObjet->getProprieteProtegee();
```

---

[Menu de navigation](#menu-de-navigation)

---


#### 1.7.3 Utilisation des setters pour modifier des valeurs en dehors de la classe

```php
// Création d'un objet de la classe MaClasse
$monObjet = new MaClasse('valeur1', 'valeur2', 'valeur3');
// modification de la valeur de la propriété publique
$monObjet->proprietePublique = 'Nouvelle valeur';
// modification des valeurs de la propriété privée et de la propriété protégée
$monObjet->setProprietePrivee('Nouvelle valeur');
$monObjet->setProprieteProtegee('Nouvelle valeur');
```

---

[Menu de navigation](#menu-de-navigation)

---


### 2. L'héritage

L'héritage est un concept de programmation orientée objet qui permet à une classe d'hériter des propriétés et des méthodes d'une autre classe.

Une classe qui hérite d'une autre classe est appelée **classe enfant** ou **classe dérivée**. La classe dont la classe enfant hérite est appelée **classe parente** ou **classe de base**.

Pour hériter d'une classe, utilisez le mot clé `extends` :

```php
class MaClasseEnfant extends MaClasse {
    // Code de la classe enfant
}
```


---

[Menu de navigation](#menu-de-navigation)

---

#### 2.2. L'héritage multiple

PHP ne supporte pas l'héritage multiple, c'est-à-dire qu'une classe ne peut hériter que d'une seule classe parente. Cependant, il est possible d'implémenter plusieurs interfaces (nous le verrons plus loin).

---

[Menu de navigation](#menu-de-navigation)

---

#### 2.3. L'héritage et la visibilité

Lorsque vous héritez d'une classe, vous héritez de toutes ses propriétés et de toutes ses méthodes, mais pas de sa visibilité. Les propriétés et les méthodes privées ne peuvent pas être héritées, mais les propriétés et les méthodes protégées ou publiques peuvent l'être.

---

[Menu de navigation](#menu-de-navigation)

---

#### 2.4. L'héritage et les visibilités des méthodes et des propriétés

Lorsque vous héritez d'une classe, vous pouvez modifier la visibilité des méthodes et des propriétés héritées. Cependant, vous ne pouvez pas rendre une propriété privée ou une méthode protégée publique.

---

[Menu de navigation](#menu-de-navigation)

---

##### 2.4.2 Les méthodes et les propriétés privées

Les méthodes et les propriétés privées ne peuvent pas être héritées, donc elles ne peuvent pas être modifiées depuis la classe enfant.

```php
class MaClasseEnfant extends MaClasse {
    // Code de la classe enfant
    // Impossible de modifier les méthodes et les propriétés privées,
    // ceci génère une erreur,
    // ou une nouvelle propriété publique est créée (faille de sécurité que l'on arrivera à corriger)
    $this->proprietePrivee = 'Nouvelle valeur';
}
```

---

[Menu de navigation](#menu-de-navigation)

---

##### 2.4.3 Les méthodes et les propriétés protégées

Les méthodes et les propriétés protégées peuvent être héritées et modifiées depuis la classe enfant.
    
```php
class MaClasseEnfant extends MaClasse {
    // Code de la classe enfant
    // Les méthodes et les propriétés protégées peuvent être modifiées
    $this->proprieteProtegee = 'Nouvelle valeur';
}
```

---

[Menu de navigation](#menu-de-navigation)

---

##### 2.4.4 Les méthodes et les propriétés publiques

Les méthodes et les propriétés publiques peuvent être héritées et modifiées depuis la classe enfant.

```php
class MaClasseEnfant extends MaClasse {
    // Code de la classe enfant
    // Les méthodes et les propriétés publiques peuvent être modifiées
    $this->proprietePublique = 'Nouvelle valeur';
}
```

---

[Menu de navigation](#menu-de-navigation)

---

##### 2.4.5 La visibilité des constantes de classe

Il est possible de définir des constantes par classes qui restent identiques et non modifiables. La visibilité par défaut des constantes de classe est public.

À partir de **PHP 7.1.0**, les modificateurs de visibilité sont autorisés sur les constantes de classe.

Les constantes de classes peuvent être redéfinies par une classe enfant. À partir de PHP **8.1.0**, les constantes de classes ne peuvent pas être redéfinies par une classe enfant si elle a été défini comme `finale`.

```php
class MaClasse {
    const MA_CONSTANTE = 'Valeur constante'; // publique par défaut
    public const MA_CONSTANTE_PUBLIQUE = 'Valeur constante publique';
    protected const MA_CONSTANTE_PROTEGEE = 'Valeur constante protégée';
    private const MA_CONSTANTE_PRIVEE = 'Valeur constante privée';
    // ne peut pas être redéfinie par une classe enfant
    final const MA_CONSTANTE_FINALE = 'Valeur constante finale';
}
// fonctionnent
echo MaClasse::MA_CONSTANTE;
echo MaClasse::MA_CONSTANTE_PUBLIQUE;
echo MaClasse::MA_CONSTANTE_FINALE;
// génèrent une erreur
echo MaClasse::MA_CONSTANTE_PROTEGEE;
echo MaClasse::MA_CONSTANTE_PRIVEE;
```

A partir de **PHP 8.3**, les constantes de classes peuvent être typées:


```php
class MaClasse {
    public const string|float MA_CONSTANTE = 'Valeur constante';
}
class MaClasseEnfant extends MaClasse {
    // lors de la redéfinition, le(s) type(s) doi.t.vent être le(s) même(s)
    public const string|float MA_CONSTANTE = 25.36;
}

echo MaClasse::MA_CONSTANTE;
echo MaClasseEnfant::MA_CONSTANTE;


```

---

[Menu de navigation](#menu-de-navigation)

---


#### 2.5. La surcharge

La surcharge est un concept de programmation orientée objet qui permet à une classe enfant de redéfinir une méthode d'une classe parente. La surcharge est utilisée pour remplacer une méthode héritée par une nouvelle méthode.

La méthode redéfinie doit avoir le même nom, le même nombre de paramètres et la même visibilité. La surcharge peut également être utilisée pour ajouter des paramètres à une méthode héritée.

```php
class MaClasseEnfant extends MaClasseParent {
    // Code de la classe enfant qui surcharge la méthode de la classe parente
    public function methodePublique($param1, $param2) {
        // Code de la méthode redéfinie
    }
}
```

Pour récupérer la méthode de la classe parente, utilisez le mot clé `parent` :

```php
class MaClasseEnfant extends MaClasseParent {
    // Code de la classe enfant qui surcharge la méthode de la classe parente
    public function methodePublique($param1, $param2) {
        // Code de la méthode redéfinie
        parent::methodePublique($param1, $param2);
    }
}
```

---

[Menu de navigation](#menu-de-navigation)

---

#### 2.6. Les classes abstraites

Une classe abstraite est une classe qui ne peut pas être instanciée. Elle est utilisée pour définir des méthodes et des propriétés qui seront héritées par des classes enfants.

Pour définir une classe abstraite, utilisez le mot clé `abstract` :

```php
abstract class MaClasseAbstraite {
    // Code de la classe abstraite
}
```

Une classe abstraite peut contenir des méthodes abstraites et des méthodes non abstraites.

Une méthode abstraite est une méthode qui n'a pas de corps. Elle est définie avec le mot clé `abstract` et ne peut pas être définie avec les mots clés `private`, `protected` ou `final` (final sera abordé plus loin).

```php
abstract class MaClasseAbstraite {
    // Méthode abstraite
    abstract public function methodeAbstraite();
    
    // Méthode non abstraite
    public function methodeNonAbstraite() {
        // Code de la méthode non abstraite
    }
}
```

Une classe abstraite peut être héritée par une classe enfant. La classe enfant doit définir toutes les méthodes abstraites de la classe parente.

```php
class MaClasseEnfant extends MaClasseAbstraite {
    // Code de la classe enfant
    public function methodeAbstraite() {
        // Code de la méthode abstraite
    }
}
```

---

[Menu de navigation](#menu-de-navigation)

---

#### 2.7. Les méthodes et les propriétés statiques

Une méthode ou une propriété statique est une méthode ou une propriété qui peut être utilisée sans avoir besoin d'instancier la classe.

Pour définir une méthode ou une propriété statique, utilisez le mot clé `static` :

```php
class MaClasse {
    // Propriété statique
    public static $proprieteStatique = 'Valeur par défaut';
    
    // Méthode statique
    public static function methodeStatique() {
        // Code de la méthode statique
    }
}
```

Pour accéder à une méthode ou une propriété statique, utilisez le nom de la classe suivi de l'opérateur `::` :

```php
// Accès à une propriété statique
echo MaClasse::$proprieteStatique;

// Accès à une méthode statique
echo MaClasse::methodeStatique();
```

---

[Menu de navigation](#menu-de-navigation)

---

#### 2.8. Les classes et méthodes finales

Une classe finale est une classe qui ne peut pas être héritée. Elle est utilisée pour empêcher la création de classes enfants.

Pour définir une classe finale, utilisez le mot clé `final` :

```php
final class MaClasseFinale {
    // Code de la classe finale
}
```

Une méthode finale est une méthode qui ne peut pas être redéfinie par une classe enfant. Elle est utilisée pour empêcher la surcharge de méthodes.

```php
class MaClasse {
    // Méthode finale
    final public function methodeFinale() {
        // Code de la méthode finale
    }
}
```


---

[Menu de navigation](#menu-de-navigation)

---

#### 2.9. Les interfaces

Une interface est une classe abstraite qui ne contient que des méthodes abstraites. Elle est utilisée pour définir des méthodes qui seront implémentées par des classes enfants.

Pour définir une interface, utilisez le mot clé `interface` :

```php
interface MaInterface {
    // Code de l'interface
}
```

Une interface peut contenir que des méthodes abstraites. Une méthode abstraite est une méthode qui n'a pas de corps. Elle est définie avec le mot clé `abstract` et ne peut pas être définie avec les mots clés `private`, `protected` ou `final` (final sera abordé plus loin).

```php  
interface MaInterface {
    // Méthode abstraite
    abstract public function methodeAbstraite();
    
}
```

Une interface peut être implémentée par une classe. La classe doit définir toutes les méthodes abstraites de l'interface.

```php
class MaClasse implements MaInterface {
    // Code de la classe
    public function methodeAbstraite() {
        // Code de la méthode abstraite
    }
}
```

Une classe peut implémenter plusieurs interfaces. Dans ce cas, les interfaces sont séparées par une virgule.

```php
class MaClasse implements MaInterface1, MaInterface2 {
    // Code de la classe
    public function methodeAbstraite() {
        // Code de la méthode abstraite
    }
}
```

Une interface peut hériter d'une ou plusieurs interfaces. Dans ce cas, les interfaces sont séparées par une virgule.

```php
interface MaInterfaceEnfant extends MaInterfaceParent1, MaInterfaceParent2 {
    // Code de l'interface enfant
}
```

---

[Menu de navigation](#menu-de-navigation)

---

#### 2.10. Les traits

Un trait est un ensemble de méthodes qui peut être utilisé par plusieurs classes. Il est utilisé pour définir des méthodes qui seront utilisées par plusieurs classes.

Pour définir un trait, utilisez le mot clé `trait` :

```php
trait MonTrait {
    // Code du trait
}
```

Un trait peut contenir des méthodes abstraites et des méthodes non abstraites. Une méthode abstraite est une méthode qui n'a pas de corps. Elle est définie avec le mot clé `abstract` et ne peut pas être définie avec les mots clés `private`, `protected` ou `final` (final sera abordé plus loin).

```php
trait MonTrait {
    // Méthode abstraite
    abstract public function methodeAbstraite();
    
    // Méthode non abstraite
    public function methodeNonAbstraite() {
        // Code de la méthode non abstraite
    }
}
```

Un trait peut être utilisé par une classe. Pour utiliser un trait, utilisez le mot clé `use` :

```php
class MaClasse {
    // Utilisation du trait
    use MonTrait;
}
```

Un trait peut être utilisé par plusieurs classes. Un trait peut également utiliser un autre trait.

```php

trait MonTrait1 {
    // Code du trait 1
}

trait MonTrait2 {
    // Code du trait 2
}

trait MonTrait3 {
    // Code du trait 3
    use MonTrait1, MonTrait2;
}

class MaClasse1 {
    // Utilisation du trait 1
    use MonTrait1;
}

class MaClasse2 {
    // Utilisation du trait 2
    use MonTrait2;
}

class MaClasse3 {
    // Utilisation du trait 3
    use MonTrait3;
}
```

---

[Menu de navigation](#menu-de-navigation)

---

### 3. Les namespaces

Un namespace est un moyen d'encapsuler des éléments. Il est utilisé pour éviter les conflits de noms entre les classes, les fonctions et les constantes.

Pour définir un namespace, utilisez le mot clé `namespace` :

```php
namespace MonNamespace;
```

Un namespace peut contenir des classes, des fonctions et des constantes.

```php
namespace MonNamespace;

class MaClasse {
    // Code de la classe
}

function maFonction() {
    // Code de la fonction
}

const MA_CONSTANTE = 'Valeur de la constante';
```

Un namespace peut être utilisé par une classe, une fonction ou une constante. Pour utiliser un namespace, utilisez le mot clé `use` :

```php
namespace MonNamespace;

// Utilisation du namespace
use MonNamespace;

class MaClasse {
    // Utilisation du namespace
    use MonNamespace;
}

function maFonction() {
    // Utilisation du namespace
    use MonNamespace;
}

// Utilisation du namespace

use MonNamespace;

echo MA_CONSTANTE;
```

Un namespace peut être utilisé par plusieurs classes, fonctions ou constantes.

```php
namespace MonNamespace;

// Utilisation du namespace

use MonNamespace;

class MaClasse1 {
    // Utilisation du namespace
    use MonNamespace;
}

class MaClasse2 {
    // Utilisation du namespace
    use MonNamespace;
}

function maFonction1() {
    // Utilisation du namespace
    use MonNamespace;
}

function maFonction2() {
    // Utilisation du namespace
    use MonNamespace;
}

echo MA_CONSTANTE;
```


---

[Menu de navigation](#menu-de-navigation)

---

### 4. Auto-chargement des classes

L'auto-chargement des classes est utilisé pour charger automatiquement les classes. Il est utilisé pour éviter d'avoir à inclure manuellement les fichiers de classe.

Pour définir une fonction d'auto-chargement, utilisez la fonction `spl_autoload_register()` :

```php
spl_autoload_register(
    function($className){
        require "../model/".$className.".php";
    }
);
```

La fonction d'auto-chargement est appelée chaque fois qu'une classe est instanciée. Elle reçoit le nom de la classe en paramètre. On peut utiliser le namespace de la classe pour déterminer le chemin du fichier de la classe.

Il faut vérifier si le fichier existe avant de l'inclure et bien sûr, il faut inclure le fichier avant d'instancier la classe.

Il faut mettre nos modèles dans un dossier `model` et nos contrôleurs dans un dossier `controller` et dans le fichier `index.php` du contrôleur frontal `public`, on peut y inclure le fichier `autoload.php` et instancier nos classes.

```php
spl_autoload_register(function ($className) {
    // par exemple si on est dans le dossier public
    $file = '../model/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Instanciation de la classe avec son namespace
$maClasse = new MonNamespace\MaClasse();

// ou on peut utiliser le namespace dans le fichier
use MonNamespace\MaClasse;
$className2 = new MaClasse();

// si on a 2 classes avec le même nom dans 2 namespaces différents, on peut éviter les conflits en utilisant le mot clé as
use MonNamespace1\MaClasse as MaClasse1;
use MonNamespace2\MaClasse as MaClasse2;

$className1 = new MaClasse1();
$className2 = new MaClasse2();

```

La fonction d'auto-chargement peut être définie dans un fichier séparé. Dans ce cas, le fichier doit être inclus avant d'instancier une classe.

```php
// Inclusion du fichier contenant la fonction d'auto-chargement
require_once 'autoload.php';

// Instanciation de la classe
$maClasse = new MaClasse();
```

---

[Menu de navigation](#menu-de-navigation)

---

### 5. Les exceptions

Une exception est une erreur qui se produit lors de l'exécution d'un script. Elle est utilisée pour gérer les erreurs et les exceptions.

Pour définir une exception, utilisez le mot clé `throw` :

```php

throw new Exception('Message de l\'exception');
```

Une exception peut être attrapée par un bloc `try...catch`. Un bloc `try...catch` est utilisé pour attraper une exception et la gérer.

```php
try {
    // Code du bloc try
} catch (Exception $e) {
    // Code du bloc catch
}
```

Pour gérer l'exception, on peut utiliser la méthode `getMessage()` de l'objet exception :

```php
try {
    throw new Exception('Message de l\'exception');
} catch (Exception $e) {
    echo $e->getMessage();
}
```

Exemple d'utilisation des exceptions personnalisées :

```php
<?php

class DivisionParZeroException extends Exception
{
    public function __construct($message = "Division par zéro impossible")
    {
        parent::__construct($message);
    }
}

class Division
{
    public function diviser($a, $b)
    {
        if ($b == 0) {
            throw new DivisionParZeroException();
        }
        return $a / $b;
    }
}

$division = new Division();

try {
    echo $division->diviser(10, 0);
} catch (DivisionParZeroException $e) {
    echo $e->getMessage();
}
```


---

[Menu de navigation](#menu-de-navigation)

---

### 6. Le mapping de tables SQL en classes PHP

Le mapping de tables SQL en classes PHP est utilisé pour mapper les tables SQL en classes PHP. Cela permet de manipuler les données de la base de données en utilisant des objets.

A continuer...

---

[Menu de navigation](#menu-de-navigation)

---

### 7. Les Managers

Un manager est une classe qui permet de manipuler les données d'une table SQL. Il permet de faire le lien entre les objets et la base de données.

A continuer...


---

[Menu de navigation](#menu-de-navigation)

---
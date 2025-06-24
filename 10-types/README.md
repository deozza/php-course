# Les types

## Sommaire

- [Définition](#définition)
- [Les principaux types en PHP](#les-principaux-types-en-php)
  - [Int](#int)
  - [Float](#float)
  - [String](#string)
  - [Array](#array)
  - [Boolean](#boolean)
- [Équivalences de type](#équivalences-de-type)
- [Cast de type](#cast-de-type)

## Définition

Le type (ou typage), en général d'une variable, permet d'indiquer quelle catégorie de données est en train d'être manipulée. Certaines opérations ne peuvent pas se faire sur certains types.

PHP étant un langage abstrait et simple à prendre en main, le typage n'est pas statique. Il est dynamique. C'est-à-dire qu'une même variable peut voir son type changer. Une variable qui contient un nombre peut voir sa valeur être écrasée par une chaîne de caractères.

De plus, lors de l'assignation d'une valeur à une variable, cette variable est automatiquement typée par le langage.

## Les principaux types en PHP

### Int

*Nombre entier*

```php
<?php

/**
* @var int
*/
$number = 10;

?>
```

Il est possible de faire des opérations mathématiques (addition, soustraction, ...) et des conditions de comparaison (supérieur, inférieur ou égal, ...) sur ce type.

### Float

*Nombre à virgule*

```php
<?php

/**
* @var float
*/
$number = 10.0;

?>
```

Il est possible de faire des opérations mathématiques (addition, soustraction, ...) et des conditions de comparaison (supérieur, inférieur ou égal, ...) sur ce type.


### String

*Chaîne de caractère*

```php
<?php

/**
* @var string
*/
$message = 'Hello world';

?>
```

On peut créer une chaîne de caratères avec `''` ou `""`.

Lorsqu'une chaîne de caractères est créée avec `''`, tout le contenu sera considéré comme du texte, simple.

Lorsqu'on utilise `""`, certains caractères peuvent être interprétés pour rajouter de la fonctionnalité.

Par exemple, on peut inclure une variable pour afficher sa valeur dans un message :

```php
<?php

$name = 'John';
$message = "Hello $name";

echo $message;

?>
```

On peut également rajouter des sauts de ligne :

```php
<?php

$message = "This is the first line.\nThis is the second line.\n\nThere is an empty line above";

echo $message;

?>
```

C'est également un moyen d'inclure un apostrophe dans un message :

```php
<?php

$message = "Je me présente, je m'appelle Henry";
echo $message;

?>
```

### Array

*Tableau associatif clef-valeur*

```php
<?php

/**
* @var array
*/
$values = [
  'a' => 'orange',
  'b' => 'banana',
  'c' => 'apple'
];

?>
```
À gauche du `=>` se trouve la `clef`. Elle est customisable lors de la création du tableau et peut être un `int` ou un `string`. La clef est forcément unique dans un tableau.

À droite du `=>` se trouve la `valeur`. N'importe quel type de valeur peut s'y situer et les doublons sont acceptés.

Il n'est pas obligatoire de préciser la `clef` lors de la création d'un tableau. PHP va donc automatiquement rajouter des `clefs` de type int, en partant de 0 et qui s'incrémentent de 1.


```php
<?php

/**
* @var array
*/
$values = [
  'orange',
  'banana',
  'apple'
];

/*

[
  0 => 'orange',
  1 => 'banana',
  2 => 'apple'
]

*/

?>
```

Pour rajouter un élément dans un tableau existant, faire :

```php
<?php

/**
* @var array
*/
$values = [
  'orange',
  'banana',
  'apple'
];

$values[] = 'lemon';


?>
```

Pour accéder à un élément dans un tableau, utiliser sa clef :

```php
<?php

/**
* @var array
*/
$values = [
  'orange',
  'banana',
  'apple'
];

echo $values[1]; // banana

?>
```

### Boolean

*Une valeur qui est soit `true` soit `false`*

```php
<?php


/**
* @var boolean
*/
$toggle = true;

/**
* @var boolean
*/
$isPositive = -15 > 0;

?>
```

## Équivalences de type

PHP est un langage typé dynamiquement et qui n'est pas typé fortement. Beaucoup d'équivalences de type existent :

`0 == 0.0 == false == [] == '0' == null`

`1 == true`

Pour éviter des erreurs fonctionnelles, lorsqu'on veut appliquer une condition sur une égalité, on peut utiliser l'opérateur d'égalité de valeur et de type :

```php
<?php

echo 0 === false; // false
echo 0 == false; // true
echo 0 === '0'; // false
echo 0 == '0'; // true

?>
```

## Cast de type

Prenons l'exemple où les données qu'on manipule sont des chiffres, mais typées `string`. On ne peut pas faire d'opérations mathématiques directement. Il fait `caster` ces variables en int :

```php
<?php

$numberLeft = '10';
$numberRight = '2';

$sum = (int)$numberLeft + (int)$numberRight;

?>
```

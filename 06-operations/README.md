# Opérations

## Sommaire

- [Opérations mathématiques](#opérations-mathématiques)
  - [Additions](#additions)
  - [Soustractions](#soustractions)
  - [Multiplications](#multiplications)
  - [Divisions](#divisions)
  - [Modulo](#modulo)
- [Opérations sur chaînes de caractères](#opérations-sur-chaînes-de-caractères)
  - [Concaténation](#concaténation)

## Opérations mathématiques

### Additions

```php
<?php

echo 2+3;

?>
```

Additionner 2 variables :

```php
<?php

$numberLeft = 2;
$numberRight = 3;

$sum = $numberLeft + $numberRight;

echo $sum;

?>
```

Rajouter une valeur à une variable :

```php
<?php

$counter = 0;

$counter += 1;

echo $counter;

?>
```

Raccourci pour incrémenter (faire +1) :

```php
<?php

$counter = 0;

$counter++;

echo $counter;

?>
```

### Soustractions

```php
<?php

echo 3-2;

?>
```

Soustraire 2 variables :

```php
<?php

$numberLeft = 3;
$numberRight = 2;

$sub = $numberLeft + $numberRight;

echo $sub;

?>
```

Soustraire une valeur à une variable :

```php
<?php

$countdown = 10;

$countdown -= 1;

echo $countdown;

?>
```

Raccourci pour décrémenter (faire -1) :

```php
<?php

$countdown = 10;

$countdown++;

echo $countdown;

?>
```

### Multiplications

```php
<?php

echo 3*2;

?>
```

Diviser 2 variables :

```php
<?php

$numberLeft = 3;
$numberRight = 2;

$mult = $numberLeft * $numberRight;

echo $mult;

?>
```

Multiplier une variable par une valeur :

```php
<?php

$number = 10;

$number *= 2;

echo $number;

?>
```

### Divisions


```php
<?php

echo 3/2;

?>
```

Diviser 2 variables :

```php
<?php

$numberLeft = 3;
$numberRight = 2;

$div = $numberLeft / $numberRight;

echo $div;

?>
```

Diviser une variable par une valeur :

```php
<?php

$number = 10;

$number /= 2;

echo $number;

?>
```


### Modulo

Le modulo est un opérateur permettant de connaître le reste d'une division euclidienne. Exemple : 5 divisé par 2, il reste 1. Donc 5 modulo 2 = 1.

```php
<?php

echo 3%2;

?>
```

Connaître le modulo de 2 variables :

```php
<?php

$numberLeft = 3;
$numberRight = 2;

$mod = $numberLeft % $numberRight;

echo $mod;

?>
```

## Opérations sur chaînes de caractères

### Concaténation

Le fait de *coller* deux chaînes de caractères ensemble est ce que l'on appelle une concaténation.

```php
<?php

echo 'Hello' . ' ' . 'world !';

?>
```

Concaténer 2 variables ensemble :

```php
<?php

$leftString = 'Hello ';
$rightString = 'world !';

$fullSentence = $leftString . $rightString;

echo $fullSentence;

?>
```

Raccourci pour éditer une variable en la concaténant avec une autre chaîne de caractère :

```php
<?php

$fullSentence = 'Hello ';
$name = 'Alice !';

$fullSentence .= $name;

echo $fullSentence;

?>

```

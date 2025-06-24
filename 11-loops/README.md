# Les boucles

## Sommaire

- [Définition](#définition)
- [For](#for)
- [While](#while)
- [Do while](#do-while)
- [Foreach](#foreach)

## Définition

Une boucle permet de *boucler*, exécuter une liste d'instructions, tant qu'une condition est respectée.

## For

*Pour un compteur démarrant à x, qui s'incrémente de y à chaque itérations, jusqu'à atteindre z*

```php
<?php

for($i = 0; $i < 20; $++) {
  echo $i;
}

for($i = 20; $i >= 0; $i--) (
  echo $i;
)

?>
```

À utiliser lorsqu'on connaît la limite de la boucle.

## While

*Tant que la condition est respectée, exécuter les instructions*

```php
<?php

$i = 0;

while($i < 20) {
  echo $i;
  $i++;
}

?>
```

À utiliser lorsque la fin de la boucle dépend du traitement des instructions.

## Do while

*Exécuter les instructions au moins une fois, puis tant que la condition est respectée*

```php
<?php

$i = 20;

do{
  echo $i;
} while($i < 20);

?>
```

## Foreach

*Pour chaque élément dans un ensemble, exécuter les instructions*

```php
<?php

$values = [
  'orange',
  'apple',
  'banana'
];

foreach($values as $element) {
  echo $element;
}

?>
```

Pratique pour parcourir un tableau.

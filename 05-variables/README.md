# Les variables

## Sommaire

- [Définition](#définition)
- [Création d'une variable](#création-dune-variable)
  - [Bonnes pratiques](#bonnes-pratiques)
- [Appel d'une variable](#appel-dune-variable)
- [Destruction d'une variable](#destruction-dune-variable)

## Définition

Chaque donnée d'une application est stockée dans la mémoire RAM de la machine, à un emplacement (adresse) précis.

Plutôt que de manipuler ces adresses mémoire à la main pour créer, utiliser, modifier ou supprimer ces données, on utilise une variable.

Une variable est une association `clef - valeur`, qui permet d'abstraire cette manipulation complexe d'adresse mémoire. On crée une variable avec un nom clair, on lui assigne une valeur, le langage se charge des manipulations complexes.

PHP est un langage impératif : ses variables sont donc mutables. On peut modifier leurs valeurs à tout moment, tant qu'on y a accès.

## Création d'une variable

Une variable se compose d'un `$` collé à son nom. Le nom doit commencer par une lettre.

```php
<?php

$message = 'Hello world';
$answer = 42;

?>
```

Les variables en PHP sont sensibles à la casse. `$message` et `$Message` sont 2 variables différentes.

On ne peut pas utiliser des mots réservés du langage comme nom d'une variable :

```php
<?php

$echo = 'nom invalide';
$function = 'nom invalide';

?>
```

On peut créer une variable sans lui assigner de valeur :

```php
<?php

$foo;

?>

```

Ce cas de figure n'est pas commun.

### Bonnes pratiques

- doit avoir un nom clair, qui indique sur son rôle, comment elle va être utilisée et les données qu'elle contient
  - peu importe si le nom est long
- commence avec une minuscule
- les variables doivent avoir une structure cohérente dans le programme
  - toutes en `camelCase` ou toutes en `snake_case`
  - toutes dans une même langue (anglais de préférence)

## Appel d'une variable

Pour appeler une variable, pour pouvoir l'utiliser ou la modifier, il suffit d'utiliser son nom :

```php
<?php

$message = 'Hello world';
$answer = 42;

echo $message;

$message = 'Nouveau message';

echo $message;

?>
```

## Destruction d'une variable

PHP est un langage qui utilise le `garbage collector`. Un système autonome qui supprime les variables une fois qu'elles sont jugées non utilisées. Il n'est donc pas nécessaire de supprimer les variables manuellement.

Mais si le besoin l'exige, on peut utiliser la fonction `unset()` :

```php
<?php

$message = 'Hello world';

echo $message;

unset($message);

echo $message;

?>
```

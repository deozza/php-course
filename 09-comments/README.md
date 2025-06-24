# Commentaires

## Sommaire

- [Définition](#définition)
- [Comment rajouter un commentaire](#comment-rajouter-un-commentaire)
  - [Les bonnes pratiques](#les-bonnes-pratiques)
- [Les annotations](#les-annotations)

## Définition

Un commentaire du code qui est ignoré par le programme et n'est pas exécuté. Il sert à donner des indications, des informations, sur le code pour soi-même ou d'autres développeur.ses.

## Comment rajouter un commentaire

Si on veut écrire un commentaire sur une ligne, on peut utiliser `//` ou `#` :

```php
<?php

// Ceci est un commentaire

# Ceci aussi

?>
```

Si on veut écrire un commentaire sur plusieurs lignes, on utilisera `/* */` :

```php
<?php

/*
Tout
ce texte
est
un commentaire
*/

?>
```

### Les bonnes pratiques

- il n'est pas nécessaire de commenter chaque ligne de son programme
- les commentaires, la plupart du temps, troublent la lecture et la compréhension du code
  - déconcentration, commentaire pas forcément à jour avec le code, explications pas claires
- on considère un commentaire comme étant utile lorsqu'il explique un choix technique qui ne peut pas s'expliquer uniquement par du code

## Les annotations

Une annotation est un commentaire particulier, pouvant être interprété par certaines librairies du langage pour rajouter ou configurer des fonctionnalités.

Les annotations peuvent également être utilisées par un IDE pour rajouter de la documentation, notamment sur le typage des variables et des fonctions.

Elles se notent avec `/** */`.

Exemples :

```php
<?php


/**
* @var int
*/
$number = 10;

?>
```

Pour en savoir plus sur les annotations, on peut aller regarder [PHPDoc](https://docs.phpdoc.org/guide/getting-started/what-is-a-docblock.html#what-is-a-docblock).

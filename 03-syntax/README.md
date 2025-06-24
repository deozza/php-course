# Syntaxe

## Sommaire

- [Exemple de script](#exemple-de-script)

## Exemple de script

```php
<?php

echo 'Hello world';

?>
```

**Analyse ligne par ligne :**

1. on commence le script par une balise `<?php`
2. on exécute une instruction pour affiher un message
  - utiisation de la fonction echo de PHP pour afficher un message
  - le message est contenu dans des `'` (*guillements simples* ou *single quotes*)
  - la fin de l'instruction est symbolisée par un `;` (*point virgule* ou *semi-column*)
3. on termine le script par une balise `?>`

Tout le code compris dans les balises `<?php ?>` sera intérprété puis exécuté par PHP.

Comme on veut afficher un message de texte, on utilise des `''`. Si on avait voulu afficher un nombre, on aurait pu écrire directement :

```php
<?php

echo 42;

?>
```

Même chose pour des nombres à virgule :


```php
<?php

echo 3.14;

?>
```

Rien n'empêche d'écrire plusieurs instructions sur la même ligne :

```php
<?php

echo 'Hello world';echo 'Comment tu vas ?';echo 'Il fait beau';

?>
```

Mais chaque instruction doit être séparée par un `;`. Cette méthode d'écriture est *correcte*, mais pas *bonne*.

Elle limite la lisibilité et donc la compréhension du code.


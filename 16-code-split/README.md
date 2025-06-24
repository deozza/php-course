# Séparation du code en plusieurs fichiers

- pourquoi : améliorer la lisibilité, donc la compréhension du code
  - exemple :
    - je cherche les fonctionnalités liées au requête en BDD sur la table `user`, je vais dans le fichier `/lib/repository/user.php`
    - je cherche les fonctionnalités liées à la connexion en BDD, je vais dans le fichier `/lib/db/connexion.php`
    - je cherche la fonctionnalité de création d'un article de blog, je vais dans le fichier `/lib/modele/blog.php`
- processus : regrouper les familles de fonctionnalités dans un ficher dédié
  - exemple :
    - se demander avec quelle interface interragit la fonction (terminal, base de données, html, fichier, ...)
    - se demander quel type de ressource la fonction manipule (user, blog, contact, ...)

Pour pouvoir faire appel aux fonctions d'un fichier B dans un fichier A, utiliser `require_once` dans le fichier A :

```php
//B.php

<?php

public function bar($argument) {

}

?>
```

```php
<?php

require_once 'B.php'

public function foo() {

}

$value1 = foo();
$value2 = bar($value1);

?>
```

# Query parameters

## Sommaire

- [Définition](#définition)
- [Récupérer des query parameters](#récupérer-des-query-parameters)

## Définition

Une query parameter est une donnée formatée que l'on passe dans l'url et qui transmet des informations à l'application.

Comme ces données sont dans l'url, elles sont visibles par l'utilisateur et n'importe quelle autre personne qui scannerait le réseau. Elles ne sont pas encryptées.

**Ne pas y inscrire des données sensibles, comme des mots de passe par exemple.**

Le format est le suivant :

`http://monsite.com/page?param1=foo&param2=bar&param3=baz`

- toutes les query params se situent en fin de route, après le `?`
- une query param est notée comme `key=value`
- il est possible d'ajouter plusieurs query params, elles sont alors séparées par un `&`

## Récupérer des query parameters

Toutes les query parameters sont disponibles dans la superglobal `$_GET`. Elles sont organisées comme un tableau associatif `clef => valeur`, la clef étant la partie avant `=` et la valeur la partie après `=`.

Exemple :

```php
<?php

//url : http://localhost/user?id=1&username=foo

var_dump($_GET);
/*
[
  'id' => '1',
  'username' => 'foo'
]
*/

?>
```

Toutes les valeurs des query params sont de type `string`.

Lorsque des query params sont présentes avec la même clef, la valeur sera formatée en tableau :

```php
<?php

//url : http://localhost/user?fruitList=apple&fruitList=banana

var_dump($_GET);
/*
[
  'fruitList' => [
    'apple',
    'banana'
  ]
]
*/

?>
```

Il est également possible de passer un tableau en query param :


```php
<?php

//url : http://localhost/user?user['name']=foo&user['age']=12

var_dump($_GET);
/*
[
  'user' => [
    'name' => 'foo',
    'age' => '12'
  ]
]
*/

?>
```

C'est une méthode adaptée pour faire un système de filtres sur une liste de produits, par exemple.

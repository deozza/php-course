# Utilisation avec une base de données

## Sommaire

- [Créer une connexion](#créer-une-connexion)
- [Faire des requêtes](#faire-des-requêtes)
  - [Requête SELECT](#requête-select)
  - [Requête INSERT](#requête-insert)

## Créer une connexion

```php
<?php

$host = 'urlVersServeur'; // localhost ou 127.0.0.1 par exemple
$dbname = 'nomDeLaBaseDeDonnées';
$user = 'nomUtilisateur';
$password = 'motDePasseUtilisateur';
$dsn = "mysql:host=$host;dbname=$dbname;charset-UTF8";

$dbConnexion = new PDO($dsn, $user, $password);

?>
```

Pour fermer la connexion, il suffit d'écraser la variable qui contient la connexion avec `null` :

```php
<?php

$host = 'urlVersServeur'; // localhost ou 127.0.0.1 par exemple
$dbname = 'nomDeLaBaseDeDonnées';
$user = 'nomUtilisateur';
$password = 'motDePasseUtilisateur';
$dsn = "mysql:host=$host;dbname=$dbname;charset-UTF8";

$dbConnexion = new PDO($dsn, $user, $password); // connexion ouverte
$dbConnexion = null; // connexion fermée

?>
```

## Faire des requêtes

### Requête SELECT

```php
<?php

$sql = 'SELECT * FROM users WHERE username = :username AND email = :email;';
$statement = $dbConnexion->prepare($sql);
$statement->execute([
  'username' => 'test',
  'email' => 'test@gmail.com'
]);

$users = $statement->fetch(PDO::FETCH_ASSOC);
?>
```

### Requête INSERT

```php
<?php

$sql = 'INSERT INTO users (username, email) VALUES(:username, :email);';
$statement = $dbConnexion->prepare($sql);
$statement->execute([
  'username' => 'test',
  'email' => 'test@gmail.com'
]);

?>
```

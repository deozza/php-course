# Cours complet de PHP <!-- omit in toc -->

## Sommaire <!-- omit in toc -->

- [Origine](#origine)
- [Particularités](#particularités)
- [Installation](#installation)
- [Premiers pas](#premiers-pas)
- [La syntaxe de base](#la-syntaxe-de-base)
- [Les variables](#les-variables)
- [Les opérations mathématiques](#les-opérations-mathématiques)
- [Le typage](#le-typage)
- [Les opérateurs de comparaison](#les-opérateurs-de-comparaison)
- [Les boucles](#les-boucles)
- [Les conditions](#les-conditions)
- [Les fonctions de base et utiles de PHP](#les-fonctions-de-base-et-utiles-de-php)
- [Les différentes inputs](#les-différentes-inputs)
  - [Depuis le terminal](#depuis-le-terminal)
    - [Avec `$argv`](#avec-argv)
    - [Avec `stdin`](#avec-stdin)
    - [Avec `readline`](#avec-readline)
  - [Depuis un fichier](#depuis-un-fichier)
    - [CSV](#csv)
    - [JSON](#json)
  - [Depuis l'URL](#depuis-lurl)
  - [Depuis un formulaire](#depuis-un-formulaire)
- [Les fonctions](#les-fonctions)
- [Utilisation avec une base de données](#utilisation-avec-une-base-de-données)
  - [Créer une connexion](#créer-une-connexion)
  - [Requête SELECT](#requête-select)
  - [Requête INSERT](#requête-insert)
- [Séparation du code en plusieurs fichiers](#séparation-du-code-en-plusieurs-fichiers)
- [Exemple d'étapes pour organiser un développement](#exemple-détapes-pour-organiser-un-développement)

## Origine

## Particularités

- langage interprété
  - pas de compilateur
  - le code est exécuté et traduit en langage machine en direct
    - pas le plus performant de base
    - pas le plus sûr de base
      - pour savoir si le code est correct, il faut l'exécuter, ce qui peut invibiliser certains bugs
  - a besoin d'un serveur
- langage impératif
  - principe de la recette de cuisine et de l'algorithme traditionnel
    - on indique directement à la machine quelles opérations faire
  - facile à lire, à suivre

## Installation

- [WAMP](https://www.wampserver.com/#wampserver-64-bits-php-5-6-25-php-7)
- [XAMPP](https://sourceforge.net/projects/xampp/files/XAMPP%20Mac%20OS%20X/8.2.4/xampp-osx-8.2.4-0-installer.dmg)
- [LAMP](https://doc.ubuntu-fr.org/lamp)

## Premiers pas

## La syntaxe de base

```php
<?php
 $name = ‘John’;
 echo $name;
 $age = 21;
 echo $age;
 if($age > 18) {
  echo ‘’Il est majeur’’;
 }
?>
```

Analyse ligne par ligne :

 1. On démarre le script PHP par une balise ouvrante
 2. On crée une variable avec le signe `$`collé au nom de la variable, on lui donne une valeur avec le signe `=`, on termine la ligne avec un `;`
 3. On utilise la fonction `echo` de PHP pour afficher un message, le message étant le contenu de la variable
 4. On crée une deuxième variable avec le signe `$` collé au nom de la variable, on lui donne une valeur avec le signe `=`, on termine la ligne avec un `;`
 5. On utilise la fonction `echo` de PHP pour afficher un message, le message étant le contenu de la variable
 6. Il y a un truc magique avec un `if`, des `(` et des `{`
 7. On utilise à nouveau la fonction `echo`
 8. On ferme le `}`
 9. On termine le script avec une balise PHP fermante

Récap :

- un script est compris entre des balises (un peu à la manière d’HTML)
- chaque ligne, ou instruction, se termine par un `;`
- une variable se crée avec un `$` avec une valeur par défaut
- on peut réutiliser la variable avec son nom

## Les variables

Rappel : une variable est une association d’une clef, ou d’un nom, à une valeur. La valeur peut être modifié à tout moment. On peut appeler  une variable par son nom pour lire ou modifier la valeur qui y est associée. Une variable à une durée de vie…variable…

Pour créer une variable en PHP, on utilise le préfixe `$`.

**Création d’une variable :**

```php
<?php
 $name = ‘John’;
?>
```

**Appel d’une variable :**

```php
<?php
 $name = ‘John’;
 echo $name;
?>
```

**Modification de la valeur d’une variable :**

```php
<?php
 $name = ‘John’;
 echo $name;
 $name = ‘Patrick’;
 echo $name;
?>
```

**Copie d’une variable :**

```php
<?php
 $name = ‘John’;
 echo $name;
 $copiedName = $name;
 echo $copieName;
?>
```

**Durée de vie d’une variable :**

Une variable ne peut pas être appelée partout en fonction de l’endroit où elle a été créée.

**Appel d’une variable OK :**

```php
<?php
 $name = ‘John’;
 echo $name;
?>
```

**Appel d’une variable pas OK :**

```php
<?php
 $name = ‘John’;
 echo $name;
 if($name === ‘John’) {
  $message = ‘Bonjour John’;
 }

 echo $message;
?>
```

La variable ne peut être appelée que dans le bloc dans lequel il a été créé.

**Appel d’une variable OK :**

```php
<?php
 $name = ‘John’;
 echo $name;
 $message = ‘’;
 if($name === ‘John’) {
  $message = ‘Bonjour John’;
 }

 echo $message;
?>
```

## Les opérations mathématiques

**Addition :**

```php
<?php
 $number = 1;
 echo $number;

 $number = 1 + 1;
 echo $number;
 
 $number += 1;
 echo $number;

 $number ++;
 echo $number;
?>
```

**Soustraction :**

```php
<?php
 $number = 10;
 echo $number;

 $number = 10 - 1;
 echo $number;
 
 $number -= 1;
 echo $number;

 $number —;
 echo $number;
?>
```

**Multiplication :**

```php
<?php
 $number = 10;
 echo $number;

 $number = 10 * 2;
 echo $number;
 
 $number *= 2;
 echo $number;
?>
```

**Divisition :**

```php
<?php
 $number = 100;
 echo $number;

 $number = 100 / 2;
 echo $number;
?>
```

**Le modulo :**

```php
<?php
 $number = 100;
 echo $number;

 $number = 100 % 10;
 echo $number;
?>
```

Ca marche pas ça :

```php
<?php
 $number = ‘10’;
 echo $number;

 $number = $number + 2;
 echo $number;
?>
```

## Le typage

Principaux types :

- int
- string
- float
- array
- boolean

## Les opérateurs de comparaison

Les principales comparaisons :

- `>` : strictement supérieur
- `<` : strictement inférieur
- `>=` : supérieur ou égal
- `<=` : inférieur ou égal
- `==` : égal
- `===` : égal avec le même type

**La différence entre `==` et `===` :**

```php
<?php

 echo '1' == 1;
 echo 1 === 1;
 echo 'coucou' === 0;
 echo 'coucou' == 0;
 ?>
```

**Petit point sur la *yoda condition* :**

En général on fait : `$condition == true`. On peut faire une erreur de frappe et écrire à la place `$condition = true`.

Pour éviter d'écraser une variable au lieu de la comparer, on peut écrire `true == $condition`.

## Les boucles

**for :**

```php
<?php
 for($i = 1; $i <= 10; $i++){
  echo $i;
 }
?>
```

Traduction littérale :
*Pour un compteur $i qui démarre avec la valeur 1, qui ne dépassera 10, et qu'on incrémente de 1 exécuter :*

On peut décrementer aussi :

```php
<?php
 for($i = 10; $i >= 0; $i--){
  echo $i;
 }
?>
```

Utilisable pour parcourir un tableau :

```php
<?php

 $listOfFruits = ['orange', 'banana', 'apple'];
 $listSize = count($listOfFruits);
 for($i = 0; $i < lis$listSize; $i++){
  echo $listOfFruits[$i];
 }
?>
```

Truc drole à faire avec un string :

```php
<?php

 $word = 'cacatoes';
 $numberOfLetterInWord = strlen($word);
 
 for($i = $numberOfLetterInWord - 1; $i >= 0; $i--){
  echo $word[$i];
 }
?>
```

**foreach :**

```php
<?php

 $listOfFruits = ['orange', 'banana', 'apple'];
 foreach($listOfFruits as $fruit){
  echo $fruit;
 }
?>
```

Traduction littérale :
*Prendre dans l'ordre, un à un, les élements d'un tableau et exécuter :*

Beaucoup plus pratique et lisible que `for` pour parcourir un tableau.

```php
<?php

 $user = [
  'name' => 'John',
  'email' => 'john@email.com',
  'age' => '21'
 ];

 foreach($user as $property => $value){
  echo $property . ' : ' . $value;
 }
?>
```

Traduction littérale :
*Prendre dans l'ordre, un à un, la clef et sa valeur d'un tableau et exécuter :*

Attention si on a un tableau qui n'a pas tout le temps des duos clefs-valeur, il y aura des erreurs.

**while :**

```php
<?php

 $i = 1;

 while($i <= 10){
  echo $i;
  $i++;
 }
?>
```

Traduction littérale :
*Tant que la condition n'est pas remplie, exécuter :*

```php
<?php

 $condition = true;

 while($condition === true){

  $randomNumber = rand(0, 100);

  echo $randomNumber;

  $divResult = $randomNumber % 3;

  $condition = $divResult !== 0;
 }
?>
```

Il y a aussi le do...while qui exécute avant de vérifier la condition. Pas très utilisé.

## Les conditions

**if, else, elseif, ternaire :**

```php
<?php

 $number = rand(0, 100);

 if($number % 2 === 0){
  echo $number . ' is even';
 }else{
  echo $number . ' is odd';
 }
 ?>
```

Le même sans else :

```php
<?php

 $number = rand(0, 100);
 $message = $number . ' is ';
 $result = 'even';

 if($number % 2 !== 0){
  $result = 'odd';
 }

 echo $message . $result;
 ?>
```

```php
<?php

 $firstNumber = rand(0, 100);
 $secondNumber = rand(0, 100);

 if($firstnumber % 2 === 0){
  echo $firstNumber . ' is even';
 }elseif($firstnumber % 2 !== 0){
  echo 'both are odds';
 }
 ?>
```

On utilise surtout le elseif quand les deux conditions ne sont pas excluantes Lorsque les conditions n'ont rien a voir entre elles.

Par exemple faire

```php
<?php

 $value = 10;

 if($value >= 0){
  echo 'is positive';
 }elseif($value < 0){
  echo 'is negative';
 }
 ?>
```

est contre productif. Si le nombre n'est pas positif il est forcément négatif. On peut faire :

```php
<?php

 $value = 10;

 if($value >= 0){
  echo 'is positive';
 }else{
  echo 'is negative';
 }
 ?>
```

Voir encore plus simple :

```php
<?php

 $value = 10;
 $message = 'is positive';

 if($value < 0){
  $message 'is negative';
 }

 echo $message;
 ?>
```

Dans la plupart des cas, on peut se débrouiller sans else.

```php
<?php

 $value = 10;
 $message = $value >= 0 ? 'is positive' : 'is negative';

 echo $message;
 ?>
```

La ternaire est un moyen plus court d'écrire un if/else. Pas forcément plus lisible.

**switch :**

```php
<?php

 $listOfObjects = [
  [
   'type' => 'car',
   'name' => 'peugeot'
  ],
  [
   'type' => 'fruit',
   'name' => 'apple'
  ],
  [
   'type' => 'brand',
   'name' => 'apple'
  ],
  [
   'type' => 'fruit',
   'name' => 'orange'
  ]
 ];

 foreach($listOfObjects as $object) {
  $message = '';
  switch($object['type']){
   case 'car':
    $message = 'vroom vroom';
   break;
   case 'fruit':
    $message = 'mangez bougez';
   break;
   default : 
    $message = $object['name'];
   break;
  }

  echo $message;
 }
 ?>
```

C'est un super if elseif. Très pratique pour gérer plusieurs cas possibles. Plus lisible qu'un if elseif sur une même variable.

**try catch :**

```php
<?php

 try{
  $number = rand(0, 100);
  if($number > 50){
   throw new \Exception('number is too high');
  }

  echo $number;
 }catch(\Exception $e){
  echo $e->getMessage();
 }
 ?>
```

Traduction littérale :
*Essaye d'exécuter le script principal, et si une exception en particulier survient alors arrête l'exécution, intercepte l'exception et exécute le script de secours à la place*

Utile pour sécuriser l'application si un comportement anormal se produit.

## Les fonctions de base et utiles de PHP

- var_dump, print_r : pour afficher les détails d'une variable
- count : pour connaitre la taille d'un tableau
- min, max : pour connaitre le nombre minimum / maximum dans un enseble
- strlen : pour avoir le nombre de caractères dans un string
- strpos : pour savoir si un string existe dans un autre string
- sprintf : pour compléter un string avec des variables
- explode : pour transformer un string en tableau en fonction d'un marqueur
- strtolower : pour transformer un string en lowercase
- array_key_exists : pour savoir si une clef existe dans un tableau
- array_keys : pour avoir toutes les clefs dans un tableau
- in_array : pour savoir si une valeur existe dans un tableau
- file_exists : pour savoir si un fichier existe
- file_put_content : pour écrire dans un fichier et le créer s'il n'existe pas déjà
- file_get_contents : pour récupérer le contenu d'un fichier en string
- fopen : pour ouvrir un thread pour manipuler un ficher
- fclose : pour fermer un thread qui manipule un fichier
- mkdir : pour créer un dossier
- json_encode : pour serialiser une variable selon l'encodage JSON
- json_decode : pour transformer un string au format JSON vers un tableau ou un objet
- empty : pour vérifier si une variable correspond à `null`, `0`, `false` ou `''`
- is_* : pour confirmer le type PHP d'une variable
- ctype_* : pour vérifier le type de contenu d'une variable
- \DateTime : pour manipuler des dates

Dans le doute aller regarder <https://www.php.net/docs.php>

## Les différentes inputs

### Depuis le terminal

- Pour indiquer que le fichier est exécutable uniquement avec PHP depuis le terminal
- sur linux, le script devra contenir :

```php
#!/usr/bin/php
```

- il n'y aura pas de headers HTTP
- toutes les valeurs entrées sont typées `string`, peu importe les valeurs
  - il est donc important de valider le contenu des valeurs envoyées avant de continuer l'algorithme

#### Avec `$argv`

- aussi utilisable avec `$_SERVER['argv']`
- utiliser `$argc` pour avoir le nombre d'arguments envoyés
  - aussi utilisable avec `$_SERVER['argc']`
- récupère dans un tableau tous les paramètres envoyés
  - dont le nom du fichier exécuté

Exemple :

```php
<?php
var_dump($argv);
?>
```

```bash
php script.php arg1 arg2 arg3
```

```bash
array(4) {
  [0]=>
  string(10) "script.php"
  [1]=>
  string(4) "arg1"
  [2]=>
  string(4) "arg2"
  [3]=>
  string(4) "arg3"
}
```

#### Avec `stdin`

- ouvre un stream d'écoute

Exemple :

```php
<?php
echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
fclose($handle);

if(trim($line) != 'yes'){
    echo "ABORTING!\n";
    exit;
}
echo "\n";
echo "Thank you, continuing...\n";
?>
```

- lorsque l'input est validée dans le terminal en appuyant sur la touche `entrée`, cette touche est également enregistrée comme input
- la valeur contiendra des espaces vides correspondant au retour à la ligne
  - utiliser `trim()` pour supprimer ces espaces vides
- pour permettre l'envoi de plusieurs valeurs, utiliser `explode()`

```php
<?php
echo "Add fruits to the list \n ";
$handle = fopen ("php://stdin","r");
$input = trim(fgets($handle));
fclose($handle);

$fruits = explode(' ', $input);

var_dump($fruits);
?>
```

```bash
php script.php
"Add fruits to the list"
"apple orange banana"
```

```bash
array(4) {
  [0]=>
  string(5) "apple"
  [1]=>
  string(6) "orange"
  [2]=>
  string(6) "banana"
}
```

#### Avec `readline`

- affiche un message dans la console, ouvre un stream d'écoute et stocke l'input utilisateur dans une variable
- on peut en enchainer plusieurs

Exemple :

```php
<?php
$input = readline("Are you sure you want to do this?  Type 'yes' to continue: \n");
if($input != 'yes'){
    echo "ABORTING!\n";
    exit;
}

echo "Thank you, continuing...\n";

$name = readline("Who are you ? \n");
echo "Hello $name \n";

?>
```

### Depuis un fichier

#### CSV

- tableur formaté, lisible par un humain, léger
- `fopen` pour ouvrir un pointeur fichier
- dans une boucle `while`, utiliser `fgetcsv` pour récupérer le contenu du fichier ligne par ligne
  - la ligne récupérée est au format tableau
- `fclose` pour fermer le pointeur fichier une fois l'opération terminée

Exemple :

```php
<?php
$handle = fopen(__DIR__ . '/input.csv', 'r');
$row = fgetcsv($handle, 1000, ',', '"', '\\');
$input = [];
while($row !== false) {
    $input[] = $row;
    $row = fgetcsv($handle, 1000, ',', '"', '\\');
}
fclose($handle);
```

#### JSON

- une fois l'input récupéré
  - via `file_get_content()` par exemple
- utiliser `json_decode()` pour formater les données en objet ou tableau
  - par défaut, un objet sera renvoyé
  - pour récupérer un tableau, ajouter `true` comme second argument de la fonction
- utiliser `json_encode()` pour formater une variable *castable* en string vers du json

Exemple :

```php
<?php
$fileContent = file_get_content('input.json');
$contentAsArray = json_decode($fileContent, true);
```

### Depuis l'URL

- utilisation des `query_params` :
  - défini dans une uri après le caractère `?`
  - dans une urli `/user?id=1`
    - `id` est une variable dont la valeur est `1`
  - on peut avoir plusieurs query params dans une même uri
    - elles sont séparées par `&`
- récupérable dans le code avec `$_GET` sous la forme d'un tableau
- toutes les valeurs sont en string

### Depuis un formulaire

```php
<?php

var_dump($_POST);

?>
    <form action="" method="POST" class="flex flex-col items-center justify-between space-y-8 border border-stone-300 rounded-xl w-8/12 p-6">
        <h1 class="text-6xl">Register</h1>
        <ul class="w-full flex flex-col items-center justify-center space-y-4">
            <li class="w-full flex flex-row items-center justify-between" >
                <label for="email" class="flex-1">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" class="flex-2 border <?php if(empty($error) === false && $error['type'] === 'login-error'){ echo 'border-red-500';} else {echo 'border-white-500';}?>  p-2 rounded-xl" value="<? if($content !== null && $content['email'] !== null):  echo $content['email']; endif ?>" />
            </li>
        
            <li class="w-full flex flex-row items-center justify-between" >
                <label for="password" class="flex-1">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" class="flex-2 border <?php if(empty($error) === false && $error['type'] === 'login-error'){ echo 'border-red-500';} else {echo 'border-white-500';}?> p-2 rounded-xl" />
            </li>

            <?php if(empty($error) === false && $error['type'] === 'login-error'): ?>
                <li>
                    <p class="text-red-500"><?= $error['message']; ?></p>
                </li>
            <?php endif; ?>
            
            
            <li class="flex flex-row items-center justify-center space-x-4" >
                <button type="submit" class="border rounded-xl bg-green-500 border-green-500 px-4 py-2">Valider</button>
            </li>
        </ul>
    </form>
```

`$_POST` est une variable de PHP, qui est disponible dans tout le code et mise à jour par PHP. Elle contient un tableau `clef=>valeur`, avec comme clefs les valeurs dans l'option `name` des balises `input` et comme valeur ce que l'utilisateur a rentré dans le formulaire.

## Les fonctions

Une fonction est un morceau de code pouvant être réutilisé plusieurs fois, à plusieurs endroits, dans une application.

Elle est définie par un nom, une liste d'arguments. Elle peut retourner un résultat ou ne rien retourner.

Format :

```
public function nomDeLaFonction(type $argument): type {

}
```

Le nom de la fonction doit être suffisamment explicite pour que n'importe qui puisse comprendre son but. On ne doit pas être obligé de lire le contenu de la fonction pour savoir comment l'utiliser. C'est le même raisonnement que pour les noms de variable.

Typer les arguments et le retour d'une fonction permet 2 choses :

- sécuriser son code
  - ne pas laisser passer n'importe quel genre de variable dans la fonction, ce qui pourrait introduire des effets indésirés voir des bugs
- améliorer la lecture et la compréhension du code
  - en connaissant les types d'arguments et de retour, on sait quels genres d'inputs on doit fournir et comment ils vont être manipulés pour générer l'output

Exemple :

```php
<?php
 $listOfNumbers = initListOfNumbers(10);
 $result = getFooBarBuzzResult($listOfNumbers);

 public function initListOfNumbers(int $listSize): array {
  if($listSize <= 0){
   throw new \Exception('You must enter a positive number greater than 0');
  }

  $listOfNumbers = [];

  for($i = 0; $i < $listSize; $i++){
   $number = rand(0, 100);
   $listOfNumbers[] = $number;
  }

  return $listOfNumbers;
 }

 public function getFooBarBuzzResult(array $listofNumbers) : string {
  $message = '';

  foreach($listOfNumbers as $number) {
   if(is_int($number) === false) {
    throw new \Exception('One element in your array is not an number');
   }

   $result = getFooBarBuzzForSingleNumber($number);
   $message .= ' ' . $result;
  }

  return $message;
 }

 public function getFooBarBuzzForSingleNumber(int $number): string {
  $isFoo = number % 3 === 0;
  $isBar = number % 5 === 0;
  $isBuzz = $isFoo && $isBar;

  if($isBuzz){
   return 'buzz';
  }

  if($isFoo){
   return 'foo';
  }

  if($isBar){
   return 'bar';
  }


  return "$number";
 }
 ?>
```

## Utilisation avec une base de données

### Créer une connexion

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

## Séparation du code en plusieurs fichiers

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


//A.php

<?php

require_once 'B.php'

public function foo() {

}

$value1 = foo();
$value2 = bar($value1);

?>

## Exemple d'étapes pour organiser un développement

1. créer un fichier PHP
2. dans un commentaire, découper en liste de tâches l'objectif demandé
3. écrire l'algorithme correspondant à chaque tâche (= solution naïve)
   - tester l'application à chaque algorithme
4. une fois que le script obtenu répond au besoin, commencer à le découper en fonctions
   1. d'abord 1 fonction === 1 tâche
   2. tester
   3. puis 1 fonction === 1 fonctionnalité
   4. tester
5. répartir les fonctions obtenues dans différents fichiers, selon les domaines applicatifs et les familles de responsabilité des fonctions

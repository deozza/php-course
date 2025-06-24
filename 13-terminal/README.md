# Intéragir avec le terminal

## Sommaire

- [Récupérer les inputs](#récupérer-les-inputs)
  - [Avec `$argv`](#avec-argv)
  - [Avec `stdin`](#avec-stdin)
  - [Avec `readline`](#avec-readline)

## Récupérer les inputs

Les inputs seront toujours au format string. Il faut donc faire attention à valider et nettoyer les inputs avant de continuer les instructions.

### Avec `$argv`

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

### Avec `stdin`

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

### Avec `readline`

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

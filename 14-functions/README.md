# Les fonctions

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


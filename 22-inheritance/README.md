# L'héritage

## Sommaire

<!--toc:start-->
- [L'héritage](#lhéritage)
  - [Sommaire](#sommaire)
  - [Définition](#définition)
  - [Exemples](#exemples)
<!--toc:end-->

## Définition

- lorsque des concepts similaires sont représentés par des classes et qu'ils peuvent partager des propriétés et des méthodes en commun, pour éviter de dupliquer du code, on utilise le concept d'héritage
  - on crée une classe parente qui va englober les méthodes et propriétés communes
  - on crée des classes enfants qui vont étendre (= reprendre la configuration et le type de) la classe parente

## Exemples

```php
<?php
 class LivingBeing{
   string $order;
   string $family;
   string $genre;
   string $species;
 }

 class Animal extends LivingBeing {
   string $behaviour;
   string $feedingRegime;
 }

 class Mammal extends LivingBeing {
   int $numberOfLegs;
 }

 class Fish extends LivingBeing {
   int $numberOfFins;
 }

 class Plant extends LivingBeing {
   int $sunExposition;
   string $soil;
   int $temperature;
 }

 class TerrestrialPlant extends Plant {
   int $wateringAmount;
 }

 class AquaticPlant extends Plant {
   string $waterFlow;
 }

?>
```

```php
<?php
 class User{
   string $firstName;
   string $familyName;
   string $email;
 }

 class Employee extends User {

 }

 class Client extends User {

 }

$user = new Employee();

if($user instanceof Client) {
   echo "you can't fire a client";
}

?>
```

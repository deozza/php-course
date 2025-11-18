# Les classes abstraites

## Sommaire

<!--toc:start-->
- [Les classes abstraites](#les-classes-abstraites)
  - [Sommaire](#sommaire)
  - [Défition](#défition)
  - [Exemples](#exemples)
<!--toc:end-->

## Défition

- permettent d'obliger des classes à respecter des signatures particulières
  - définissent les méthodes et les propriétés, ainsi que leurs types, qu'une classe doit comporter au minimum
  - ne définissent pas en revanche le contenu des méthodes
- grâce l'héritage, permettent d'embarquer des méthodes communes

## Exemples

```php
<?php

 abstract class Animal {
   protected $name;
   protected $species;

   abstract public function eating(): string;

   public function getInfos(): string {
      return "Hello, my name is $this->name and i'm a $this->species";
   }
 }

 class Cat extends Animal {
   public function eating(): string {
      return "I eat meat and fish";
   }
 }

 class Cow extends Animal{
   public function eating(): string {
      return "I eat grass";
   }
 }

 class Socialist extends Animal{
   public function eating(): string {
      return "I eat the richs";
   }
 }

$animal = new Cat();
$animal->name = "Minou"
$animal->species "Chat européen"
echo $animal->getInfos();
echo $animal->eating();

$animal = new Cow();
$animal->eating();

$animal = new Socialist();
$animal->eating();
?>
```

- il n'est pas possible d'étendre plusieurs classes abstraites pour une même classe

# Les interfaces

## Sommaire

<!--toc:start-->
- [Les interfaces](#les-interfaces)
  - [Sommaire](#sommaire)
  - [Définition](#définition)
  - [Exemples](#exemples)
<!--toc:end-->

## Définition

- permettent d'obliger des classes à respecter des signatures particulières
  - définissent les méthodes, ainsi que leurs types, qu'une classe doit comporter au minimum
  - ne définissent pas en revanche le contenu des méthodes

## Exemples

```php
<?php

 interface CommandInterface {
   execute(): string;
 }

 class HelloCommand implements CommandInterace{
   function execute(): string {
      return 'Hello world';
   }
 }

 class WhatTimeCommand implements CommandInterace{
   function execute(): string {
      $date = new /DateTime();
      return $date->format('Y-m-d H-i-s');
   }
 }

 class RollDiceCommand implements CommandInterace{

   int $diceFaces

   function setOptions(array $arguments) {
      if(array_key_exists('diceFaces', $arguments) 
         && !empty($arguments['diceFaces'])
         && is_int($arguments['diceFaces'])
         && $arguments['diceFaces'] > 0
      ) {
         $this->diceFaces = $arguments['diceFaces']
      }
   }

   function execute(): string {
      if(empty($diceFaces)) {
         return "No dice were selected";
      }

      $diceValue = random_int(1, $this->diceFaces);

      return "You got a $diceValue";
   }
 }

$command = new HelloCommand();
$command->execute();

$command = new WhatTimeCommand();
$command->execute();

$command = new RollDiceCommand();
$command->execute();
$command->setOptions(['diceFaces' => 6]);
$command->execute();


?>
```

- permet d'utiliser des fonctionnalités de classe en étant sans devoir vérifier que les méthodes n'existent pas
- permet de passer des classes plus abstraites qui correspondent aux attentes du logiciel
- il est possible d'implémenter plusieurs interfaces pour une même classe


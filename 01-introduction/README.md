# Introduction

## Sommaire

- [Origine du langage](#origine-du-langage)
- [Langage impératif](#langage-impératif)
- [Langage interprété](#langage-interprété)
- [Quelles utilisations](#quelles-utilisations)

## Origine du langage

**Les années 1990**

- la quasi totalité des sites internets sont statiques
- écrits en HTML
  - javascript et CSS n'existent pas encore
- pour rajouter des éléments dynamiques, on pouvait
  - écrire des binaires en C (CGI-bin), qui seront exécutés sur le serveur
    - qui utilisent le processus httpd d'un serveur web
  - lancer des scripts en Perl
    - exécuter un service à part
    - lire un fichier HTML
    - remplacer des éléments avec des données calculées
    - renvoyer le résultat au navigateur

**1994**

- Rasmus Lerdorf
  - CV en ligne
  - veut rajouter un compteur de visiteurs
  - écrit des exécutables CGI-BIN et crée un langage de script pour les relier entre eux
  - création de Personal Home Page Tools (PHP Tools)
    - un langage qui s'exécute aussi sur httpd
    - qui s'intégre dans une page HTML
- ajout de fonctionnalités
  - connexion à une base de données
  - gestion des formulaires

**1995-200**

- publication open source du code
- plusieurs réécritures du langage
  - chacune avec un nouveau nom pour PHP (Forms Interpreter, PHP Construction Kit, PHP/FI)
- compatibilité avec UNIX, POSIX, Windows NT
- sortie de PHP 2.0 en 1996
- Andi Gutmans et Zeev Suraski
  - réécriture complète
  - sortie de PHP 3.0 en 1998
  - base pour les prochaines itérations
  - création du `Zend Engine` pour permettre la sortie de PHP 4.0 en 2000
    - meilleures performances
    - support des sessions

Sources :

- [wikipedia](https://fr.wikipedia.org/wiki/PHP)
- [php.net](https://www.php.net/manual/fr/history.php.php)

## Langage impératif

**Définition :**

- un programme qui se base sur une série d'étapes à suivre (control flow) dans l'ordre pour modifier l'état de la machine et arriver au résultat final
- ne manipule pas le résultat final
- modifier l'état de la machine = état mutable
- utilise des boucles, des conditions, des déclarations d'input et d'output

**Avantages :**

- control flow
  - facile à lire et comprendre
  - contrôle total de l'ordre des étapes
  - machines adaptées pour exécuter ce genre de programme

**Inconvénients :**

- control flow
  - peut devenir complexe et difficile à maintenir
- mutabilité
  - le changement de valeurs des variables peut devenir difficile à suivre et retenir

Sources :

- [geeksforgeeks](https://www.geeksforgeeks.org/what-is-imperative-programming/)

## Langage interprété

**Définition :**

- l'exécution du programme, et sa traduction vers un langage plus proche de la machine, se fait en direct
- il n'est pas exécuté directement par la machine, mais par un autre logiciel intermédiaire

**Avantages :**

- langage généralement plus abstrait (= éloigné de la machine)
  - donc plus simple à apprendre, comprendre et maîtriser
- plus facile et rapide à mettre à jour

**Inconvéients :**

- moins performant
- les bugs apparaissent uniquement lorsque la ligne de code qui les contient est exécutée

Sources :

- [geeksforgeeks](https://www.geeksforgeeks.org/difference-between-compiled-and-interpreted-language/)

## Quelles utilisations ?

- utilisés par 40% des entreprises en 2010
- sites / applications webs
  - 75% des sites webs en 2024
  - quelques noms connus :
    - facebook
    - wikipedia
    - wordpress
    - slack
    - etsy 

Sources :

- [wikipedia](https://fr.wikipedia.org/wiki/PHP)
- [w3techs](https://w3techs.com/technologies/history_overview/programming_language/ms/y)

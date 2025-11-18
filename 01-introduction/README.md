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
    - langage interprété et impératif
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

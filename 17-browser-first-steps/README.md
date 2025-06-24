# Premiers pas sur le navigateur

## Sommaire

- [Exécuter un site avec le serveur PHP](#exécuter-un-site-avec-le-serveur-php)
- [Exécuter un site avec le serveur Apache](#exécuter-un-site-avec-le-serveur-apache)
- [Les superglobals](#les-superglobals)

## Exécuter un site avec le serveur PHP

PHP vient avec un serveur minimaliste pour pouvoir tester rapidement une application. Ce n'est pas un serveur à utiliser en production. Il lui manque trop de fonctionnalités par rapport à un Apache ou un Nginx.

Pour démarrer le serveur, utiliser la commande :

```bash
php -S 127.0.0.1:8000 -t ./path/to/project
```

L'application sera disponible sur votre adresse `http://127.0.0.1:8000` (ou `http://localhost:8000`).

Si vous démarrez le serveur directement depuis le dossier de votre application, l'option `-t` est inutile.

## Exécuter un site avec le serveur Apache

Pour exécuter votre site avec un serveur Apache, il faut mettre votre application le dossier correspondant à votre installation.

- `/var/www/html` pour linux
- `C:\wamp64\www\html` pour windows
- `/opt/homebrew/var/www/` pour macos

Tous vos sites sont disponibles depuis l'adresse `http://127.0.0.1` (ou `http://localhost`). Pour accéder à l'un de vos sites, il faut rajouter dans la barre d'url le nom du dossier qui contient le site.

## Les superglobals

Les superglobals sont des variables qui sont prédéfinies par PHP et contiennent des valeurs relatives aux inputs utilisateurs, aux informations de session, aux données du serveur, ...

Elles sont accessibles dans tout le code en lecture et en écriture. Leur contenu est mis à jour automatiquement par PHP.

La plupart des superglobals sont utiles dans un navigateur, pas dans le terminal.

# Installation sur Linux

**Prérequis** : avoir accès au terminal bash

## Étape 1 : mettre à jour les dépendances

```bash
sudo apt-get update -y && apt-get dist-upgrade
```

## Étape 2 : installer les paquets PHP

```bash
sudo apt-get install php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath
```

## Étape 3 : vérifier l'installation de PHP

```bash
php --version
```

La version de PHP que vous venez d'installe devrait s'afficher dans le terminal.

## Étape 4 : installer les paquets Apache

```bash
sudo apt-get apache2
```

## Étape 5 : activer le serveur apache

```bash
sudo systemctl enable apache2
```

## Étape 6 : vérifier l'installation d'apache

```bash
sudo systemctl status apache2
```

Vous devriez voir que le service est `Active`.

Lorsque vous voudriez créer de nouveaux projets, les mettre dans un dossier au niveau de `/var/www/html`
# Installation sur MacOS

**Prérequis** :

- avoir accès au terminal bash
- avoir installé [brew](https://brew.sh/fr/)

## Étape 1 : installer PHP

```bash
brew install php
```

## Étape 2 : vérifier l'installation de PHP

```bash
php --version
```

Il devrait s'afficher dans le terminal le numéro de version de PHP d'installé.

## Étape 3 : désactiver l'apache2 installé par défaut

```bash
sudo apachectl stop
sudo launchctl unload -w /System/Library/LaunchDaemons/org.apache.httpd.plist 2&gt;/dev/null
```

## Étape 4 : installer httpd

```bash
brew install httpd
```

## Étape 5 : activer le serveur

```bash
brew services start httpd
```

## Étape 6 : modifier la configuration du serveur

Ouvrir le fichier `/opt/homebrew/etc/httpd/httpd.conf` dans un éditeur de texte.

- se rendre sur la ligne `Listen 8080`
- modifier la ligne pour ne garder que `Listen 80`
- se rendre sur le bloc avec les `LoadModule`
- rajouter les lignes suivantes :

```
    LoadModule php_module /opt/homebrew/opt/php/lib/httpd/modules/libphp.so

    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>
```

- se rendre au niveau du bloc 

```
IfModule dir_module>
    DirectoryIndex index.html
</IfModule>
```

Le modifier pour obtenir : 

```
IfModule dir_module>
    DirectoryIndex index.html index.php
</IfModule>
```

- sauvegarder et quitter

```bash
brew services reload httpd
```

## Étape 7 : vérifier l'installation

Se rendre sur la page `http://localhost` de n'importe quel navigateur.

Une page avec écrit `It works !` devrait s'afficher

Lorsque vous voudriez créer de nouveaux projets, les mettre dans un dossier au niveau de `/opt/homebrew/var/www/`.
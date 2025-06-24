# Installation

## Sommaire

- [Pour windows](./windows.md)
- [Pour MacOS](./macos.md)
- [Pour Linux](./linux.md)
- [Configuration post installation](#configuration-post-installation)

## Configuration post installation

Certaines installations par défaut n'affichent pas toutes les erreurs de manière détaillée. Pour cela, il faut modifier le fichier de configuration `php.ini`.

Pour savoir où se trouve ce fichier sur votre machine, taper la commande :

```bash
php --ini
```

Ouvrir le fichier avec un éditeur de texte.

Trouver la ligne avec `display_errors` et la modifier pour avoir `display_errors = on`.

Si besoin, vous pouvez également augmenter la taille mémoire maximale allouée à PHP. Il faudra modifier la ligne `memory_limit` et y indiquer la taille mémoire voulue.

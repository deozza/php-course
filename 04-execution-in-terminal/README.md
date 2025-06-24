# Exécution depuis le terminal

## Sommaire

- [Shell intéractif](#shell-intéractif)
- [Exécution d'une instruction simple](#exécution-dune-instruction-simple)
- [Exécution d'un fichier](#exécution-dun-fichier)

## Shell intéractif

Utiliser la commande :

```bash
php -a
```

Pour rentrer dans le shell intéractif de PHP. Ici, on peut exécuter des instructions directement depuis le terminal.

Utiliser la commande `exit` pour sortir du shell intéractif et revenir dans votre terminal.

## Exécution d'une instruction simple

Utiliser la commande :

```bash
php -r
```

Suivie de l'instruction à exécuter entre guillemets. Exemple :

```bash
php -r "echo 'coucou';"
```

### Exécution d'un fichier

Utiliser la commande :

```bash
php -f file.php

# Les formulaires

## Sommaire :

- [Les options utiles en PHP](#les-options-utiles-en-php)
- [Récupérer les données d'un form GET](#récupérer-les-données-dun-form-get)
- [Récupérer les données d'un form POST](#récupérer-les-données-dun-form-post)

## Les options utiles en PHP

Soit un formulaire simple de login :

```html
    <form action="" method="" >
        <h1>Register</h1>
        <ul>
            <li>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" />
            </li>
        
            <li>
                <label for="password" >Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" />
            </li>
            
            
            <li>
                <button type="submit">Valider</button>
            </li>
        </ul>
    </form>

```

4 éléments permettent de manipuler ce formulaire avec du PHP :

- `<form action>` => détermine quel fichier php va être exécuté pour traiter le formulaire
  - par défaut, si l'option n'est pas ajoutée ou si elle est laissée vide, le script contenant le formulaire est exécuté de nouveau
- `<form method>` => détermine si le fichier php à exécuter va être appelé avec une méthode `GET` ou une méthode `POST`
  - par défaut, si l'option n'est pas ajoutée ou si elle est laissée vide, la méthode `GET` est utilisée
- `<input name />` => détermine le nom de la variable envoyée dans le formulaire
- `<button type="submit">` => permet de soumettre le formulaire qui entoure le boutton

## Récupérer les données d'un form GET

Lorsqu'un formulaire avec une méthode `GET` est soumis, les données du formulaire sont ajoutées dans l'url sous forme de query params.

On peut donc récupérer ces données dans le code avec la superglobal `$_GET`.

**Attention :**

Pour accéder à une page, le navigateur fait une requête `GET` vers le serveur. Comme la méthode est la même entre une navigation normale et un envoi de formulaire, il faut vérifier que les données soient présentes dans la superglobal avant de les utiliser dans un algorithme :

```php

<?php

$email = "";
$password = "";

if(array_key_exists($_GET, 'email') === true) {
  $email = $_GET['email'];
}

if(array_key_exists($_GET, 'password') === true) {
  $password = $_GET['password'];
}
?>
    <form action="" method="" >
        <h1>Register</h1>
        <ul>
            <li>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" />
            </li>
        
            <li>
                <label for="password" >Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" />
            </li>
            
            
            <li>
                <button type="submit">Valider</button>
            </li>
        </ul>
    </form>
```

## Récupérer les données d'un form POST

Lorsqu'un formulaire avec une méthode `POST` est soumis, les données du formulaire sont envoyées vers le serveur dans un FormData.

On peut donc récupérer ces données dans le code avec la superglobal `$_POST`.

**Attention :**

Il faut vérifier qu'on accède bien à la page avec une méthode `POST` et vérifier que les données sont présentes dans la superglobal :

```php

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = "";
  $password = "";

  if(array_key_exists($_POST, 'email') === true) {
    $email = $_POST['email'];
  }

  if(array_key_exists($_POST, 'password') === true) {
    $password = $_POST['password'];
  }
  
}

?>
    <form action="" method="POST" >
        <h1>Register</h1>
        <ul>
            <li>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" />
            </li>
        
            <li>
                <label for="password" >Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" />
            </li>
            
            
            <li>
                <button type="submit">Valider</button>
            </li>
        </ul>
    </form>
```

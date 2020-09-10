# Genesis
Projet Genesis 2020. Créé par [@hugolgc](https://github.com/hugolgc).

## Installation
Télécharger et placer le répertoire 'Genesis' dans votre serveur Web.
Créer une base de données du nom de 'genesis' et importer le fichier 'data.sql'.
Changer les paramètres de connexion dans le fichier 'Manager.php'.
Enfin dans le fichier 'templates.php', choisir un framework css à partir de la ligne 14 (les pages utilisent par défauts Tailwind css).
```html
<link rel="stylesheet" href="public/css/tailwind.min.css">    Tailwind css
<link rel="stylesheet" href="public/css/bulma.min.css">       Bulma
<link rel="stylesheet" href="public/css/bootstrap.min.css">   Bootstrap
```
Puis un framework js à partir de la ligne 35.
```html
<script src="public/js/vue.js" charset="utf-8"></script>            Vue.js
<script src="public/js/jquery.min.js" charset="utf-8"></script>     jQuery
<script src="public/js/bootstrap.min.js" charset="utf-8"></script>  Bootstrap JS
```

## Modèle Vue Contrôleur
Une page est composée d’un modèle qui traite les données, une vue qui les affiches et d’un contrôleur qui liens la vue et le modèle. Et enfin d’une route qui appel le contrôleur.

## Utilisation : suivre les étapes une par une pour créer une page
Ajouter un modèle :
Créer un nouveau fichier 'NewModel.php' dans le répertoire 'model'.
```php
<?php

require_once 'Manager.php';

class NewModel extends Manager
{
  public function getTitles()
  {
    $db = $this->dbConnect();
    // Requette qui retourne les titres des articles
    $request = $db->query('SELECT title FROM Articles');

    return $request;
  }
}

```
##
Ajouter une vue :
Créer un nouveau fichier 'newView.php' dans le répertoire 'view'.
```php
<?php
$title = 'Nouvelle page';
ob_start();
?>

<?php foreach ($data as $row): ?>

  <p class="text-3xl font-bold mb-6"><?= $row['title'] ?></p>

<?php endforeach; ?>

<?php
$content = ob_get_clean();
require 'templates.php';
?>
```
##
Ajouter un contrôleur :
Coller ce contenu après toutes les autres lignes de code dans le fichier 'handler.php'.
```php
require_once './model/NewModel.php';

function newController()
{

  $objet = new NewModel();
  $data = $objet->getTitles();

  require './view/newView.php';
}
```
##
Ajouter une route :
Créer la route qui a pour nom 'newpage' dans le fichier 'index.php'.
```php
switch ($page):

  case 'newpage':
    newController();
    break;

  case 'home':
```
Vous pouvez maintenant vous rendre sur la nouvelle page : index.php?page=newpage

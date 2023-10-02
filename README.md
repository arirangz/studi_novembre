# Projet Techtrendz
## Installation
* Vous devez tout d'abord créer un domaine local dans votre fichier hosts, puis modifier votre vhost d'Apache et redémarrer votre serveur.
* Dans votre dossier, récupérez les sources avec Git ou en les téléchargeant.
* Vous devez ensuite créer une base de données mysql et importer le fichier bdd_techtrendz.sql.
* La base de données contient déjà un jeu de données avec également deux utilisateurs (un administrateur et un utilisateur) :
    * user@test.com, mot de passe : test (à ne pas utiliser sur un site en production :) )
    * admin@test.com, mot de passe : test (à ne pas utiliser sur un site en production :) )

* Modifiez le fichier lib/config.php en y ajoutant les données de votre base de données.
* Assurez-vous que le site fonctionne en local.

## Contexte
Un prestataire a commencé à mettre en place le site Techtrendz en organisant ses fichiers avec des fonctions (sans POO). Ce site a pour but de permettre aux visiteurs de consulter des articles sur l'actualité tech et de permettre aux administrateurs de poster des articles administrable dans un espace dédié.

## L'existant
La navigation permet de voir les pages existantes. Pour la plupart des pages, le code HTML a déjà été ajouté en mode static. Le précédent développeur à commencer à structurer certaines fonctions et ajouté de nombeaux @todo dans le code qu'il faudra terminer.

## Les tâches restantes
* Front : Terminer la connexion (login.php + lib/user.php)
* Front : Terminer la création d'un compte utilisateur (inscription.php + lib/user.php).
* Front : Terminer l'affichage d'un article front (actualite.php + lib/article.php).
* Front : Terminer l'affichage de la liste des articles (actualite.php + lib/article.php).
* Front : Terminer l'affichage de la liste des articles (actualite.php + lib/article.php).
* Front : Terminer l'affichage des trois derniers articles sur la page d'accueil (index.php + lib/article.php).
* Admin : Terminer l'affichage de la liste des articles avec pagination (admin/articles.php + lib/article.php).
* Admin : Terminer l'ajout d'un article (lib/article.php).
* Admin : Terminer la suppression d'un article (lib/article.php).

## Bonus
* Gérer une pagination côté front sur la page front actualites.php
* Ajouter la possibilté de filtrer la page actualites.php par catégorie (filtre côté php et non pas js)
* Gérer la page contact.php, nécessite d'installer sendmail selon l'environnement :
    * https://www.coderanks.com/articles/send-email-from-localhost-php
    * Gérer un mot de passe d'application
* Ajouter la possibilité pour un utilisateur connecté de pouvoir ajouter un commentaire sur un article (nécessite l'ajout d'une table)
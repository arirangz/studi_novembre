<?php
require_once 'lib/config.php';
require_once 'lib/session.php';
require_once 'lib/pdo.php';
require_once 'lib/user.php';

require_once 'templates/header.php';


$errors = [];
$messages = [];

// Si le formulaire a été souis
if (isset($_POST['loginUser'])) {
    //@todo appeler une méthode verifyUserLoginPassword qui retourne false ou retourne un tableau avec l'utisateur
    $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);

    /* @todo si on récupère un utilisateur, alors on stocke l'utilisateur dans la session
        et on redirige l'utilisateur soit vers l'admin (si role admin) soit vers l'accueil
        sinon on affiche une erreur "Email ou mot de passe incorrect"
    */

  }

?>
    <h1>Login</h1>

    <?php // @todo afficher les erreurs avec la structure suivante :
        /*
        <div class="alert alert-danger" role="alert">
            Utilisatuer ou mot de passe incorrect
        </div>
        */
    ?>

    <form method="POST">
        <div class="mb-3">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de psse</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <input type="submit" name="loginUser" class="btn btn-primary" value="Enregistrer">

    </form>

    <?php
require_once 'templates/footer.php';
?>
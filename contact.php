<?php 
require_once __DIR__."/lib/config.php";
require_once __DIR__."/templates/header.php"; 
?>


<?php 
    $messages = [];
    $errors = [];

    if (isset($_POST["sendContact"])) {
        //@todo gérer l'envoi d'email avec affichage de message et erreurs si email non valide ou message vide
    }

?>

<h1>Contact</h1>

<?php foreach($messages as $message) { ?>
    <div class="alert alert-success">
        <?=$message; ?>
    </div>
<?php } ?>

<?php foreach($errors as $error) { ?>
    <div class="alert alert-success">
        <?=$error; ?>
    </div>
<?php } ?>
<form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>

        <input type="submit" name="sendContact" class="btn btn-primary" value="Envoyer">

    </form>
<?php require_once __DIR__."/templates/footer.php"; ?>


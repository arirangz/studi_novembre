<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/session.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/article.php";

require_once __DIR__ . "/templates/header.php";

// @todo Il faut appeler la fonction getArticles, cette fonction est a créer
// $articles = getArticles($pdo, _HOMEPAGE_ITEM_LIMIT_);

?>



<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">TechTrendz : L'actu tech !</h1>
        <p class="lead">
            Plongez dans l'univers passionnant de la technologie sur TechTrendz, votre portail d'information incontournable pour explorer les avancées les plus récentes, les tendances émergentes et les innovations qui façonneront notre avenir numérique.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="actualites.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir tous les articles</a>
        </div>
    </div>
</div>

<div class="row text-center">
            
<div class="col-md-4 my-2 d-flex">
    <div class="card">
        <img src="/uploads/articles/3-devops.png" class="card-img-top" alt="Les meilleurs outils DevOps">
        <div class="card-body">
            <h5 class="card-title">Les meilleurs outils DevOps</h5>
            <a href="actualite.php?id=52" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
</div>            
<div class="col-md-4 my-2 d-flex">
    <div class="card">
        <img src="/uploads/articles/2-react-vs-react-native.jpg" class="card-img-top" alt="React Natives : Quelles différences par rapport à React">
        <div class="card-body">
            <h5 class="card-title">React Natives : Quelles différences par rapport à React</h5>
            <a href="actualite.php?id=51" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
</div>            
<div class="col-md-4 my-2 d-flex">
    <div class="card">
        <img src="/uploads/articles/1-php-vs-python.jpg" class="card-img-top" alt="PHP ou Python ?">
        <div class="card-body">
            <h5 class="card-title">PHP ou Python ?</h5>
            <a href="actualite.php?id=50" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
</div>    
</div>

<?php require_once __DIR__ . "/templates/footer.php"; ?>
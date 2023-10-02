<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/templates/header.php";

// @todo On doit appeler getArticale pour récupérer les articles et faire une boucle pour les afficher
// $articles = getArticles($pdo);

?>

<h1>TechTrendz Actualités</h1>
<?php


?>
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
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 49">
            <div class="card-body">
                <h5 class="card-title">Article 49</h5>
                <a href="actualite.php?id=49" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 48">
            <div class="card-body">
                <h5 class="card-title">Article 48</h5>
                <a href="actualite.php?id=48" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 47">
            <div class="card-body">
                <h5 class="card-title">Article 47</h5>
                <a href="actualite.php?id=47" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 46">
            <div class="card-body">
                <h5 class="card-title">Article 46</h5>
                <a href="actualite.php?id=46" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 45">
            <div class="card-body">
                <h5 class="card-title">Article 45</h5>
                <a href="actualite.php?id=45" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 44">
            <div class="card-body">
                <h5 class="card-title">Article 44</h5>
                <a href="actualite.php?id=44" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 43">
            <div class="card-body">
                <h5 class="card-title">Article 43</h5>
                <a href="actualite.php?id=43" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 42">
            <div class="card-body">
                <h5 class="card-title">Article 42</h5>
                <a href="actualite.php?id=42" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 41">
            <div class="card-body">
                <h5 class="card-title">Article 41</h5>
                <a href="actualite.php?id=41" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/assets/images/default-article.jpg" class="card-img-top" alt="Article 40">
            <div class="card-body">
                <h5 class="card-title">Article 40</h5>
                <a href="actualite.php?id=40" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>

</div>

<?php require_once __DIR__ . "/templates/footer.php"; ?>
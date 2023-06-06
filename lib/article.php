<?php

$articles = [
    ["title" => "PHP vs Python", "description" => "Lorem", "image" => "1-php-vs-python.jpg"],
    ["title" => "React et React Native", "description" => "Lorem", "image" => "2-react-vs-react-native.jpg"],
    ["title" => "Quels outils pour le DevOps", "description" => "Lorem", "image" => "3-devops.png"],
];


function getArticleById(array $articles, int $id) {
    if (isset($articles[$id])) {
        return $articles[$id];
    }
    return false;
}
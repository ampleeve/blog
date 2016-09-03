<?php
    require_once("database.php");
    require_once("models/articles.php");

    $link = dbConnect();
    $article = articlesGet($link, $_GET['id']);

    include ("views/article.php");
?>
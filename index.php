<?php
    require_once("database.php");
    require_once("models/articles.php");

    $link = dbConnect();
    $articles = articlesAll($link);

    include ("views/articles.php");
?>
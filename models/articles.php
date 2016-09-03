<?php

    function articlesAll($link){
        
        //Запрос
        $query = "SELECT * FROM articles order by id DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            
            die(mysqli_error($link));
        //Извлечение из бд
        $n = mysqli_num_rows($result);
        $articles = array();
            
        for ($i=0; $i < $n; $i++ ){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
            return $articles;
    }
     
    function articlesGet($link, $idArticle){
        //Запрос
        $query = sprintf("SELECT * FROM articles WHERE id = %d", (int)$idArticle);
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysql_error($link));
        
        $article = mysqli_fetch_assoc($result);
        
        return $article;
        
    }

    function articlesNew($title, $date, $content){
        
    }

    function articlesEdit($id, $title, $date, $content){
        
    }

    function articlesDelete($id){
        
    }

?>
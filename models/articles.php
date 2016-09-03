<?php

    function articlesAll(){
        
        $art1 = ["id" => 1, "title" => "Title1", "date" => "2016-01-01", "content" => "content1"];
        
        $art2 = ["id" => 2, "title" => "Title2", "date" => "2016-01-01", "content" => "content2"];
        
        $art3 = ["id" => 3, "title" => "Title3", "date" => "2016-01-01", "content" => "content3"];
        
        $art4 = ["id" => 4, "title" => "Title4", "date" => "2016-01-01", "content" => "content4"];
        
        $arr[0]=$art1;
        $arr[1]=$art2;
        $arr[2]=$art3;
        $arr[3]=$art4;
        
        return $arr;
        
    }
     
    function articlesGet($id){
        
    }

    function articlesNew($title, $date, $content){
        
    }

    function articlesEdit($id, $title, $date, $content){
        
    }

    function articlesDelete($id){
        
    }

?>
<?php
require_once 'database-login.php';
session_start();

    if($_POST["dbAccess"] == "addTopic"){
        addTopic($_POST["topic"]);
    };
    if($_POST["dbAccess"] == "getTopic"){
        getTopic();
    };


function addTopic($topicArray){
    $course = $topicArray["course"];
    $chapter = $topicArray["chapter"];
    $title = $topicArray["title"];
    $topic = $topicArray["topic"];
    $tbl = "course_chapters";
      $results =  DB::insert($tbl, array(
            'course' => $course,
            'chapter' => $chapter,
            'title' => $title,
            'topic' => $topic,
        ));
        echo $results;
        }

function getTopic(){
    header('Content-Type: application/json');
    $tbl = "course_chapters"; 
    $results = DB::query("SELECT * FROM $tbl");

    echo json_encode($results);
    DB::disconnect();

}
?>
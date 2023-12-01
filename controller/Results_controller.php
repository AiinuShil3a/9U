<?php
    include_once '../model/ConDB.php';

    $conDB = new ConDB();

    $sportName = $_GET['sport'];

    $resultsData = $conDB->getSportResults($sportName);
?>
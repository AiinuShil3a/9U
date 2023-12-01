<?php
    include_once '../model/ConDB.php';

    $conDB = new ConDB();

    $sportsData = $conDB->getAllSports();
?>
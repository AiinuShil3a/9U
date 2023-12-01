<?php
include_once '../lib/Database.php';

class ConDB
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function getAllSports()
    {
        $sql = "SELECT * FROM sports";
        $result = $this->db->select($sql);
        if ($result) {
            $sportsData = $result->fetch_all(MYSQLI_ASSOC);
            return $sportsData;
        } else {
            return null;
        }
    }

    function getSportResults($sportName) {
        global $conn;
        $sql = "SELECT * FROM results 
                INNER JOIN sports ON results.Sport_ID = sports.Sport_ID
                INNER JOIN universities ON results.University_ID = universities.University_ID
                WHERE sports.Sport_Name = '$sportName'";
        $result = $this->db->select($sql);
        if ($result) {
            $sportResults = $result->fetch_all(MYSQLI_ASSOC);
            return $sportResults;
        } else {
            return null;
        }
    }
}
?>

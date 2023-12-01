<?php
include_once '../lib/Database.php';
class Register
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUniversities()
    {
        $query = "SELECT University_ID, University_Name FROM universities";
        $result = $this->db->select($query);
        return $result;
    }

    public function getSports()
    {
        $query = "SELECT Sport_ID, Sport_Name FROM sports";
        $result = $this->db->select($query);
        return $result;
    }

    public function addAthlete($data, $file)
    {
        $athlete_name = $data['athlete_name'];
        $university_id = $data['university_id'];
        $sport_id = $data['sport_id'];
        $age = $data['age'];
        $gender = $data['gender'];

        $query = "INSERT INTO athletes (athlete_name, university_id, sport_id, age, gender) 
                  VALUES ('$athlete_name', '$university_id', '$sport_id', '$age', '$gender')";

        $result = $this->db->insert($query);

        if ($result) {
            $msg = "Athlete registration successful";
        } else {
            $msg = "Athlete registration failed";
        }

        return $msg;
    }
    public function getAllAthletes()
    {
        $query = "SELECT * FROM athletes";
        return $this->db->selectAll($query);
    }
    public function getUniversityName($universityId)
{
    $query = "SELECT University_Name FROM universities WHERE University_ID = $universityId";
    $result = $this->db->select($query);

    return ($result && $row = mysqli_fetch_assoc($result)) ? $row['University_Name'] : 'N/A';
}

public function getSportName($sportId)
{
    $query = "SELECT Sport_Name FROM sports WHERE Sport_ID = $sportId";
    $result = $this->db->select($query);

    return ($result && $row = mysqli_fetch_assoc($result)) ? $row['Sport_Name'] : 'N/A';
}

}
?>
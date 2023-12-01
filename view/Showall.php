<?php
include_once '../classes/Register.php';
$re = new Register();

$athletes = $re->getAllAthletes();
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <link rel="stylesheet" href="../StyleAthletes .css" />
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'
        integrity='sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N' crossorigin='anonymous' />

    <title>All Athletes </title>
</head>

<body>
    <?php include './Navbar.php'; ?>
    <br />
    <div class='container'>
        <div class='row d-flex justify-content-center'>
            <div class='col-md-12'>
                <div class='card shadow'>
                    <div class='card-header'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <h1>All Athletes Info</h1>
                            </div>
                            <div class='col-md-6 text-right'>
                                <a href='Addform.php' class='btn btn-primary'>Add Student</a>
                                <a href='../index.php' class='btn btn-secondary'>Back to index</a>
                            </div>
                            <div class='card-body'>
                                <?php
                                    if ( $athletes ) {
                                        echo '<table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Athlete Name</th>
                                                <th scope="col">University</th>
                                                <th scope="col">Sport</th>
                                                <th scope="col">Age</th>
                                                <th scope="col">Gender</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                        foreach ( $athletes as $athlete ) {
                                            echo '<tr>
                                                <th scope="row">' . $athlete[ 'Athlete_ID' ] . '</th>
                                                <td>' . $athlete[ 'Athlete_Name' ] . '</td>
                                                <td>' . $re->getUniversityName( $athlete[ 'University_ID' ] ) . '</td>
                                                <td>' . $re->getSportName( $athlete[ 'Sport_ID' ] ) . '</td>
                                                <td>' . $athlete[ 'Age' ] . '</td>
                                                <td>' . $athlete[ 'Gender' ] . '</td>
                                            </tr>';
                                        }
                                        echo '</tbody></table>';
                                    } else {
                                        echo '<p>No athletes found.</p>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Option 1: jQuery and Bootstrap Bundle ( includes Popper ) -->
            <script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js'
                integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj'
                crossorigin='anonymous'></script>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js'
                integrity='sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct'
                crossorigin='anonymous'></script>
</body>

</html>
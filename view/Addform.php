<?php
include_once '../classes/Register.php';
$re = new Register();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $register = $re->addAthlete($_POST, $_FILES);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="../StyleAthletes .css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>Add Athletes</title>
</head>

<body>
    <?php include './Navbar.php'; ?>
    <br />
    <br />
    <br />
    <br />
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card shadow">
                    <?php
          if (isset($register)) {
            ?>
                    <div id="alert-message"
                        class="alert <?= strpos($register, 'successful') !== false ? 'alert-success' : 'alert-danger' ?> alert-dismissible fade show"
                        role="alert">
                        <strong>
                            <?= $register ?>
                        </strong> Check some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <script>
                    // Automatically close the alert after 3 seconds
                    setTimeout(function() {
                        document.getElementById('alert-message').style.display = 'none';
                    }, 3000);
                    </script>
                    <?php
          }
          ?>

                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Add Athlete</h1>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="Showall.php" class="btn btn-primary">Show Athletes</a>
                                <a href="../index.php" class="btn btn-secondary">Back to index</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <label for="athlete_name">Athlete Name</label>
                            <input type="text" name="athlete_name" placeholder="Enter Athlete Name" class="form-control"
                                required />

                            <label for="university_id">University</label>
                            <select name="university_id" class="custom-select custom-select-sm" required>
                                <option selected disabled>Select University</option>
                                <?php
                $universities = $re->getUniversities();
                foreach ($universities as $university) {
                  echo "<option value='{$university['University_ID']}'>{$university['University_Name']}</option>";
                }
                ?>
                            </select>

                            <label for="sport_id">Sport</label>
                            <select name="sport_id" class="custom-select custom-select-sm" required>
                                <option selected disabled>Select Sport</option>
                                <?php
                $sports = $re->getSports();
                foreach ($sports as $sport) {
                  echo "<option value='{$sport['Sport_ID']}'>{$sport['Sport_Name']}</option>";
                }
                ?>
                            </select>

                            <label for="age">Age</label>
                            <input type="text" name="age" placeholder="Age" class="form-control" required />

                            <label for="gender">Gender</label>
                            <select name="gender" class="custom-select custom-select-sm" required>
                                <option selected disabled>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="other">Other</option>
                            </select>

                            <br />
                            <br />

                            <input type="submit" value="Register" class="btn btn-success form-control" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
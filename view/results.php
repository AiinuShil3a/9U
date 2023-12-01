<?php
    include_once '../controller/Results_controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="../Style_result.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>Results</title>
</head>

<body  style="color: #FFF">
    <?php include './Navbar.php'; ?>
    <div class="container">
        <h2><?php echo $sportName  ?> Results</h2>
        <table class="table"  style="color: #FFF">
            <thead>
                <tr>
                    <th>Team</th>
                    <th>Univercity</th>
                    <th>Score</th>
                    <th>Match_Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultsData as $result): ?>
                    <tr>
                        <td><?php echo $result['Team']; ?></td>
                        <td><?php echo $result['University_Name']; ?></td>
                        <td><?php echo $result['Score']; ?></td>
                        <td><?php echo $result['Match_Date']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>

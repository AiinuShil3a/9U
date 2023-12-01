<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="Style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>Index Page</title>
</head>

<body>
    <?php include './view/Navbar.php'; ?>

    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/fa/8e/cc/fa8ecc963424eaa65cf9609a6f0bbdd4.jpg"
                        class="card-img-top" alt="Card Image 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">ตารางการแข่งขันประจำปี 2566</h5>
                        <a href="view/Home.php" class="btn btn-primary mx-2">Check here</a>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.oA-td_ZZHK5EeqIDDMwfYwHaE8?rs=1&pid=ImgDetMain"
                        class="card-img-top" alt="Card Image 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">ลงชื่อสมัครเข้าร่วมแข่งขัน</h5>
                        <a href="view/Addform.php" class="btn btn-primary mx-2">Register Athlete</a>
                        <a href="view/Showall.php" class="btn btn-warning mx-2">Athlete Info</a>
                    </div>
                </div>
            </div>
        </div>
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
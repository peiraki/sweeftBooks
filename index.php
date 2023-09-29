<?php 
    include('php/functions.php')  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="img/icons/favicon.png">
    <!-- local classes -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/import.css">
    <!-- font awesame -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>წიგნები</title>
</head>
<body>
    <?php include('content/navBar.php') ?>
    <div class="headerImg">
        <img src="img/mainBackgorund.jpeg" alt="dambldore">
        <h2 class="absolute-centered">Michael Gambon, veteran actor who played Dumbledore In ‘Harry Potter’ films, dies at age 82</h2>
    </div>
    <div class="mainContent">
        <div class="left">

        </div>
        <div class="right">

        </div>
    </div>
    <div class="booksOnMain">
        <h2>Here are Our Books</h2>
        <div class="card-group">
            <div class="card">
                <img src="img/bookImgs/genius.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">The Genius</h5>
                <p class="card-text">The Project Gutenberg EBook of The "Genius", by Theodore Dreiser</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 1 week ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="img/bookImgs/sweeft.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Sweeft Digital</h5>
                <p class="card-text">Start more than a job - Join our team of 1200+ Developers</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 10 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="img/bookImgs/rich.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Think and grow rich</h5>
                <p class="card-text">Napoleon Hill, then a young special investigator for a nationally known business magazine, was sent to interview Andrew Carnegie.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 1 month ago</small></p>
                </div>
            </div>
        </div>
        <p class="align-right"><a href="books.php" class="btn m-1 btn-dark">Books page</a></p>
    </div>
</body>

<!-- bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>

<?php 
    
?>
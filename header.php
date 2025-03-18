<?php
include("actions/fetch.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awsome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <style>
        * {
            font-family: "Poppins", sans-serif;
            transition: cubic-bezier(0.23, 1, 0.320, 1) 0.3s;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="" style="font-family: 'Cookie', cursive; font-size: 28px; color:rgb(70, 154, 188);">Mustafizur's Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="transition: color 0.3s ease-in-out;" onmouseover="this.style.color='rgb(70, 154, 188)'" onmouseout="this.style.color='white'">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userinput.php" style="transition: color 0.3s ease-in-out;" onmouseover="this.style.color='rgb(70, 154, 188)'" onmouseout="this.style.color='white'">User Input</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="transition: color 0.3s ease-in-out;" onmouseover="this.style.color='rgb(70, 154, 188)'" onmouseout="this.style.color='white'">
                            Links
                        </a>
                        <ul class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-light" href="#">Login</a></li>
                            <li><a class="dropdown-item text-light" href="#">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 bg-dark text-secondary border-info" type="text" placeholder="Search..." aria-label="Search" style="border-radius: 20px;" name="search" value="<?php echo isset($_GET["search"]) ?  $_GET["search"] : '' ?>">
                    <button class="btn btn-outline-info" type="submit" style="border-radius: 20px; transition: background-color 0.3s ease-in-out;" onmouseover="this.style.backgroundColor='rgb(70, 154, 188)'" type="submit" onmouseout="this.style.backgroundColor='transparent'">Search</button>
                    <?php if (isset($_GET["search"])) { ?>
                        <a class="btn btn-danger mx-2 rounded-pill" href="reports.php">Reset</a>
                    <?php } ?>
                </form>
            </div>
        </div>
    </nav>
<?php
include("header.php");

include("actions/database.php");

include("actions/fetch.php");

$data = "SELECT * FROM `data`";

$result = $connect->query($data);

$row = $result->fetch_assoc();
?>
<style>
    #index_slider {
        height: 90vh;
    }

    .carousel-inner {
        height: 90vh;
    }

    .carousel-inner img {
        object-fit: cover;
    }

/* Card container */
.custom-card {
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Image styling */
.custom-card .card-img-top {
    border-radius: 10px;
    height: 200px;
    object-fit: cover;
    width: 100%;
}

/* Title and description styling */
.custom-card .card-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-top: 15px;
}

.custom-card .card-text {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}

/* Button styling */
.custom-card .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    padding: 10px 25px;
    font-size: 1rem;
    border-radius: 25px;
    transition: background-color 0.3s ease;
}

.custom-card .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Hover effect */
.custom-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}



</style>
<section id="index_slider">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://c8.alamy.com/comp/2A7CRF4/html-text-in-neon-style-placed-in-technological-advanced-and-futuristic-background-with-codes-2A7CRF4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://t3.ftcdn.net/jpg/04/93/78/48/360_F_493784893_cX6SXtINJnN8SEracNXi6xMnag7HKA1N.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.aceinfoway.com/blog/wp-content/uploads/2023/05/Django-vs-Laravel.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<br>
<br>
<br>
<!-- here is blog section that will show interactivly -->
<?php if ($row['status'] == 1) { ?>
    <section class="row justify-content-center align-items-center gap-5 g-5">
    <h1 class="text-center my-5">Here is my Blog.</h1>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="card col-md-3 p-3 custom-card">
            <!-- Example default image -->
            <img src="path_to_image/<?php echo $row['image']; ?>" alt="Blog Image" class="card-img-top rounded-3">
            <h5 class="card-title mt-3 text-center"><?php echo $row['title'] ?></h5>
            <p class="card-text text-center"><?php echo $row['short_des'] ?></p>
            <a href="blog_detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-md w-75 d-block mx-auto mb-3">Blog Details</a>
        </div>
    <?php } ?>
    <?php } else { ?>
        <p class="text-danger text-center my-5">No blog is activated! <br> please activate your blog!</p>
    <?php } ?>
</section>



    <?php
    include("footer.php");
    ?>
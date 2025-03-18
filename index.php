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

<!-- here is blog section that will show interactivly -->
<?php if ($row['status'] == 1) { ?>
    <section>
        <h1 class="text-center my-5">Here is my Blog.</h1>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="card">
                <img src="" alt="">
                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                <p class="card-text"><?php echo $row['short_des'] ?></p>
                <p class="card-text"><?php echo $row['description'] ?></p>
                <a href="">Blog Details</a>
            </div>
        <?php } ?>

    <?php } else { ?>
        <p class="text-danger text-center my-5">No blog is activated! <br>
            please active your blog!
        </p>
    <?php } ?>
    </section>


    <?php
    include("footer.php");
    ?>
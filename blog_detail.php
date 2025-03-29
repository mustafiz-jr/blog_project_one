<?php
include("header.php");
include("actions/database.php");

$data = sprintf("SELECT * FROM `data` WHERE `id` = %s ", $_GET['id']);
$result = $connect->query($data);
$row = $result->fetch_assoc();
?>
<main>
    <section class="container my-5">
        <div class="card w-75 m-auto p-5 shadow-lg rounded-lg" style="background-color: #f9f9f9;">
            <!-- Image placeholder -->
            <img src="https://img.freepik.com/free-photo/modern-futuristic-sci-fi-background_35913-2150.jpg?semt=ais_hybrid" alt="Card Image" class="card-img-top rounded-3 mb-4" style="height: 300px; object-fit: cover;">
            <h5 class="card-title text-center text-primary"><?php echo $row['title'] ?></h5>
            <p><?php echo $row['created_at'] ?></p>
            <p class="card-subtitle text-muted text-center mb-3"><?php echo $row['short_des'] ?></p>
            <p class="card-text text-dark" style="font-size: 1.1rem;"><?php echo $row['description'] ?></p>
        </div>
    </section>
</main>
<?php
include("footer.php");
?>
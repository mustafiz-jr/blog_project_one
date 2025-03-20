<?php
include("header.php");

include("actions/database.php");

$data = sprintf("SELECT * FROM `data` WHERE `id` = %s " , $_GET['id']);

$result = $connect->query($data);
$row = $result->fetch_assoc(); 
?>
<main>
    <section class="container">
        <div class="card w-75 m-auto">
        <img src="" alt="">
        <h5><?php echo $row['title'] ?></h5>
        <p><?php echo $row['short_des'] ?></p>
        <p><?php echo $row['description'] ?></p>
        </div>
    </section>
</main>
<?php
include("footer.php");
?>
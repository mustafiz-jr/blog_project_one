<?php 
include("actions/database.php");


$update = sprintf("SELECT * FROM `data` WHERE `id`=%s",$_GET['id']);

$result = $connect->query($update);
$row = $result->fetch_assoc();

?>

<?php
include("header.php");
?>

<main>
    <section>
        <h2 class="my-5 text-center">Update your Blog Information</h2>
        <form action="actions/edit.php" method="post" class="container p-5" id="submit">
            <input type="text" name="title" class="w-100 form-control border-0 border-bottom border-dark p-2" value="<?php echo $row['title'] ?>">
            <input type="hidden" name="id" class="w-100 form-control border-0 border-bottom border-dark p-2" value="<?php echo $row['id'] ?>">
            <br>
            <br>
            <textarea name="short_des" id="short_des" value="<?php echo $row['short_des'] ?>" class="bg-info text-danger"></textarea>
            <br>
            <textarea name="description" id="description" value="<?php echo $row['description'] ?>"></textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-md btn-secondary">Submit</button>
        </form>
    </section>
</main>



<?php
include("footer.php");
?>
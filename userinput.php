<?php
include("header.php");
?>

<main>
    <section>
        <h2 class="my-5 text-center">Include your Blog Information</h2>
        <form action="" method="post" class="container p-5" id="submit">
            <input type="text" class="w-100 form-control border-0 border-bottom border-dark p-2" placeholder="Enter your Title ....">
            <br>
            <br>
            <textarea name="" id="short_des" placeholder="Enter your Short description......." class="bg-info text-danger"></textarea>
            <br>
            <textarea name="" id="description" placeholder="Enter your description......."></textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-md btn-secondary">Submit</button>
        </form>
    </section>
</main>























<?php
include("footer.php");
?>
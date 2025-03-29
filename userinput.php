<?php
include("header.php");
?>

<style>
    #editor_container {
        height: 200px;
    }

    #editor_container_two {
        height: 200px;
    }
</style>

<main>
    <section>
        <h2 class="my-5 text-center">Include your Blog Information</h2>
        <form action="actions/sentdata.php" method="post" class="container p-5" id="submit">
            <input type="text" name="title" class="w-100 form-control border-0 border-bottom border-dark p-2" placeholder="Enter your Title ....">
            <br>
            <br>

            <textarea name="short_des" id="short_des" placeholder="Enter your Short description......." class="bg-info text-danger"></textarea>
            <br>
            <textarea name="description" id="description" placeholder="Enter your description......."></textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-md btn-secondary">Submit</button>
            <a href="reports.php" class="btn btn-secondary">Reports</a>
        </form>
    </section>
</main>



<?php
include("footer.php");
?>
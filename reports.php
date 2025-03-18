<?php
include("actions/fetch.php");
include("header.php");
?>

<style>
    /* Overall body styling */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
        color: #333;
    }

    /* Main content styling */
    main {
        padding: 40px 30px;
        background-color: #fff;
        border-radius: 10px;
    }

    /* Heading styling */
    h2 {
        color: #2c3e50;
        font-size: 2.5rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 40px;
        text-transform: uppercase;
    }

    /* Table styling */
    .beautiful-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.1);
    }

    .beautiful-table thead {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        text-align: left;
        font-size: 1.1rem;
    }

    .beautiful-table th,
    .beautiful-table td {
        padding: 16px 20px;
        text-align: left;
        font-size: 1rem;
        border-bottom: 1px solid #ddd;
    }

    /* Odd and even row styling for contrast */
    .beautiful-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    /* Hover effect for rows */
    .beautiful-table tbody tr:hover {
        background-color: #ecf0f1;
        transition: transform 0.2s ease-in-out;
    }

    /* Styling the table header */
    .beautiful-table th {
        font-size: 1.2rem;
        font-weight: 500;
    }

    /* Delete button styling */
    .delete-btn,
    .edit-btn {
        padding: 8px 18px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        text-align: center;
        display: inline-block;
        font-size: 1rem;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    /* Delete button */
    .delete-btn {
        background-color: #e74c3c;
        color: #fff;
    }

    .delete-btn:hover {
        background-color: #c0392b;
        color: #7f8c8d;

        transform:scale(1.05);
    }

    /* Edit button */
    .edit-btn {
        background-color: #3498db;
        color: #fff;
    }

    .edit-btn:hover {
        background-color:rgb(68, 180, 255);
        color: #7f8c8d;
        transform:scale(1.05);

    }

    /* No data styling */
    .no-data {
        text-align: center;
        font-size: 1.2rem;
        color: #7f8c8d;
        font-style: italic;
    }

    /* Smooth animation effect for the table rows */
    .beautiful-table tbody tr {
        transition: transform 0.3s ease, background-color 0.3s ease;
    }
</style>

<main>
    <section>
        <h2 class="text-center my-5">All Blog Data</h2>

        <?php if ($result->num_rows > 0) { ?>
            <table class="beautiful-table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['short_des']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td>
                                <?php if ($row['status'] == 0) { ?>
                                    <a href="actions/on_off.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">
                                        <?php echo $row['status'] ?> > ON
                                    </a>
                                <?php } else { ?>
                                    <a href="actions/on_off.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">
                                        <?php echo $row['status'] ?> > OFF
                                    </a>
                                <?php } ?>
                            </td>
                            <td><a href="actions/delete.php?id=<?php echo $row['id']; ?>" class="delete-btn">Delete</a></td>
                            <td><a href="updata.php?id=<?php echo $row['id']; ?>" class="edit-btn">Edit</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p class="no-data">No data is collected!</p>
        <?php } ?>
    </section>
    <div>
        <a href="userinput.php" class="btn btn-secondary">Add more Blog</a>
    </div>
</main>
<br>
<br>
<br>
<br>
<br>
<?php
include("footer.php");
?>
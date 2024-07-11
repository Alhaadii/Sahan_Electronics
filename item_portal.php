<?php include("conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include('header.php') ?>
    <div class="main">
        <h1 class="bg-secondary text-uppercase font-monospace text-light text-center fw-bold p-4">Items View</h1>
        <table class="table table-striped shadow-lg mt-4 rounded-3 overflow-scroll table-responsive">
            <thead class="text-uppercase font-monospace text-primary fw-bold ">
                <tr>
                    <th>Id</th>
                    <th>item name</th>
                    <th>item qyt</th>
                    <th>item price</th>
                    <th>item total price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlQuery = "select *from items";
                $result = $connection->query($sqlQuery);
                $htmlTable = "";
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $htmlTable .= "<tr>";
                        $htmlTable .= "<td>" . $row['itemid'] . "</td>";
                        $htmlTable .= "<td>" . $row['itemname'] . "</td>";
                        $htmlTable .= "<td>" . $row['qyt'] . "</td>";
                        $htmlTable .= "<td>" . $row['price'] . "</td>";
                        $htmlTable .= "<td>" . $row['totalprice'] . "</td>";
                        $htmlTable .= "<td>" . '<a href="" class="btn btn-info mx-3">Update</a>' . '<a href="" class="btn btn-danger">Delete</a>' . "</td>";
                        $htmlTable .= "</tr>";
                    }
                    echo $htmlTable;
                } else {
                    echo "No Items found" . $connection->error;
                }



                ?>
            </tbody>

        </table>
    </div>

    <?php include('footer.php') ?>


    <!-- Boostrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
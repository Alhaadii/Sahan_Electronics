<?php include("conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include("header.php");
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $name = $_GET["name"];
        $qyt = intval($_GET["qyt"]);
        $price = floatval($_GET["price"]);
    } else {
        $id = "";
        $name = "";
        $qyt = "";
        $price = "";
    }

    ?>
    <div class="main">
        <h1 class="text-uppercase text-light p-2 text-center bg-secondary ">Register Item</h1>
        <div class="row justify-content-center">
            <div class="">
                <form action="operation.php" method="post" class="p-4 shadow-lg">
                    <input class="mt-2 form-control" type="text" name="id" id="id" placeholder="Item Id" value="<?php echo $id ?>">

                    <input class="mt-2 form-control" type="text" name="name" id="name" placeholder="Item Name" value="<?php echo $name ?>">

                    <input class=" mt-2 form-control" type="number" name="qyt" id="qyt" placeholder="Item Quantity" value="<?php echo $qyt ?>">
                    <input class=" mt-2 form-control" type="number" name="price" id="price" placeholder="Item Price" value="<?php echo $price ?>">
                    <button class=" btn btn-primary mt-2" type="reset">clear</button>
                    <div class="float-end">
                        <button class="btn btn-success mt-2" type="submit" name="save">Save changes</button>
                        <button class="btn btn-info mt-2" type="submit" name="edit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include("footer.php") ?>
    <!-- Boostrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
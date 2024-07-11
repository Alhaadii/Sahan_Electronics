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
    <?php include("header.php") ?>
    <div class="main">
        <h1 class="text-uppercase text-light p-2 text-center bg-secondary ">Register Item</h1>
        <div class="row justify-content-center">
            <div class="shadow-lg opacity p-4 mt-2">
                <form action="operation.php" method="post">
                    <input type="hidden" name="operation" value="add">
                    <div class="form-group">
                        <label for="itemName">Item Name</label>
                        <input type="text" class="form-control" id="itemName" name="itemName" required>
                    </div>
                    <div class="form-group">
                        <label for="itemQuantity">Item Quantity</label>
                        <input type="number" class="form-control" id="itemQuantity" name="itemQuantity" required>
                    </div>
                    <div class="form-group">
                        <label for="itemPrice">Item Price</label>
                        <input type="number" class="form-control" id="itemPrice" name="itemPrice" required>
                    </div>
                    <button type="reset" class="btn btn-secondary mt-2 float-start">Reset</button>
                    <div class="float-end">
                        <button type="submit" class="btn btn-info mt-2  mx-2">Save changes</button>
                        <button type="submit" class="btn btn-success mt-2 ">Edit</button>
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
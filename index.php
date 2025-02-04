<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- <?php include("./header.php") ?> -->
    <div class="main">

        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-8 p-4 bg-light w-50 rounded-3 shadow-lg">
                    <h1 class="text-dark font-monospace my-3 text-center">Login</h1>
                    <form action="operation.php" method="post">
                        <input type="text" placeholder="User Name" class="form-control p-3 opacity-25 font-monospace w-100 mb-2" name="user" id="" />
                        <input type="password" placeholder="Password" class="form-control p-3 opacity-25 font-monospace w-100 mb-2" name="pass" id="" />
                        <button class="btn btn-primary btn-lg font-monospace w-100" name="submit" type="submit">
                            Login
                        </button>
                        <a class="d-block text-center" href="users.php">register a username</a>
                    </form>
                </div>
            </div>
        </div>




    </div>

    <?php include("footer.php") ?>
    <!-- Boostrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
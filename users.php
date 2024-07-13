<?php include("conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <h1 class="text-uppercase bg-info p-2 text-center"> Registeration page</h1>
        <div class="mt-2 row justify-content-center align-items-center">
            <div class="col-6 shadow-lg p-5">
                <form action="operation.php" method="post">
                    <div class="mb-3">
                        <?php

                        $sql = "SELECT * FROM USERS";
                        $result = $connection->query($sql);
                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'] + 1;
                        ?>
                                <input type="hidden" readonly class="form-control" name="id" id="id" value="<?php echo $id; ?>">

                        <?php
                            }
                        } else {
                            echo "Error: " . $connection->error;
                        }


                        ?>
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary d-block w-100 btn-lg">Register</button>
                    <a class="d-block text-center" href="index.php">Already have an account</a>

                </form>
            </div>
        </div>
    </div>





    <!-- Boostrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
<?php
session_start();
function db()
{
    return new PDO('mysql:host=localhost;dbname=sky_perfume;charset=utf8', 'root', '');
}

$err = '';
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $result = '';
    if (!empty($name) && !empty($username) && !empty($password)) {
        $result = db()->prepare("INSERT INTO users (name, username, password) VALUES (:name, :username, :password)");
        $result = $result->execute([':name' => $name, ':username' => $username, ':password' => $password]);
        if ($result){
            $_SESSION['username'] = $username;
            header('Location: index.php');
        }
    }else{
        $err = 'Please fill in all the required fields!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
</head>

<body>

    <!-- Section: Design Block -->
    <section >
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%);height: 100vh;">
            <div class="container">
                <?php if ($err):?>
                    <div class="alert alert-danger"><?= $err ?></div>
                <?php endif;?>
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form method="post">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form3Example3">Name</label>
                                            <input name="name" type="text" id="form3Example3" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- Email input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3">User Name</label>
                                        <input name="username" type="text" id="form3Example3" class="form-control" />
                                    </div>
                                    <!-- Password input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4">Password</label>
                                        <input name="password" type="password" id="form3Example4" class="form-control" />
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-block mb-4">
                                        Sign up
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/librerias/bootstrap5/bootstrap.min.css">
    <title>Login de usuario</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-3">Login de usuario</h2>
                <form action="./procesos/auth/login.php" method="post">
                    <label for="email">Email</label>
                    <input type="Email" name="email" id="email" class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <button class="btn btn-outline-primary mt-3">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
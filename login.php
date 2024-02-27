</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Gallery Mya</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
<style>
body {
  background-image: url('bg-awan1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style> 


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="text-center">
                            <h5>Halaman Login</h5>
                        </div>
                        <form action="proses_login.php" method="post">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <div class="d-grid mt-2">
                                <button class="btn btn-outline-info" type="submit">Login</button>
                            </div>
                        </form>
                        <hr>
                        <p>Belum punya akun ? <a href="register.php">Silahkan Register dulu</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>UKK MYA | RPL 2024</p>
    </footer>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
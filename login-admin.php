<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN ADMISNISTRATOR</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
             <div class="col-lg-3 col-sm-1"></div>
                 <div class="col-lg-6 col-sm-10">
                    <div class="container border border-gray rounded mt-5">
                         <div class="login-box p-3">
                            <center><h2>ADMISNISTRATOR LOGIN</h2></center>
                             <form action="" method="post">
                                    <div class="mb-3 mt-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
                             </form>    
                         </div>
                    </div>
                 </div>
             <div class="col-lg-3 col-sm-1"></div>
         </div>
    </div>
    <?php
    // set variabel user dan kata sandi

    include('koneksi.php');


    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password= $_POST['password'];

        $query = mysqli_query($koneksi, "SELECT * FROM user 
        WHERE username = '$username' && password = '$password'");
        // if(($user == $_POST['username'])&&($katasandi == $_POST['password'])){
        if (mysqli_num_rows($query)>0) {
            header('location:sukses.php');
        }else{
            ?>
                <script>
                    alert("username / password SALAH !!!")
                </script>
                <?php
        }
    }
    
    ?>
</body>
</html>
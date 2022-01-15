<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,300;1,200&display=swap');
        html,body{
            width:100%;
            font-family: 'Fira Sans Condensed', sans-serif;
        }
        .login-container{
            width:350px;
            margin:100px auto auto auto;
            border:solid 15px #666;
            padding:25px;
            background:#999;
            border-radius:12px;
        }
        .title{
            text-align:center;
            color:white;
            text-shadow : 2px 2px 3px rgba(0,0,0,9);
        }
        .input-label{
            width:200px;
            display:block;
        }
        .input{
            padding:5px 0px;
            color:white;
        }
        input{
            width:100%;
            background-color:#fff;
        }
        button{
            background-color:#888;
            color:#ffff;
            padding:15px;
        }
        button:hover{
            background-color:#999;
            text-decoration:bold;
            transition-delay:0.1s;
            box-shadow : 1px 1px 2px rgba(0,0,0,9);
        }
    </style>
</head>
<body>
    <div class="login-container">
    <div class="title">
    <h1>LOGIN PENGGUNA</h1>
    </div>
    <form action="" method="post">
    <div class="input">
    <label for="username"class="input-label">Nama Pengguna</label>
    <input type="text" id="username" name="username" placeholder="Nama Pengguna">
    </div>
    <br>
    <div class="input">
    <label for="password" class="input-label">kata sandi</label>
    <input type="password" id="password" name="password">
    </div>
    <div class="input">
        <button type="submit" class="button" name="login">LOGIN</button>
    </div>
    </form>
    </div>
</body>
</html>
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
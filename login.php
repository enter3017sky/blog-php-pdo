<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <?php 
        $web_title = 'Login & Register « enter3017sky Blog';
        include_once './inc/head.php'; 
    ?>
<body>
<?php include './inc/navbar.php' ?>
    <div class="container">
    <header class="jumbotron text-center bg-white">
        <h1>Login & Sign up</h1>
    </header>
        <div class="form_wrap">
            <form class="card w-75 p-4 m-3 mx-auto box_shadow" method="POST" action="./handle_login_register.php">
                <h3>Login</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputUsername">Username</label>
                        <input type="username" class="form-control" id="inputUsername" placeholder="Enter a username" name='username'>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Enter a password" name='password'>
                    </div>
                </div>
                <div class="form-row mx-auto col-md-2">
                    <button type="submit" class="btn btn-primary" name='submit' value='login' >Login</button>
                </div>
            </form>
            <!--  -->
            <div class='mt-5'></div>
            <!--  -->
            <form class="card w-75 p-4 m-3 mx-auto box_shadow" method="POST" action="./handle_login_register.php">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>提示：</strong>未開放註冊！
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h3>Create an account</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="username" class="form-control" id="username" placeholder="Enter a username" name='username'>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Enter a password" name='password'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="Email" class="form-control" id="inputEmail" placeholder="example@email.com" name='email'>
                </div>
                <div class="form-row col-md-2 mx-auto">
                    <button type="submit" class="btn btn-primary" value='register' name='submit' >Register</button>
                </div>
            </form>
            <!--  -->
            <div class='mt-5'></div>
            <!--  -->
        </div>
    </div>
</body>
</html>


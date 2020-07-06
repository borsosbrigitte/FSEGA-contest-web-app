<?php
include 'header.php';
session_start();
include 'navbar.php';
?>
    <div class="input-container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Log In</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="do_login.php">
                        <?php if(isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger" role="alert">
                                Helytelen adatok!
                            </div>
                            <?php unset($_SESSION['error']);
                        endif?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Csapatnév" name="csapatnev">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Jelszó" name="pass">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                    <a class="nav-link" href="forgotten_password.php">Elfelejtett jelszó?</a>
                </div>

            </div>
        </div>
    </div>



<?php
include 'footer.php';
?>
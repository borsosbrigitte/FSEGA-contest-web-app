<?php
include 'header.php';
session_start();
include 'navbar.php';
?>

<div class="input-container">
	<div class="d-flex justify-content-center h-100">
		<div class="register-card">
			<div class="card-header">
				<h3>Regisztrálj!</h3>
			</div>
			<div class="card-body">
				<form method="post" action="do_register.php">
					<?php if(isset($_SESSION['register_error'])): ?>
						<div class="alert alert-danger" role="alert">
							Helytelen adatok!
						</div>
						<?php unset($_SESSION['register_error']);
					endif?>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Csapat neve" name="csapatnev">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Tanár neve" name="tanarnev">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Iskola" name="iskola">

                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Helység" name="helyseg">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Első diák csaladneve" name="lastname1">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Első diák keresztneve" name="firstname1">
                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Első diák szakja" name="szak1">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Első diák évfolyama" name="ev1">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Első diák e-mail címe" name="email1">

                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Első diák telefonszáma" name="tel1">
                    </div>

<!--                    Second student-->
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Második diák csaladneve" name="lastname2">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Második diák keresztneve" name="firstname2">
                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Második diák szakja" name="szak2">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Második diák évfolyama" name="ev2">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Második diák e-mail címe" name="email2">

                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Második diák telefonszáma" name="tel2">
                    </div>

<!--                    Third Student-->
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Harmadik diák csaladneve" name="lastname3">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Harmadik diák keresztneve" name="firstname3">
                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Harmadik diák szakja" name="szak3">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Harmadik diák évfolyama" name="ev3">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Harmadik diák e-mail címe" name="email3">

                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Harmadik diák telefonszáma" name="tel3">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Jelszó" name="password">
                    </div>

					<div class="form-group">
						<input type="submit" value="Register" class="btn float-right login_btn">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<?php
include 'footer.php';
?>

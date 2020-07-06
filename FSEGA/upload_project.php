<?php
include 'header.php';
session_start();
include 'navbar.php';


?>

<div class="input-container">
    <div class="d-flex justify-content-center h-100">
        <div class="upload-card">
            <div class="card-header">
                <h3>Feltöltés</h3>
            </div>
            <div class="card-body">
                <form method="post" action="do_upload.php" enctype="multipart/form-data">
					<?php if(isset($_SESSION['upload_error'])): ?>
                        <div class="alert alert-danger" role="alert">
                            Sikertelen feltöltés!
                        </div>
						<?php unset($_SESSION['upload_error']);
					endif?>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Projekt címe" name="project-title">

                    </div>

                    <div class="input-group form-group">

                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span>
                        </div>
                        <select class="form-control" name="fordulo">
                            <option value="elso" >Első online</option>";
                            <option value="masodik" >Második online</option>";
                            <option value="donto" >Döntő</option>";

                        </select>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-file-upload"></i></span>
                        </div>
                        <input type="file" class="form-control" id="file-upload" name="file">

                    </div>

                    <div class="form-group">
                        <input type="submit" value="Upload" class="btn float-right login_btn">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


<?php
include 'footer.php';
?>

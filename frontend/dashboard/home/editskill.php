<?php
include '../../../backend/config/db.php';
include "../master/header.php";
include "../../public/fonts/fonts.php";

if (isset($_GET['editskill'])) {
    $id = $_GET['editskill'];
    $select_query = "SELECT * FROM education WHERE id='$id'";
    $connect = mysqli_query($db_connect, $select_query);
    $skill = mysqli_fetch_assoc($connect);
}

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Update Your <?= $skill['degree'] ?> Skill</h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card d-flex gap-3">
            <div class="card-header">
                <h3>Skill</h3>
            </div>
            <form action="store.php?editskill=<?= $skill['id'] ?>" method="POST">
                <div class="card-body">
                    <h5 class="form-label">Degree</h5>
                    <input type="text" name="degree" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?= $skill['degree'] ?>">
                    <h5 class="form-label mt-5">Passing Year</h5>
                    <input type="text" name="year" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?= $skill['year'] ?>">
                    <h5 class="form-label mt-5">Skill's Ratio</h5>
                    <input type="text" name="ratio" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?= $skill['ratio'] ?>">
                    <button type="submit" name="editskill" class="btn btn-primary mt-3"><i
                            class="material-icons">add</i>Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>

    let input = document.querySelector('#inputIcon');
    function myFun(e) {
        input.value = e.target.classList.value;
    }
</script>

<?php

include "../master/footer.php";

?>
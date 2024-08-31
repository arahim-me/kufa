<?php
include '../../../backend/config/db.php';
include "../master/header.php";
include "../../public/fonts/fonts.php";

if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $select_query = "SELECT * FROM services WHERE id='$id'";
    $connect = mysqli_query($db_connect, $select_query);
    $service = mysqli_fetch_assoc($connect);
}

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Edit <?= $service['title'] ?> Service</h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card d-flex gap-3">
            <div class="card-header">
                <h3>service</h3>
            </div>
            <form action="store.php?update_id=<?= $service['id'] ?>" method="POST">
                <div class="card-body">
                    <h5 class="form-label">Title</h5>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?= $service['title'] ?>">
                    <h5 class="form-label mt-5">Description</h5>
                    <textarea type="text" rows="5" name="description"
                        class="form-control"> <?= $service['description'] ?> </textarea>
                    <h5 class="form-label mt-5">Icon</h5>
                    <input type="text" readonly name="icon" class="form-control" id="inputIcon"
                        value="<?= $service['icon'] ?>">
                    <div class="card my-3">
                        <div class="card-header">
                            <h5>Select Icons,</h5>
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:500px;">
                            <?php foreach ($fonts as $font): ?>
                                <span class="m-2 fa-2x">
                                    <i class="<?= $font ?>" onclick="myFun(event)"></i>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <button type="submit" name="update" class="btn btn-primary mt-3"><i
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
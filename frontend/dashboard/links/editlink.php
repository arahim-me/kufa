<?php
include '../../../backend/config/db.php';
include "../master/header.php";
include "../../public/fonts/fonts.php";

if (isset($_GET['editlink'])) {
    $id = $_GET['editlink'];
    $select_query = "SELECT * FROM links WHERE id='$id'";
    $connect = mysqli_query($db_connect, $select_query);
    $link = mysqli_fetch_assoc($connect);
}

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Edit <?= $link['name'] ?> link</h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card d-flex gap-3">
            <div class="card-header">
                <h3>link</h3>
            </div>
            <form action="store.php?editlink=<?= $link['id'] ?>" method="POST">
                <div class="card-body">
                    <h5 class="form-label">Site's Name</h5>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?= $link['name'] ?>">
                    <h5 class="form-label mt-5">Link's Address</h5>
                    <input type="text" name="address" class="form-control" value="<?= $link['address']?>">
                    <h5 class="form-label mt-5">Icon</h5>
                    <input type="text" readonly name="icon" class="form-control" id="inputIcon"
                        value="<?= $link['icon'] ?>">
                    <div class="card my-3">
                        <div class="card-header">
                            <h5>Select Icons,</h5>
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:500px;">
                            <?php foreach ($icons as $icon): ?>
                                <span class="m-2 fa-2x">
                                    <i class="<?= $icon ?>" onclick="myFun(event)"></i>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <button type="submit" name="editlink" class="btn btn-primary mt-3"><i
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
<?php
include '../../../backend/config/db.php';
include "../master/header.php";
include "../../public/fonts/fonts.php";

if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $query = "SELECT * FROM projects WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $project = mysqli_fetch_assoc($connect);
}

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Edit <?= $project['title'] ?> Service</h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card d-flex gap-3">
            <div class="card-header">
                <h3>project</h3>
            </div>
            <form action="store.php?update_id=<?= $project['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <h5 class="form-label">Title</h5>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?= $project['title'] ?>">
                        <h5 class="form-label">Category</h5>
                        <input type="text" name="category" class="form-control" value="<?= $project['category'] ?>">
                    <h5 class="form-label mt-5">Description</h5>
                    <textarea type="text" rows="5" name="description"
                        class="form-control"> <?= $project['description'] ?> </textarea>
                    <h5 class="form-label mt-5">Image</h5>
                    <div class="card my-3">
                        <div class="card-header">
                            <h5>Project's Image</h5>
                        </div>
                        <picture class="d-block my-4 d-flex justify-content-center">
                            <img id="displayImg" src="../../public/uploads/projects/<?= $project['image'] ?>"
                                alt="Demo Image" style="width: 100%; height:350px; object-fit:contain;">
                        </picture>
                        <input type="file" name="image" class="form-control" id="inputImg"
                            onchange="document.getElementById('displayImg').src = window.URL.createObjectURL(this.files[0])"
                            aria-describedby="emailHelp">
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
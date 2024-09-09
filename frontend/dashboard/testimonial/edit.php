<?php
include '../../../backend/config/db.php';
include "../master/header.php";
include "../../public/fonts/fonts.php";

if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $query = "SELECT * FROM testimonials WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $testimonial = mysqli_fetch_assoc($connect);
}

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Edit <?= $testimonial['name'] ?> testimonial</h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card d-flex gap-3">
            <div class="card-header">
                <h3>Testimonial</h3>
            </div>
            <form action="store.php?update_id=<?= $testimonial['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <h5 class="form-label">Name</h5>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?= $testimonial['name'] ?>">
                    <h5 class="form-label mt-5">text</h5>
                    <textarea type="text" rows="5" name="text"
                        class="form-control"> <?= $testimonial['text'] ?> </textarea>
                    <h5 class="form-label">Designation</h5>
                    <input type="text" name="designation" class="form-control" value="<?= $testimonial['designation'] ?>">
                    <h5 class="form-label mt-5">Image</h5>
                    <div class="card my-3">
                        <div class="card-header">
                            <h5>Testimonial's Image</h5>
                        </div>
                        <picture class="d-block my-4 d-flex justify-content-center">
                            <img id="displayImg" src="../../public/uploads/testimonials/<?= $testimonial['image'] ?>"
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
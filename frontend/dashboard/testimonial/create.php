<?php

include "../master/header.php";
include "../../public/fonts/fonts.php";

?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Add New Review/Testimonial</h1>
                    </div>
                </div>
            </div>

            <!-- App content here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Review</h3>
                        </div>
                        <form action="store.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="title"
                                    placeholder="Enter name...">
                                <label for="categories" class="form-label">Designateion</label>
                                <input type="text" name="designation" class="form-control" id="categories"
                                    placeholder="Enter designation...">
                                <label for="description" class="form-label">Text</label>
                                <textarea type="text" rows="5" name="text" class="form-control" id="description"
                                    placeholder="Review text..."></textarea>
                                <picture class="d-block my-4 d-flex justify-content-center">
                                    <img id="displayImg" src="../../public/uploads/projects/default.png"
                                        alt="Demo Image" style="width: 100%; height:500px; object-fit:contain;">
                                </picture>
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="inputIcon"
                                    placeholder="Project image..."
                                    onchange="document.getElementById('displayImg').src = window.URL.createObjectURL(this.files[0])">

                                <button type="submit" name="add" class="btn btn-primary mt-3"><i
                                        class="material-icons">add</i>Add</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
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
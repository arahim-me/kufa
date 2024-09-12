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
                        <h1>Create New Project</h1>
                    </div>
                </div>
            </div>

            <!-- App content here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Project</h3>
                        </div>
                        <form action="store.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Project name...">
                                <label for="categories" class="form-label">Categories</label>
                                <input type="text" name="category" class="form-control" id="categories"
                                    placeholder="Project catrgory...">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" rows="5" name="description" class="form-control" id="description"
                                    placeholder="Project description..."></textarea>
                                <picture class="d-block my-4 d-flex justify-content-center">
                                    <img id="displayImg" src="../../public/uploads/projects/default.png"
                                        alt="Demo Image" style="width: 100%; height:500px; object-fit:contain;">
                                </picture>
                                <label for="image" class="form-label">Project's image</label>
                                <input type="file" name="image" class="form-control" id="image"
                                    placeholder="Project image..."
                                    onchange="document.getElementById('displayImg').src = window.URL.createObjectURL(this.files[0])">

                                <button type="submit" name="create" class="btn btn-primary mt-3"><i
                                        class="material-icons">add</i>Create</button>
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
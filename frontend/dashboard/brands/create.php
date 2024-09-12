<?php

include "../master/header.php";

?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Add a New Brand</h1>
                    </div>
                </div>
            </div>

            <!-- App content here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>service</h3>
                        </div>
                        <form action="store.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your brand name...">
                                <picture class="d-block my-4 d-flex justify-content-center">
                                    <img id="displayImg" src="../../public/uploads/brands/default.png" alt="Demo Image"
                                        style="width: 100%; height:300px; object-fit:contain;">
                                </picture>
                                <label for="exampleInputEmail1" class="form-label">Brand Logo</label>
                                <input type="file" name="image" class="form-control" id="inputIcon"
                                    onchange="document.getElementById('displayImg').src = window.URL.createObjectURL(this.files[0])"
                                    aria-describedby="emailHelp">
                                <button type="submit" name="add" class="btn btn-primary mt-3">
                                    <i class="material-icons">add</i>Add</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>





<?php

include "../master/footer.php";

?>
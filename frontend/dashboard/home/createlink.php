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
                        <h1>Create new Social media link</h1>
                    </div>
                </div>
            </div>

            <!-- App content here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Link</h3>
                        </div>
                        <form action="store.php" method="POST">
                            <div class="card-body">
                                <label for="exampleInputEmail1" class="form-label">Site Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Site name...">
                                <label for="exampleInputEmail1" class="form-label">Site Link</label>
                                <input type="text" name="link" class="form-control" id="exampleInputEmail1"
                                    placeholder="https://exaple.com">
                                <label for="exampleInputEmail1" class="form-label">icon</label>
                                <input type="text" name="icon" class="form-control" id="inputIcon"
                                    placeholder="Icon name...">
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

                                <button type="submit" name="createlink" class="btn btn-primary mt-3"><i
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
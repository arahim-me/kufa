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
                        <h1>Create New Experience</h1>
                    </div>
                </div>
            </div>

            <!-- App content here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Experience</h3>
                        </div>
                        <form action="store.php" method="POST">
                            <div class="card-body">
                                <label for="exampleInputEmail1" class="form-label">Experience's Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">Experience's Count (139)/2k</label>
                                <textarea type="text" rows="5" name="description" class="form-control"> </textarea>
                                <label for="exampleInputEmail1" class="form-label">Icon</label>
                                <input type="text" name="icon" class="form-control" id="inputIcon">
                                <div class="card my-3">
                                    <div class="card-header">
                                        <h5>Select Icons,</h5>
                                    </div>
                                    <div class="card-body" style="overflow-y: scroll; height:500px;">
                                        <table>
                                            <tbody>
                                                <tr class="d-flex flex-wrap gap-4">
                                                    <?php foreach ($icons as $icon): ?>
                                                        <td>
                                                            <i class="<?= $icon ?>" onclick="myFun(event)"
                                                                style="font-size: 40px"></i>
                                                        </td>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

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
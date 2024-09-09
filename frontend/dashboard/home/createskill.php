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
                        <h1>Create new Skill</h1>
                    </div>
                </div>
            </div>

            <!-- App content here -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Skill</h3>
                        </div>
                        <form action="store.php" method="POST">
                            <div class="card-body">
                                <label for="exampleInputEmail1" class="form-label">Name of Degree</label>
                                <input type="text" name="degree" class="form-control" id="exampleInputEmail1"
                                    placeholder="Degree's name...">
                                <label for="exampleInputEmail1" class="form-label">Passign Year</label>
                                <input type="text" name="year" class="form-control" id="exampleInputEmail1"
                                    placeholder="Passing Year...">
                                <label for="exampleInputEmail1" class="form-label">Skill's Ratio</label>
                                <input type="text" name="ratio" class="form-control" placeholder="Ratio...">
                                <button type="submit" name="createskill" class="btn btn-primary mt-3"><i
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
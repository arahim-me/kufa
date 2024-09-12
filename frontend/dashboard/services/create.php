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
                        <h1>Create New Services</h1>
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
                        <form action="store.php" method="POST">
                            <div class="card-body">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">Description</label>
                                <textarea type="text" rows="5" name="description" class="form-control"> </textarea>
                                <label for="exampleInputEmail1" class="form-label">Icon</label>

                                <div class="input-group d-flex mb-3">
                                    <input type="text" name="icon" class="form-control" id="inputIcon"
                                        placeholder="Search icon...." onchange="iconVal(event)">
                                    <div class="input-group-append">
                                        <button id="searchBtn" class="btn btn-dark h-100" type="submit"
                                            name="searchBtn">Button</button>
                                    </div>
                                </div>

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

    // function searchIcon(e) {
    //     icons = [];
    //     result = input.value = e.target.value;
    //     icons.filter((result) =>
    //         icon.toLowerCase().includes(searchIcon))
    //         .map((result) => (
    //             <div className='container'>
    //                 <h4>`$result`</h4>
    //             </div>
    //         ))
    // }
    let input = document.querySelector('#inputIcon');
    function myFun(e) {
        input.value = e.target.classList.value;
    }
</script>

<?php

include "../master/footer.php";

?>
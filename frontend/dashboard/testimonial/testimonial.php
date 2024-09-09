<?php

include '../../../backend/config/db.php';
include "../master/header.php";

$testimonial_query = "SELECT * FROM testimonials";
$testimonials = mysqli_query($db_connect, $testimonial_query);
?>
<?php include'../components/msg.php';?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>testimonials</h5>
                <a href="create.php" name="add" class="btn btn-primary"><i class="material-icons">add</i>Add</a>
            </div>
            <div class="card-body">
                <div class="example-content">
                    <table class="table m-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Text</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($testimonials as $testimonial): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $num++ ?>
                                    </th>
                                    <td>
                                        <img src="../../public/uploads/testimonials/<?= $testimonial['image'] ?>"
                                            class="img-fluid" style="width: 150px; height: auto;" />
                                    </td>
                                    <td>
                                        <a href="store.php?statusid=<?= $testimonial['id'] ?>"
                                            class="btn <?= ($testimonial['status'] == 'active') ? 'badge bg-success' : 'badge bg-danger' ?>">
                                            <?= $testimonial['status'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $testimonial['name'] ?>
                                    </td>
                                    <td>
                                        <?= $testimonial['designation'] ?>
                                    </td>
                                    <td>
                                        <?= $testimonial['text'] ?>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="edit.php?editid=<?= $testimonial['id'] ?>" class="text-primary">
                                                <i class="fa-2x fas fa-edit"></i>
                                            </a>
                                            <a href="store.php?id=<?= $testimonial['id'] ?>" class="text-danger ms-3">
                                                <i class="fa-2x fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>








<?php

include "../master/footer.php";

?>
<?php

include '../../../backend/config/db.php';
include "../master/header.php";

$query = "SELECT * FROM brands";
$brands = mysqli_query($db_connect, $query);

?>


<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Available Brands</h1>
        </div>
    </div>
    <div class="col">
        <div class="page-description">
            <h5 class="text-end">Visit your site<a href="../../../index.php" target="_blank"
                    class="ms-4 text-decoration-none">
                    <button class="btn btn-dark">Visit</button></a></h5>
        </div>
    </div>
</div>

<!-- App content here -->

<?php

include "../../dashboard/components/msg.php";
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Services</h5>
                <a href="create.php" name="passubtn" class="btn btn-primary"><i class="material-icons">add</i>Create</a>
            </div>
            <div class="card-body">
                <div class="example-content">
                    <table class="table m-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Status</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($brands as $brand): ?>
                                <tr class="text-light bg-dark">
                                    <th scope="row">
                                        <?= $num++ ?>
                                    </th>
                                    <td>
                                        <img src="../../public/uploads/brands/<?= $brand['logo']  ?>" class="img-fluid" style="width: 200px; height:100%; object-fit:contain;" alt="">
                                    </td>
                                    <td>
                                        <a href="store.php?statusid=<?= $brand['id'] ?>"
                                            class="btn <?= ($brand['status'] == 'active') ? 'badge bg-success' : 'badge bg-danger' ?>">
                                            <?= $brand['status'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $brand['name'] ?>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="edit.php?editid=<?= $brand['id'] ?>" class="text-primary">
                                                <i class="fa-2x fas fa-edit"></i>
                                            </a>
                                            <a href="store.php?deleteid=<?= $brand['id'] ?>" class="text-danger ms-3">
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
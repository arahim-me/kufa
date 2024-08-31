<?php

include '../../../backend/config/db.php';
include "../master/header.php";

$query = "SELECT * FROM experiences";
$experiences = mysqli_query($db_connect, $query);

?>


<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Your Experiences</h1>
        </div>
    </div>
    <div class="col">
        <div class="page-description">
            <h5 class="text-end">Visit your site<a href="../../../index.php" target="_blank" class="ms-4 text-decoration-none">
                    <button class="btn btn-dark">Visit</button></a></h5>
        </div>
    </div>
</div>

<!-- App content here -->

<?php if (isset($_SESSION['service_complete'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center" role="alert">
                <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['service_complete'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['service_complete']); ?>


<?php if (isset($_SESSION['service_complete_delete'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center" role="alert">
                <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['service_complete_delete'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['service_complete_delete']); ?>


<?php if (isset($_SESSION['service_status'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center" role="alert">
                <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['service_status'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['service_status']); ?>

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
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($experiences as $experience): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $num++ ?>
                                    </th>
                                    <td>
                                        <i class="fa-2x <?= $experience['icon']?>"></i>
                                    </td>
                                    <td>
                                        <a href="store.php?statusid=<?= $experience['id'] ?>"
                                            class="btn <?= ($experience['status'] == 'active') ? 'bg-success' : 'bg-danger' ?>">
                                            <?= $experience['status'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $experience['name'] ?>
                                    </td>
                                    <td>
                                        <?= $experience['description'] ?>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="edit.php?editid=<?= $experience['id'] ?>" class="text-primary">
                                                <i class="fa-2x fas fa-edit"></i>
                                            </a>
                                            <a href="store.php?id=<?= $experience['id'] ?>" class="text-danger ms-3">
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
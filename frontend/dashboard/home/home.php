<?php

include '../../../backend/config/db.php';
include "../master/header.php";

$skill_query = "SELECT * FROM education";
$skills = mysqli_query($db_connect, $skill_query);

$link_query = "SELECT * FROM links";
$links = mysqli_query($db_connect, $link_query);

?>

<?php include '../components/msg.php'; ?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Dashboard</h1>
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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Social Links</h5>
                <a href="createlink.php" name="createlink" class="btn btn-primary"><i
                        class="material-icons">add</i>Create</a>
            </div>
            <div class="card-body">
                <div class="example-content">
                    <table class="table m-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Status</th>
                                <th scope="col">Name</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($links as $link): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $num++ ?>
                                    </th>
                                    <td>
                                        <i class="fa-2x <?= $link['icon'] ?>"></i>
                                    </td>
                                    <td>
                                        <a href="store.php?linkstatus=<?= $link['id'] ?>"
                                            class="btn <?= ($link['status'] == 'active') ? 'badge bg-success' : 'badge bg-danger' ?>">
                                            <?= $link['status'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $link['name'] ?>
                                    </td>
                                    <td>
                                        <?= $link['address'] ?>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="editlink.php?editlink=<?= $link['id'] ?>" class="text-primary">
                                                <i class="fa-2x fas fa-edit"></i>
                                            </a>
                                            <a href="store.php?deletelink=<?= $link['id'] ?>" class="text-danger ms-3">
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

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Skills/ Education</h5>
                <a href="createskill.php" name="createskill" class="btn btn-primary"><i
                        class="material-icons">add</i>Create</a>
            </div>
            <div class="card-body">
                <div class="example-content">
                    <table class="table m-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Status</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Year</th>
                                <th scope="col">Ratio</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($skills as $skill): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $num++ ?>
                                    </th>
                                    <td>
                                        <a href="store.php?skillstatus=<?= $skill['id'] ?>"
                                            class="btn <?= ($skill['status'] == 'active') ? 'badge bg-success' : 'badge bg-danger' ?>">
                                            <?= $skill['status'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $skill['degree'] ?>
                                    </td>
                                    <td>
                                        <?= $skill['year'] ?>
                                    </td>
                                    <td>
                                        <?= $skill['ratio'] ?> %
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="editskill.php?editskill=<?= $skill['id'] ?>" class="text-primary">
                                                <i class="fa-2x fas fa-edit"></i>
                                            </a>
                                            <a href="store.php?deleteskill=<?= $skill['id'] ?>" class="text-danger ms-3">
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
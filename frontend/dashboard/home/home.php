<?php

include '../../../backend/config/db.php';
include "../master/header.php";
$query = "SELECT * FROM admins";
$admins = mysqli_query($db_connect, $query);

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
                <h5>Our Admins</h5>
            </div>
            <div class="card-body">
                <div class="example-content">
                    <table class="table m-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No.</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($admins as $admin): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $num++ ?>
                                    </th>
                                    <td>
                                        <?= $admin['name'] ?>
                                    </td>
                                    <td>
                                        <?= $admin['email'] ?>
                                    </td>
                                    <td>
                                        <?= (!$admin['cel']) ? 'Not set yet' : '0' . $admin['cel'] ?>
                                    </td>
                                    <td>
                                        <a href="store.php?delete=<?= $admin['id'] ?>" class="text-danger ms-3">
                                            <i class="fa-2x fas fa-trash"></i>
                                        </a>
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
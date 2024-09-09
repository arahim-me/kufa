<?php if (isset($_SESSION['complete'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center text-success" role="alert">
                <div class="custom-alert-icon"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['complete'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['complete']); ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center text-danger" role="alert">
                <div class="custom-alert-icon"><i class="material-icons-outlined">close</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['error'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['error']); ?>

<?php if (isset($_SESSION['create_success'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center text-success" role="alert">
                <div class="custom-alert-icon"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['create_success'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['create_success']); ?>

<?php if (isset($_SESSION['create_fail'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center text-danger" role="alert">
                <div class="custom-alert-icon"><i class="material-icons-outlined">close</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['create_fail'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['create_fail']); ?>

<?php if (isset($_SESSION['update_success'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center text-success" role="alert">
                <div class="custom-alert-icon"><i class="material-icons-outlined">done</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['update_success'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['update_success']); ?>

<?php if (isset($_SESSION['update_fail'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center text-danger" role="alert">
                <div class="custom-alert-icon"><i class="material-icons-outlined">close</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['update_fail'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['update_fail']); ?>

<?php if (isset($_SESSION['delete_success'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center text-danger" role="alert">
                <div class="custom-alert-icon"><i class="material-icons-outlined">delete</i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['delete_success'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['delete_success']); ?>

<?php if (isset($_SESSION['delete_fail'])): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-custom row align-items-center text-danger" role="alert">
                <div class="custom-alert-icon"><i class="material-icons-outlined"><span class="material-symbols-outlined">
                            delete_forever
                        </span></i></div>
                <div class="alert-content">
                    <span class="alert-title m-0"><?= $_SESSION['delete_fail'] ?></span>
                </div>
            </div>
        </div>
    </div>
<?php endif;
unset($_SESSION['delete_fail']); ?>
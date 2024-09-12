<?php
session_start();

if (isset($_SESSION['author_id'])) {
    header('location: ../home/home.php');
}

?>

<?php $assets = './../assets/'; ?>
<?php $register_page = './register.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="<?= $assets ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $assets ?>plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?= $assets ?>plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="<?= $assets ?>css/main.min.css" rel="stylesheet">
    <link href="<?= $assets ?>css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="<?= $assets ?>images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $assets ?>images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an
                account? <a href="<?= $register_page ?>">Sign Up</a></p>

            <!-- register msg start -->
            <?php if (isset($_SESSION['register_complete']) && isset($_SESSION['register_name'])): ?>
                <div class="alert alert-custom" role="alert">
                    <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                    <div class="alert-content">
                        <span class="alert-title">
                            <?= $_SESSION['register_complete'] ?>
                        </span>
                        <span class="alert-text">
                            <?= $_SESSION['register_name'] ?>
                        </span>
                    </div>
                </div>
            <?php endif;
            unset($_SESSION['register_complete'], $_SESSION['register_name']) ?>
            <!-- register msg end -->

            <!-- login faild msg start -->
            <?php if (isset($_SESSION['login_failed'])): ?>
                <div class="alert alert-custom" role="alert">
                    <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">error</i></div>
                    <div class="alert-content">
                        <span class="alert-text">
                            <?= $_SESSION['login_failed'] ?>
                        </span>
                    </div>
                </div>
            <?php endif;
            unset($_SESSION['login_failed']) ?>
            <!-- login faild msg end -->

            <form action="manage.php" method="POST">
                <div class="auth-credentials m-b-xxl">
                    <label for="signInEmail" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control m-b-md" id="signInEmail"
                        aria-describedby="signInEmail" placeholder="example@neptune.com"
                        value="<?= (isset($_SESSION['register_email'])) ? $_SESSION['register_email'] : '';
                        unset($_SESSION['register_email']) ?>">
                    <!-- email error -->
                    <?php if (isset($_SESSION['email_error'])) { ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"><?php echo $_SESSION['email_error'] ?>*
                        </div>
                    <?php }
                    unset($_SESSION['email_error']) ?>
                    <!-- email error -->
                    <label for="signInPassword" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" id="signInPassword"
                        aria-describedby="signInPassword"
                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <!-- email error -->
                    <?php if (isset($_SESSION['password_error'])) { ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"><?php echo $_SESSION['password_error'] ?>*
                        </div>
                    <?php }
                    unset($_SESSION['password_error']) ?>
                    <!-- email error -->
                </div>

                <div class="auth-submit">
                    <button type="submit" name="loginBtn" class="btn btn-primary">Sign In</button>
                </div>
            </form>
            <div class="divider"></div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="<?= $assets ?>plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= $assets ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= $assets ?>plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="<?= $assets ?>plugins/pace/pace.min.js"></script>
    <script src="<?= $assets ?>js/main.min.js"></script>
    <script src="<?= $assets ?>js/custom.js"></script>
</body>

</html>
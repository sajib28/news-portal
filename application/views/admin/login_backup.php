<?php
include '../library/Session.php';
Session::init();
?>

<?php
include '../config/config.php';
include '../library/Database.php';
include '../helpers/DateFormat.php';
$db = new Database();
$df = new DateFormat();
?>
<?php include 'inc/login/header.php'; ?>
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
            <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $df->validation($_POST['username']);
            $password = $df->validation(md5($_POST['password']));
            $username = mysqli_real_escape_string($db->link,$username);
            $password = mysqli_real_escape_string($db->link,$password);

            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $result = $db->select($query);
            if ($result != false) {
                $value = mysqli_fetch_array($result);
                $row = mysqli_num_rows($result);
                if ($row > 0) {
                    Session::set('login', true);
                    Session::set('username', $value['username']);
                    Session::set('userId', $value['id']);
                    header("Location:index.php");
                } else { ?>
                    <div class="alert alert-danger">
                    <button class="close" data-close="alert"></button>
                    <span>
                        Result not found! </span>
                </div>
        <?php
                }
            } else {
                ?>
                <div class="alert alert-danger">
                    <button class="close" data-close="alert"></button>
                    <span>
                        Username and password not match. </span>
                </div>

            <?php
            }
        }
        ?>

    <form class="login-forms" action="login.php" method="post">
        <h3 class="form-title">Login to your account</h3>


        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
            </div>
        </div>
        <div class="form-actions">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"/> Remember me </label>
            <button type="submit" class="btn green-haze pull-right">
                Login <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
        <div class="login-options">
            <h4>Or login with</h4>
            <ul class="social-icons">
                <li>
                    <a class="facebook" data-original-title="facebook" href="javascript:;">
                    </a>
                </li>
                <li>
                    <a class="twitter" data-original-title="Twitter" href="javascript:;">
                    </a>
                </li>
                <li>
                    <a class="googleplus" data-original-title="Goole Plus" href="javascript:;">
                    </a>
                </li>
                <li>
                    <a class="linkedin" data-original-title="Linkedin" href="javascript:;">
                    </a>
                </li>
            </ul>
        </div>
        <div class="forget-password">
            <h4>Forgot your password ?</h4>
            <p>
                no worries, click <a href="javascript:;" id="forget-password">
                    here </a>
                to reset your password.
            </p>
        </div>
        <div class="create-account">
            <p>
                Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">
                    Create an account </a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->

</div>
<!-- END LOGIN -->

<?php include 'inc/login/footer.php'; ?>
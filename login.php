<?php

$PAGE_TITLE = "تسجيل دخول";

require_once "./includes/header.inc.php";
require_once "./includes/functions.inc.php";
?>

<?php
    $emailOrUserName = $password = '';
$errors = [];

if (isset($_POST['signin'])) {

    // Save user's data
    $USER = [];

    $emailOrUserName = validateFormData($_POST['emailOrUsername']);
    $password = validateFormData($_POST['password']);

    if (isset($emailOrUserName) && !empty($emailOrUserName) && isset($password) && !empty($password)) {

        // find User from DB
        $q = "SELECT `id`, `email`, `username`, `password` FROM `users` WHERE `email`='$emailOrUserName' OR `username`='$emailOrUserName'";

        $results = mysqli_query($connection, $q);

        if (mysqli_num_rows($results) > 0) {
            $USER = mysqli_fetch_assoc($results);

            // Check For Password
            if (password_verify($password, $USER['password'])) {
                // user id save in sassion
                $_SESSION['USER_ID'] = $USER['id'];
                // Authenticated User let him/her to Dashbord
                redirectTo("./user/");
            } else {
                array_push($errors, "الايميل او كلمة السر اللي ادخلتها غير صحيحة.");
            }
        } else {
            array_push($errors, "لا يوجد مستخدم يتطابق مع الايميل واسم المستخدم الذي ادخلته");
        }
    } else {
        if (!isset($emailOrUserName) || empty($emailOrUserName)) {
            array_push($errors, "الايميل مطلوب .");
        }
        if (!isset($password) || empty($password)) {
            array_push($errors, "كلمة السر مطلوبة");
        }
    }
}
?>

<div class="container center-align mt-5 class-form" id="loginCard">
  <div class="row">
    <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1">
      <div class="text-center">
        <i class="fab fa-gripfire fa-4x text-danger"></i>
        <h3>تسجيل دخول للموقع</h3>
        <!-- <?php echo var_dump(''); ?> -->
      </div>

      <!-- Alets -->
        <?php if (sizeof($errors)) : ?>
            <?php foreach ($errors as $error) :  ?>
                <?php echo showAlert($error, 'danger'); ?>
                <?php
            endforeach;
        endif; ?>

      <div class="card p-5 mt-4">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" class="form-control" name="emailOrUsername" value="<?php echo isset($emailOrUserName) ? $emailOrUserName : '' ?>" placeholder="الايميل او اسم المستخدم ..." required>
              <div class="invalid-feedback">
                الايميل او اسم المستخدم مطلوب !
              </div>
            </div>
          </div>

          <div class="form-group class-form" >
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
              </div>
              <input type="password" class="form-control" name="password" value="<?php echo isset($password) ? $password : '' ?>" placeholder="كلمة السر ..." required>
              <div class="invalid-feedback">
                حقل كلمة السر مطلوب !.
              </div>
            </div>
          </div>
          <button type="submit" name="signin" class="btn btn-primary btn-lg btn-block">تسجيل دخول</button>
        </form>

      </div>

      <div class="card mt-3">
        <a href="#" class="btn btn-link">نسيت كلمة السر ؟</a>
      </div>

      <div class="card mt-3">
        <div class="align-self-center p-2">
          <a class="btn btn-link" href="register.php">انشأ حسابا .</a> <span class="text-muted">جديد في الموقع ؟</span>
        </div>
      </div>

    </div>
  </div>
</div>

<style>
  body{
    background:#333;
    /* color:#333; */
  }

.class-fosrm{
  background:#fff;
  color:#333;
}
h3{
  color:white
}
</style>
<?php require_once "./includes/footer.inc.php"; ?>

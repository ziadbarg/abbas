<?php
$PAGE_TITLE = "الرئيسية";

require_once "includes/header.inc.php";
?>

<section class="jumbotron text-center" style="background:#333; color:#ec7400;">
  <div class="container">
  <p class="lead text-white"> مَّثَلُ الَّذِينَ يُنفِقُونَ أَمْوَالَهُمْ فِي سَبِيلِ اللَّهِ كَمَثَلِ حَبَّةٍ أَنبَتَتْ سَبْعَ سَنَابِلَ فِي كُلِّ سُنبُلَةٍ مِّائَةُ حَبَّةٍ ۗ وَاللَّهُ يُضَاعِفُ لِمَن يَشَاءُ ۗ وَاللَّهُ وَاسِعٌ عَلِيمٌ </p>

    <h1 class="jumbotron-heading fas fa-donate" style="color:#ec7400;">اهلا بكم بموقعنا المخصص للتبرع للجهات الخيرية </h1>
    <p class="lead text-orange">موقعنا مخصص للتبرع للجهات الخيرية مثل مؤسسة العين الخيرية</p>
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="login.php" class="btn btn-outline-primary btn-lg">تسجيل دخول</a>
      <a href="register.php" class="btn btn-outline-success btn-lg">تسجيل حساب</a>
    </div>
  </div>
</section>

<section id="tech" style="background:#333;">
<h1 class="text-center text-light"> شنو يقدم موقعنا ؟</h1>

  <div class="container text-center">

    <div class="row">
      <div class="col-md-4 offset-md-0 col-xs-10 offset-xs-1">
        <i class="fas fa-donate fa-5x mb-1" style="color:#ec7400;"></i>
        <h4 class="btn btn-outline-dark btn-lg" style="color:#ec7400;"> تبرع لجهات خيرية</h4>
        <p class=" btn-outline-dark btn-lg" style="color:#ec7400;">
            يمكنك التبرع للجهات الخيرية التي ترغب              
          </p>
      </div>

      <div class="col-md-4 offset-md-0 col-xs-10 offset-xs-1">
        <i class="fas fa-hand-holding-heart fa-5x mb-2" style="color:#ec7400;"></i>
        <h4 class="btn btn-outline-dark btn-lg" style="color:#ec7400;">حلقة وصل </h4>
       <p class=" btn-outline-dark btn-lg" style="color:#ec7400;">يمثل موقعنا حلقة الوصل بينك وبين المؤسسات والمستفيدين منها</p>
      </div>
    
      <div class="col-md-4 offset-md-0 col-xs-10 offset-xs-1">
        <i class="fas fa-hands-helping  fa-5x" style="color:#ec7400;"></i>
        <h4 class="btn btn-outline-dark btn-lg" style="color:#ec7400;">مجتمع واحد</h4>
        <p class=" btn-outline-dark btn-lg" style="color:#ec7400;">
          المستفدين من الموقع والمؤسسات وكذلك الايتام والمستفيدين يمثلون مجتمعنا المتكاتف 
      </p>
      </div>
    </div>

  </div>
</section>

<style>
  body{
    background:#332;
    /* color:#333; */
  }

</style>

<?php require_once "includes/footer.inc.php"; ?>

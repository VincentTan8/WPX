<style>
  .invisible-wow {
    visibility: hidden;
  }

  .container {
    max-width: 1500px !important;
    /* added here because brain dead already to be fixed when brain is good after cms for courses */
  }

  @media only screen and (max-width: 768px) {
    .invisible-wow {
      visibility: visible;
      opacity: 0;
      animation: fadeInMobile 1s ease forwards;
    }

    @keyframes fadeInMobile {
      to {
        opacity: 1;
      }
    }

    .mobile-first {
      margin-top: -190px;
    }
  }
</style>
<section class="bg-white" id="deal">
  <div class="container">


    <!--<div class="col-md-12 text-left wow slideInUp"  >
<picture >
    <source srcset="../charity/img/charity_mobile.png" media="(max-width: 768px)">
    <source   srcset="../charity/img/first.png" media="(min-width: 769px)">
    <img src="../charity/img/first.png"  id="specific-image-full" alt="Responsive Image">
  </picture>
  </div> -->

    <div class="col-md-12 text-left wow slideInUp mobile-first " style="margin-top:-500px;  ">
      <!-- <picture>
        <source srcset="' . $base64Image_mobile . '" media="(max-width: 768px)">
        <source srcset="' . $base64Image . '" media="(min-width: 769px)">
        <img data-src="wetalk" id="specific-image-full" alt="Responsive Image">
      </picture> -->
      <?php include "first.php" ?>
    </div>


    <!-- 
    $imagePath = '../charity/img/happiness' . $lang . '.png';
    $base64Image = base64_encode_image($imagePath);

    $imagePath_mobile = '../charity/img/happiness_mobile' . $lang . '.png';
    $base64Image_mobile = base64_encode_image($imagePath_mobile); -->

    <div class="col-md-12 text-left wow slideInUp">
      <!-- <picture>
        <source srcset="' . $base64Image_mobile . '" media="(max-width: 768px)">
        <source srcset="' . $base64Image . '" media="(min-width: 769px)">
        <img data-src="wetalk" id="specific-image-full" alt="Responsive Image">
      </picture> -->
      <?php include "happiness.php" ?>
    </div>



    <!-- $imagePath = '../charity/img/good' . $lang . '.png';
    $base64Image = base64_encode_image($imagePath);

    $imagePath_mobile = '../charity/img/good_mobile' . $lang . '.png';
    $base64Image_mobile = base64_encode_image($imagePath_mobile); -->

    <div class="col-md-12 text-left wow slideInUp">
      <!-- <picture>
        <source srcset="' . $base64Image_mobile . '" media="(max-width: 768px)">
        <source srcset="' . $base64Image . '" media="(min-width: 769px)">
        <img data-src="wetalk" id="specific-image-full" alt="Responsive Image">
      </picture> -->
      <?php include "good.php" ?>
    </div>


    <!-- 
    $imagePath = '../charity/img/helping' . $lang . '.png';
    $base64Image = base64_encode_image($imagePath);

    $imagePath_mobile = '../charity/img/helping_mobile' . $lang . '.png';
    $base64Image_mobile = base64_encode_image($imagePath_mobile); -->

    <div class="col-md-12 text-left wow slideInUp">
      <!-- <picture>
        <source srcset="' . $base64Image_mobile . '" media="(max-width: 768px)">
        <source srcset="' . $base64Image . '" media="(min-width: 769px)">
        <img data-src="wetalk" id="specific-image-full" alt="Responsive Image">
      </picture> -->
      <?php include "helping.php" ?>
    </div>













</section>
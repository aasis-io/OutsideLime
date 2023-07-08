<?php
include('header.php');
include('aside.php');
include('../class/slider.class.php');
$slider = new Slider();


@session_start();
if (isset($_POST['submit'])) {
  $slider->set('banner_title', $_POST['banner_title']);
  $slider->set('banner_quote', $_POST['banner_quote']);
  $slider->set('banner_link', $_POST['banner_link']);
  $slider->set('status', $_POST['status']);
  $slider->set('created_by', $_SESSION['id']);
  $slider->set('created_date', date('Y-m-d H:i:s'));
  if ($_FILES['banner_img']['error'] == 0) {
    if (
      $_FILES['banner_img']['type'] == "image/png" ||
      $_FILES['banner_img']['type'] == "image/jpg" ||
      $_FILES['banner_img']['type'] == "image/jpeg"
    ) {

      $imageName = uniqid() . $_FILES['banner_img']['name'];
      move_uploaded_file(
        $_FILES['banner_img']['tmp_name'],
        '../../images/banner/' . $imageName
      );
      $slider->set('banner_img', $imageName);
      //  if ($_FILES['thumb_img']['size'] <= 1024 * 1024) {
      //     $imageName = uniqid() . $_FILES['thumb_img']['name'];
      //     move_uploaded_file(
      //        $_FILES['thumb_img']['tmp_name'],
      //        '../images/' . $imageName
      //     );
      //     $news->set('thumb_img', $imageName);
      //  } else {
      //     $imageError = "Error, Exceeded 1mb!";
      //  }
    } else {
      $imageError = "Invalid Image!";
    }
  }

  $result = $slider->save();
  if (is_integer($result)) {
    $ErrMs = "";
    $msg = "Slider Uploaded Successfully with id " . $result;
  } else {
    $msg = "";
  }
}

?>



<!-- Header and Aside Included -->


<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Add Home Slider</li>
      </ol>
    </nav>
  </div>
  <?php if (isset($msg)) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"><i class="bi bi-check-circle me-1"></i><?php echo $msg;  ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
  <?php  } ?>
  <?php if (isset($ErrMsg)) { ?>
    <div class="alert alert-danger alert-dismissible fade show"><i class="bi bi-exclamation-octagon me-1"></i><?php echo $ErrMsg;  ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
  <?php  } ?>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Carousel</h5>
            <form role="form" id="submitForm" method="post" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Banner Title<sup>*</sup></label>
                <div class="col-sm-10"> <input type="text" class="form-control" name="banner_title" required></div>
              </div>
              <div class="row mb-3">
                <label for="inputBannerDesc" class="col-sm-2 col-form-label">Description<sup>*</sup></label>
                <div class="col-sm-10"><textarea class="form-control" name="banner_quote" style="height: 100px" required></textarea></div>
              </div>
              <div class="row mb-3">
                <label for="inputBannerLink" class="col-sm-2 col-form-label">Banner Link<sup>*</sup></label>
                <div class="col-sm-10"> <input type="text" class="form-control" name="banner_link" required></div>
              </div>

              <div class="row mb-3">
                <label for="inputBanner" class="col-sm-2 col-form-label">Select Image<sup>*</sup></label>
                <div class="col-sm-8" enctype="multipart/form-data"> <input class="form-control" type="file" id="formFile" name="banner_img" required></div>
                <label for="inputBanner" class="col-sm-2 col-form-label red">[2534 x 990] px<sup>*</sup></label>
              </div>

              <div class="row mb-3">
                <label for="inputStatus" class="col-sm-2 col-form-label">Status<sup>*</sup></label>
                <div class="col-sm-10 label-inline">
                   <input type="radio" name="status" id="publish" value="1" class="radio-green" checked>
                  <label for="publish" class="radio">
                    <span>Publish</span>
                    <i class="bi bi-check-circle"></i>
                  </label>



                  <input type="radio" name="status" id="unpublish" class="radio-red" value="0">
                  <label for="unpublish" class="radio right">
                    <span>Unpublish</span>
                    <i class="bi bi-x-circle"></i>

                  </label>


                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"> <button type="submit" class="btn btn-primary" name="submit">Save</button></div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>


</main>



<?php
include('footer.php');
?>
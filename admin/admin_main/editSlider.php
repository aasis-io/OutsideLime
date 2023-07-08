<?php
include('header.php');
include('aside.php');
include('../class/slider.class.php');
$slider = new Slider();
$slider->set('banner_id', $_GET['id']);


$retrieveData = $slider->getById();




@session_start();
if (isset($_POST['submit'])) {
    $slider->set('banner_title', $_POST['banner_title']);
    $slider->set('banner_quote', $_POST['banner_quote']);
    $slider->set('banner_link', $_POST['banner_link']);
    $slider->set('status', $_POST['status']);


    if (empty($_FILES['banner_img']['name'])) {
        $slider->set('banner_img', $_POST['old_image']);
    } else {
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
            } else {
                $imageError = "Invalid Image!";
            }
        }
    }

    $result = $slider->edit();
    if ($result) {
        $ErrMs = "";
        $slider->set('banner_id', $_GET['id']);
        $retrieveData = $slider->getById();
        $msg = "Slider updated Successfully with id " . $result;
    } else {
        $msg = "Nothing to Update";
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
                <li class="breadcrumb-item active">Edit Home Slider</li>
            </ol>
        </nav>
    </div>
    <?php if (isset($msg)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"><i class="bi bi-check-circle me-1"></i><?php echo $msg;  ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
    <?php  } ?>
    <?php if (isset($ErrMsg)) { ?>
        <div class="alert alert-danger alert-dismissible fade show"><i class="bi bi-exclamation-octagon me-1"></i><?php echo $ErrMsg;  ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
    <?php  }


?>



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Carousel</h5>
                        <form role="form" id="submitForm" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Banner Title<sup>*</sup></label>
                                <div class="col-sm-10"> <input type="text" class="form-control" name="banner_title" value="<?php echo $retrieveData->banner_title; ?>" required></div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputBannerDesc" class="col-sm-2 col-form-label">Description<sup>*</sup></label>
                                <div class="col-sm-10"><textarea class="form-control" name="banner_quote" style="height: 100px" required><?php echo $retrieveData->banner_quote; ?></textarea></div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputBannerLink" class="col-sm-2 col-form-label">Banner Link<sup>*</sup></label>
                                <div class="col-sm-10"> <input type="text" class="form-control" name="banner_link" value="<?php echo $retrieveData->banner_link ?>" required></div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputBanner" class="col-sm-2 col-form-label">Select Image<sup>*</sup></label>
                                <div class="col-sm-8" enctype="multipart/form-data">

                                    <input type="hidden" value="<?php echo $retrieveData->banner_img;  ?>" name="old_image" >
                                    <img src="../../images/banner/<?php echo $retrieveData->banner_img;  ?>" height="198" width="506" alt="" srcset="" style="margin-bottom: 1em;">


                                    <input class="form-control" type="file" id="formFile" name="banner_img">
                                </div>
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
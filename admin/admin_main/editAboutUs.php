<?php
include('header.php');
include('aside.php');
include('../class/aboutUs.class.php');

$aboutUs = new AboutUs();

$aboutUs->set('about_id', $_GET['id']);
$retrieveData = $aboutUs->getById();

@session_start();
if (isset($_POST['submit'])) {
    $aboutUs->set('about_us', $_POST['about_us']);
    $aboutUs->set('title', $_POST['title']);
    $aboutUs->set('meta_title', $_POST['meta_title']);
    $aboutUs->set('meta_key', $_POST['meta_key']);
    $aboutUs->set('meta_desc', $_POST['meta_desc']);

    $result = $aboutUs->edit();
    if ($result) {
        $ErrMs = "";
        $retrieveData = $aboutUs->getById();
        $msg = "AboutUs updated Successfully";
    } else {
        $msg = "Nothing to Update";
    }
}

?>




<!-- Header and Aside Included -->


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit About Us</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Edit About Us</li>
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
                        <h5 class="card-title">About Us</h5>
                        <form role="form" id="submitForm" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title<sup>*</sup></label>
                                <div class="col-sm-10"> <input id="title" type="text" class="form-control" name="title" value="<?php echo $retrieveData->title; ?>" required></div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">About Us<sup>*</sup></label>
                                <div class="col-sm-10"><textarea name="about_us" id="editor" cols="30" rows="10" required><?php echo $retrieveData->about_us; ?></textarea></div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Meta Title<sup>*</sup></label>
                                <div class="col-sm-10"> <input id="meta_title" type="text" class="form-control" placeholder="" name="meta_title" value="<?php echo $retrieveData->meta_title; ?>" required></div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Meta Keyword</label>
                                <div class="col-sm-10"> <textarea class="form-control" placeholder="Maximum 12 words separated with commas" id="floatingTextarea" style="height: 100px;" name="meta_key"><?php echo $retrieveData->meta_key; ?></textarea></div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Meta Description</label>
                                <div class="col-sm-10"> <textarea class="form-control" placeholder="Maximum 160 letters" id="floatingTextarea" style="height: 200px;" name="meta_desc"><?php echo $retrieveData->meta_desc; ?></textarea></div>
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
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        $('#title').on('input', function() {
            var input1Value = $(this).val();

            $.ajax({
                type: 'POST',
                method: "post",
                dataType: "text",
                url: 'uploadMetatitle.php',
                data: {
                    value: input1Value
                },
                success: function(response) {
                    $('#meta_title').val(response);
                },
                error: function(xhr, status, error) {
                    console.log('AJAX request error:', error);
                }
            });
        });
    });
</script>

<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
<script>
    CKEDITOR.replace('editor', {
        filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
        filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserUploadUrl: "upload.php",
        language: "en"
    });
</script>

<?php
include('footer.php');
?>
<?php
include('header.php');
include('aside.php');
include('../class/slider.class.php');
@session_start();
if (isset($_SESSION['message']) && $_SESSION['message'] != "") {
  $successMessage = $_SESSION['message'];
  $_SESSION['message'] = "";
}
$sliderObject = new Slider();

$sliderList = $sliderObject->retrieve();
?>


<!-- Header and Aside Included -->


<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Manage Home Slider</li>
      </ol>
    </nav>
  </div>
  <?php
  if (isset($successMessage)) {
    echo     '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="bi bi-check-circle me-1"></i>' . $successMessage . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
  }
  ?>
  <a href="uploadSlider.php"><button class="btn btn-primary" style="margin: 1rem 0; padding: .7em;"><i class="bi bi-plus-lg"></i> Add New Slider</button></a>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <!-- <h5 class="card-title">Datatables</h5> -->
            <table class="table datatable table-striped">
              <thead>

                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Status</th>
                  <th scope="col" class="hidden-xs">ID</th>
                  <th scope="col" class="hidden-xs">Posted Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($sliderList as $key => $slider) { ?>
                  <tr>
                    <th scope="row"><?php echo $key + 1; ?></th>
                    <td><a href="editSlider.php?id=<?php echo $slider['banner_id']; ?>" style="color: #0d6efd;" class="underline"><?php echo $slider['banner_title']; ?></a></td>
                    <td><?php
                        if ($slider['status'] == 1) {
                          echo "<span class='btn btn-success'>Active</span>";
                        } else {
                          echo "<span class='btn btn-danger'>Inactive</span>";
                        }
                        ?></td>
                    <td class="hidden-xs"><?php echo $slider['banner_id']; ?></td>
                    <td class="hidden-xs"><?php echo $slider['created_date']; ?></td>
                    <td> <a href="deleteSlider.php?id=<?php echo $slider['banner_id']; ?>" role="btn" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">&nbsp;Delete</a>
                    </td>
                  </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>



<?php
include('footer.php');
?>
<!--Delete Category-->


<?php
$id = $_GET['id'];

include('../class/slider.class.php');
$sliderObject = new Slider();
$sliderObject->set('banner_id', $id);
$status = $sliderObject->delete();
session_start();
if ($status == 'success') {
  $_SESSION['message'] = 'Slider Deleted Successfully!';
  header('location:manageSlider.php');
} else {
  $_SESSION['message'] = "failed To Delete Slider!";
  header('location:manageSlider.php');
}
?>
<!--Delete Category-->
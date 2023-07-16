<?php
include('header.php');
include('aside.php');
include('../class/category.class.php');
$category = new Category();
// $categoryRes = $category->retrieve();

@session_start();
if (isset($_POST['submit'])) {
    if (isset($_POST['CategoryEntry']) && !empty($_POST['CategoryEntry'])) {
        $category->set('name', $_POST['name']);
        $category->set('status', $_POST['status']);
        $category->set('parent_id', $_POST['parent_id']);
        $category->set('created_date', date('Y-m-d H:i:s'));


        $result = $category->save();
        if ($result) {
            $ErrMs = "";
            $msg = "Category inserted Successfully with id " . $result;
        } else {
            $msg = "";
        }
    } else {
        $ErrMsg = "Category Already Taken!";
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
                <li class="breadcrumb-item">Category</li>
                <li class="breadcrumb-item active">Upload Category</li>

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
                        <h5 class="card-title">Upload Category</h5>
                        <form role="form" id="submitForm" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Category Title<sup>*</sup></label>
                                <div class="col-sm-10"> <input type="text" class="form-control" name="name" id="name" required>
                                    <input type="hidden" name="CategoryEntry" id="CategoryEntry">
                                    <span id="categoryError" style="color:red"></span>
                                </div>


                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Parent</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="parent_id">
                                        <option selected>No Parent</option>
                                        <?php
                                        $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
                                        $sql = "SELECT * FROM category";
                                        $result = mysqli_query($conn, $sql);

                                        $nodes = [];
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $nodes[$row['id']] = $row;
                                        }

                                        // Recursive function to display nodes
                                        function displayNodes($parentId, $nodes, $displayedNodes = [], $depth = 0)
                                        {
                                            $indent = str_repeat('----', $depth);

                                            if ($parentId != 0 && !in_array($parentId, $displayedNodes)) {
                                                echo "<option value='" . $parentId . "'>" . $indent . $nodes[$parentId]['name'] . "</option>";
                                                $displayedNodes[] = $parentId;
                                            }

                                            foreach ($nodes as $node) {
                                                if ($node['parent_id'] == $parentId && !in_array($node['id'], $displayedNodes)) {
                                                    echo "<option value='" . $node['id'] . "'>" . $indent . $node['name'] . "</option>";
                                                    $displayedNodes[] = $node['id'];
                                                    displayNodes($node['id'], $nodes, $displayedNodes, $depth + 1);
                                                }
                                            }
                                        }

                                        // Display the nodes
                                        displayNodes(0, $nodes);
                                        ?>
                                    </select>
                                </div>
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
<script>
    $(document).ready(function() {
        $('#name').keyup(function() {
            const value = $("#name").val();
            $.ajax({
                url: "checkCategoryName.php",
                method: "post",
                dataType: "text",
                data: {
                    'categoryName': value
                },
                success: function(res) {
                    if (res != "success") {
                        $("#categoryError").text(res);
                        $("#CategoryEntry").val("");
                    } else {
                        $("#categoryError").text("");
                        $("#CategoryEntry").val("success");

                    }
                }
            })
        })
    })
</script>
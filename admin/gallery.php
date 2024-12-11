<?php
date_default_timezone_set("Asia/Kolkata");

error_reporting(0);
// session_start(); // Remove or comment this line if not needed

// if (!isset($_SESSION['adm_Id'])) {
//   header('Location: login.php'); // Comment out if not needed
// }
include 'header.php';
?>

<body id="page-top">

    <?php include 'navbar.php'; ?>

    <div id="wrapper">

        <?php include 'sidebar.php'; ?>

        <div id="content-wrapper">

            <div class="container-fluid">
                <div class="row mb-3">

                </div>
                <!-- Gallery Section -->
                <div class="row mb-3">
                    <dvi class="col-md-12 d-flex justify-content-between">
                        <h2>Image Gallery</h2>
                        <button id="addGalleryBtn" class="btn btn-success">Add Gallery</button>
                    </dvi>
                </div>
                <!-- Image Gallery Table -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-images"></i>
                        Image Gallery
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Fetch and display images from database (replace with your PHP logic)
                                $images = [
                                    ['src' => 'image1.jpg', 'title' => 'Sunset', 'description' => 'A beautiful sunset over the mountains.'],
                                    ['src' => 'image2.jpg', 'title' => 'Forest', 'description' => 'A lush green forest with towering trees.'],
                                    // Add more images as needed
                                ];

                                foreach ($images as $image) {
                                    echo "
                      <tr>
                        <td><img src='{$image['src']}' alt='{$image['title']}' style='width: 100px; height: 100px;'></td>
                        <td>{$image['title']}</td>
                        <td>{$image['description']}</td>
                        <td>
                          <a href='#' class='btn btn-info btn-sm'>Edit</a>
                          <a href='#' class='btn btn-danger btn-sm'>Delete</a>
                        </td>
                      </tr>
                    ";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include 'scripts.php'; ?>

</body>

</html>
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
                    <div class="col-md-12 d-flex justify-content-between">
                        <h2>Portfolio</h2>
                        <button id="addPortfolioBtn" class="btn btn-success">Add Portfolio</button>
                    </div>
                </div>

                <!-- Portfolio Table -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-briefcase"></i>
                        Portfolio Items
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
                                // Fetch and display portfolio items from database (replace with your PHP logic)
                                $portfolios = [
                                    ['src' => 'portfolio1.jpg', 'title' => 'Project A', 'description' => 'Description of Project A.'],
                                    ['src' => 'portfolio2.jpg', 'title' => 'Project B', 'description' => 'Description of Project B.'],
                                    // Add more portfolios as needed
                                ];

                                foreach ($portfolios as $portfolio) {
                                    echo "
                                    <tr>
                                        <td><img src='{$portfolio['src']}' alt='{$portfolio['title']}' style='width: 100px; height: 100px;'></td>
                                        <td>{$portfolio['title']}</td>
                                        <td>{$portfolio['description']}</td>
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
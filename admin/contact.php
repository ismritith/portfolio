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
                        <h2>Contact Us</h2>
                    </div>
                </div>

                <!-- Contact Messages Table -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-envelope"></i>
                        Messages
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Fetch and display contact messages from the database
                                $messages = [
                                    [
                                        'name' => 'John Doe',
                                        'email' => 'john@example.com',
                                        'address' => '123 Main St, City, State, Zip',
                                        'message' => 'This is a test message.'
                                    ],
                                    [
                                        'name' => 'Jane Smith',
                                        'email' => 'jane@example.com',
                                        'address' => '456 Elm St, City, State, Zip',
                                        'message' => 'Another message.'
                                    ],
                                    // Add more messages as needed
                                ];

                                foreach ($messages as $message) {
                                    echo "
                                    <tr>
                                        <td>{$message['name']}</td>
                                        <td>{$message['email']}</td>
                                        <td>{$message['address']}</td>
                                        <td>{$message['message']}</td>
                                        <td>
                                            <a href='delete_message.php?id={$message['id']}' class='btn btn-danger btn-sm'>Delete</a>
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
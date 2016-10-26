<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Student List</h2>
    <a href="../../controllers/student/add.php"><button type="button" class="btn btn-default">Add</button></a>
    <table class="table table-striped">
        <tr>
            <th>Student Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th></th>
        </tr>
        <?php foreach($student_list as $student): ?>
            <tr>
                <td><?php echo $student['student_number']; ?></td>
                <td><?php echo $student['firstname']; ?></td>
                <td><?php echo $student['lastname']; ?></td>
                <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="
                        <?php echo '#studentModal'.$student['id'] ?>">Details
                    </button>
                </td>
            </tr>

            <!-- Modal -->
            <div id="<?php echo 'studentModal'.$student['id']; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Details</h4>
                        </div>
                        <div class="modal-body">
                            <ul class="list-inline">
                                <li>Student Number:</li>
                                <li><?php echo $student["student_number"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>First Name:</li>
                                <li><?php echo $student["firstname"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>Last Name:</li>
                                <li><?php echo $student["lastname"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>Father Name:</li>
                                <li><?php echo $student["father_name"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>Mother Name:</li>
                                <li><?php echo $student["mother_name"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>Address:</li>
                                <li><?php echo $student["address"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>City:</li>
                                <li><?php echo $student["city"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>State Or Province:</li>
                                <li><?php echo $student["state_or_province"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>Postal Code:</li>
                                <li><?php echo $student['postal_code']?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>Phone Number:</li>
                                <li><?php echo $student["phone_number"]?></li>
                            </ul><ul class="list-inline">
                                <li>Email:</li>
                                <li><?php echo $student["email_name"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>Major:</li>
                                <li><?php echo $student["major"]?></li>
                            </ul>
                            <ul class="list-inline">
                                <li>Note:</li>
                                <li><?php echo $student["note"]?></li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </table>
</div>

<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
</body>
</html>
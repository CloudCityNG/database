<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2>Student List</h2>
        </div>
        <div class="col-md-3">
            <a class="add pull-right" href="../../controllers/student/add.php">
                <button type="button" class="btn btn-md btn-info">Add Student</button>
            </a>
        </div>
        <table class="table table-striped">
            <thead>
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th></th>
                <th></th>
            </thead>
            <?php foreach($student_list as $student): ?>
            <tr>
                <td><?php echo $student['student_number']; ?></td>
                <td><?php echo $student['firstname']; ?></td>
                <td><?php echo $student['lastname']; ?></td>
                <td><?php echo $student['address']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#edit'.$student['id'] ?>" >
                        Edit
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo '#delete'.$student['id'] ?>" >
                        Delete
                    </button>
                </td>
            </tr>

            <!-- Modal -->
            <div id="<?php echo 'edit'.$student['id']; ?>" class="modal fade" role="dialog">
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

            <div id="<?php echo 'delete'.$student['id']; ?>" class="modal fade" role="dialog">
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title custom_align">Delete this entry</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete <?php echo $student['firstname']?>?
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="delete">
                                    <span class="glyphicon glyphicon-ok-sign"></span> 
                                    Yes
                                </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span> 
                                    No
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
</body>
</html>
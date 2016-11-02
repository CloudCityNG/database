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
        <?php if($name != ""): ?>
        <div class="noti">
            haha
        </div>
        <?php endif; ?>
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
                    <a href="../../controllers/student/edit.php?id=<?php echo $student['id'] ?>"><button type="button" class="btn btn-primary">
                        Edit
                    </button></a>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo '#delete'.$student['id'] ?>" >
                        Delete
                    </button>
                </td>
            </tr>

            <div id="<?php echo 'delete'.$student['id']; ?>" class="modal fade" role="dialog">
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                    <input type="hidden" name="name" value="<?php echo $student['firstname']; ?>">
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
<script type="text/javascript" src="../../public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../public/js/validate.js"></script>
</body>
</html>
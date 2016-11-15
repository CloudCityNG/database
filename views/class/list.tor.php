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
            <h2>Class List</h2>
        </div>
        <div class="col-md-3">
            <a class="add pull-right" href="../../controllers/class/add.php">
                <button type="button" class="btn btn-md btn-info">Add Class</button>
            </a>
        </div>
        <table class="table table-striped">
            <thead>
                <th>Class Name</th>
                <th>Instructor Name</th>
                <th>Department Name</th>
                <th></th>
                <th></th>
            </thead>
            <?php foreach($class_list as $class): ?>
            <tr>
                <td><?php echo $class['class_name']; ?></td>
                <td><?php echo $class['instructor_name']; ?></td>
                <td><?php echo $class['department_name']; ?></td>
                <td>
                    <a href="../../controllers/class/edit.php?id=<?php echo $class['id'] ?>"><button type="button" class="btn btn-primary">
                        Edit
                    </button></a>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo '#delete'.$class['id'] ?>" >
                        Delete
                    </button>
                </td>
            </tr>

            <div id="<?php echo 'delete'.$class['id']; ?>" class="modal fade" role="dialog">
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $class['id']; ?>">
                    <input type="hidden" name="name" value="<?php echo $class['class_name']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title custom_align">Delete this entry</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete <?php echo $class['class_name']?>?
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
<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Assignment List</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <h2>assignment List</h2>
                </div>
                <div class="col-md-3">
                    <a class="add pull-right" href="../../controllers/assignment/add.php">
                        <button type="button" class="btn btn-md btn-info">Add assignment</button>
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <th>Assignment Description</th>
                        <th>Exam</th>
                        <th>Percent Of Grade</th>
                        <th>Maximum Point</th>
                        <th>Class Id</th>
                        <th></th>
                    </thead>

                    <?php foreach($assignment_list as $assignment): ?>
                    <tr>
                        <td><?php echo $assignment['assignment_description']; ?></td>
                        <td><?php echo $assignment['exam']; ?></td>
                        <td><?php echo $assignment['percent_of_grade']; ?></td>
                        <td><?php echo $assignment['maximum_point']; ?></td>
                        <td><?php echo $assignment['class_id']; ?></td>
                        <td>
                            <a href="../../controllers/assignment/edit.php?id=<?php echo $assignment['id'] ?>"><button type="button" class="btn btn-primary">
                                Edit
                            </button></a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo '#delete'.$assignment['id'] ?>" >
                                Delete
                            </button>
                        </td>
                    </tr>

                    <div id="<?php echo 'delete'.$assignment['id']; ?>" class="modal fade" role="dialog">
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $assignment['id']; ?>">
                            <input type="hidden" name="name" value="<?php echo $assignment['assignment_description']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title custom_align">Delete this entry</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger">
                                            <span class="glyphicon glyphicon-warning-sign"></span>
                                            Are you sure you want to delete <?php echo $assignment['assignment_description']?>?
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
    </div><!--page-content-wrapper-->
</div> <!--wrapper-->
    <?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Result List</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <h2>Result List</h2>
                </div>
                <div class="col-md-3">
                    <a class="add pull-right" href="../../controllers/result/add.php">
                        <button type="button" class="btn btn-md btn-info">Add Result</button>
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                    <th>Assignment</th>
                    <th>Student</th>
                    <th>Score</th>
                    <th>Late</th>
                    <th></th>
                    <th></th>
                    </thead>

                    <?php foreach($result_list as $result): ?>
                        <tr>
                            <td><?php echo $result['assignment_description']; ?></td>
                            <td><?php echo $result['firstname'].' '.$result['lastname']; ?></td>
                            <td><?php echo $result['score']; ?></td>
                            <td><?php echo $result['late'] == 1 ? 'Yes':'No'; ?></td>
                            <td>
                                <a href="../../controllers/result/edit.php?assignment_id=<?php echo $result['assignment_id'] ?>&student_id=<?php echo $result['student_id'] ?>
                                "><button type="button" class="btn btn-primary">
                                        Edit
                                    </button></a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="
                                    <?php echo '#delete'.$result['assignment_id'].'_'.$result['student_id'] ?>" >
                                    Delete
                                </button>
                            </td>
                        </tr>

                        <div id="<?php echo 'delete'.$result['assignment_id'].'_'.$result['student_id']; ?>" class="modal fade" role="dialog">
                            <form method="post">
                                <input type="hidden" name="id" value="<?php echo $result['assignment_id']; ?>">
                                <input type="hidden" name="id" value="<?php echo $result['student_id']; ?>">
                                <input type="hidden" name="name" value="<?php echo $result['firstname']; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title custom_align">Delete this entry</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">
                                                <span class="glyphicon glyphicon-warning-sign"></span>
                                                Are you sure you want to delete result of <?php echo $result['firstname']?>?
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
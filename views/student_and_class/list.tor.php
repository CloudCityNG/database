<html>
<head>
<?php include_once __DIR__.'/../partial/_head.tor.php' ?>

</head>
<body>
 <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
<div id="page-content-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <h2>Student And Class List</h2>
        </div>
        <div class="col-md-3">
            <a class="add pull-right" href="../../controllers/student_and_class/add.php">
                <button type="button" class="btn btn-md btn-info">Add Student And Class</button>
            </a>
        </div>
        <table class="table table-striped">
            <thead>
                <th>Class ID</th>
                <th>Student ID</th>
                <th>Grade</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            <?php foreach($student_and_class_list as $student_class): ?>
            <tr>
                <td><?php echo $student_class['class_id']; ?></td>
                <td><?php echo $student_class['student_id']; ?></td>
                <td><?php echo $student_class['grade']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#edit'.$student_class['class_id'].$student_class['student_id'] ?>">
                        Edit
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo '#delete'.$student_class['class_id'].$student_class['student_id'] ?>" >
                        Delete
                    </button>
                </td>
            </tr>
            </tbody>


            <div id="<?php echo 'edit'.$student_class['class_id'].$student_class['student_id'];?>" class="modal fade" role="dialog">

                <form method="post" name="edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title custom_align" >Edit this entry</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="alert">
                                        <div class="form-group">
                                          <label for="student_number">Class Id:</label>
                                            <div class="form-group">
                                              <select class="form-control" id="sel1" name="class_id" value="<?php echo $student_class['class_id']; ?> selected=selected">

                                               <?php foreach($class_list as $class): ?>

                                                <?php echo $student_class['class_id']==$class['id']?"<option selected='selected'>".$class['id']."</option>":"<option >".$class['id']."</option>";   ?>
                                                 <?php endforeach; ?> 
                                              </select>
                                              <br>
                                            </div>
                                            <label for="student_id">Student Id:</label>
                                            <div class="form-group">
                                              <select class="form-control" id="sel1" name="student_id" >

                                               <?php foreach($student_list as $student): ?>
                                                <?php echo $student_class['student_id']==$student['id']?"<option selected='selected'>".$student['id']."</option>":"<option >".$student['id']."</option>";   ?>
                                                 <?php endforeach; ?> 
                                              </select>
                                              <br>
                                            </div>
                                        <div class="form-group">
                                            <label for="firstname">Grade:</label>
                                            <input type="text" class="form-control" id="firstname" name="grade" placeholder="Enter report desc:" value="<?php echo $student_class['grade'] ?>">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info" name="edit">Submit</button>
                                        </div>
                                    
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
            </div>

            <div id="<?php echo 'delete'.$student_class['class_id'].$student_class['student_id']; ?>" class="modal fade" role="dialog">
                <form method="post" name="delete">
                    <input type="hidden" name="class_id" value="<?php echo $student_class['class_id']; ?>">
                    <input type="hidden" name="student_id" value="<?php echo $student_class['student_id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title custom_align">Delete this entry</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete <?php echo $student_class['class_id']?>?
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
</div>
 </div>

 
        <script type="text/javascript" src="../../public/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../public/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../public/js/validate.js"></script>
</body>
</html>
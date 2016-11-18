<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Update assignment</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Update Assignment Information</h2>
                <form id="form" method="post">
                    <div class="form-group">
                        <label for="assignment_description">Assignment Description:</label>
                        <input type="text" class="form-control" id="assignment_description" name="assignment_description"
                            value="<?php echo $assignment['assignment_description'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exam">Exam:</label>
                        <input type="text" class="form-control" id="exam" name="exam"
                               value="<?php echo $assignment['exam'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="percent_of_grade">Percent Of Grade:</label>
                        <input type="text" class="form-control" id="percent_of_grade" name="percent_of_grade"
                               value="<?php echo $assignment['percent_of_grade'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="maximum_point">Maximum_point:</label>
                        <input type="text" class="form-control" id="maximum_point" name="maximum_point"
                               value="<?php echo $assignment['maximum_point'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="class_id">Class Id:</label>
                        <input type="text" class="form-control" id="class_id" name="class_id"
                               value="<?php echo $assignment['class_id'] ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="../../controllers/assignment/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
                </form>
            </div>
        </div>
    </div>
    </div>
</div> <!--wrapper-->
<?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
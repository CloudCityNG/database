<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Add New Department</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
        <div class="col-md-9"><h2>Add Department</h2></div>
        <div class="col-md-3">
            <a href="../../controllers/department/list.php" class="pull-right add">
                <button type="button" class="btn btn-primary">List Department</button>
            </a>
        </div>
    </div>
    
        <form id="form" method="post">
                <input type="text" class="hidden" value="<?php echo $department['id']?>">
                <div class="form-group">
                    <label for="student_number">Department Name:</label>
                    <input type="text" class="form-control" id="report_name" name="department_name"
                           placeholder="Enter the department name">
                </div>
                <div class="form-group">
                    <label for="student_number">Department Number:</label>
                    <input type="text" class="form-control" id="report_name" name="department_number"
                           placeholder="Enter the department number">
                </div>
                <div class="form-group">
                    <label for="student_number">Department Manager:</label>
                    <input type="text" class="form-control" id="report_name" name="department_manager"
                           placeholder="Enter the Department manager" >
                </div>
                <div class="form-group">
                    <label for="student_number">Department Chairperson:</label>
                    <input type="text" class="form-control" id="report_name" name="department_chairperson"
                           placeholder="Enter the Department Chairperson" >
                </div>

                <button type="submit" class="btn btn-success" name="edit">Submit</button>
          </form> 
</div>
    </div>
</div> <!--wrapper-->
<?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
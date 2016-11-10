<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add report</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/mystyle.css">
</head>
<body>
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Student Manager
                    </a>

                </li>

                <li>
                    <a href="../../controllers/student/list.php">Student Board</a>
                </li>
                <li>
                    <a href="../../controllers/department/list.php">Department Board</a>
                </li>
                <li>
                    <a href="../../controllers/instructor/list.php">Instructor Board</a>
                </li>
                <li>
                    <a href="../../controllers/reports/list.php">Report Board</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
<div class="container">
    <div class="row">
        <div class="col-md-9"><h2>Add Department </h2></div>
        <div class="col-md-3">
            <a href="../../controllers/department/list.php" class="pull-right add">
                <button type="button" class="btn btn-primary">List Department</button>
            </a>
        </div>
    </div>
    
        <form id="addForm" method="post">
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
<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
<script type="text/javascript" src="../../public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../public/js/validate.js"></script>
</body>
</html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Instructor</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
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
        <div class="col-md-9"><h2>Add Instructor </h2></div>
        <div class="col-md-3">
            <a href="../../views/instructor/list.tor.php" class="pull-right add">
                <button type="button" class="btn btn-primary">List instructor</button>
            </a>
        </div>
    </div>

    <form id="addForm" method="post">
        <input type="text" class="hidden" value="<?php echo $instructor['id']?>">
        <div class="form-group">
            <label for="instructor_name">Instructor Name:</label>
            <input type="text" class="form-control" id="instructor_name" name="instructor_name"
                   placeholder="Enter the instructor name">
        </div>
        <div class="form-group">
            <label for="email_name">Email Name:</label>
            <input type="text" class="form-control" id="email_name" name="email_name"
                   placeholder="Enter the email">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number"
                   placeholder="Enter the phone number" >
        </div>
        <div class="form-group">
            <label for="extension">Extension:</label>
            <input type="text" class="form-control" id="extension" name="extension"
                   placeholder="Enter the extension" >
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
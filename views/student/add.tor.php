<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Thêm sinh viên</title>
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

    <h2>Thêm sinh viên</h2>
    <form id="form" method="post">
        <div class="form-group">
            <label for="student_number">Student Number:</label>
            <input type="text" class="form-control" id="student_number" name="student_number"
                   placeholder="Enter student number">
        </div>
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name"
                   required>
        </div>
        <div class="form-group">
            <label for="father_name">Father Name:</label>
            <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter father name">
        </div>
        <div class="form-group">
            <label for="mother_name">Mother Name:</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Enter mother name">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter adress"
                   required>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
        </div>
        <div class="form-group">
            <label for="state_or_province">State Or Province:</label>
            <input type="text" class="form-control" id="state_or_province" name="state_or_province"
                   placeholder="Enter state or province" required>
        </div>
        <div class="form-group">
            <label for="postal_code">Postal Code:</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Enter postal code">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number"
                   placeholder="Enter phone number" required>
        </div>
        <div class="form-group">
            <label for="email_name">Email:</label>
            <input type="text" class="form-control" id="email_name" name="email_name" placeholder="Enter email"
                   required>
        </div>
        <div class="form-group">
            <label for="major">Major:</label>
            <input type="text" class="form-control" id="major" name="major" placeholder="Enter major" required>
        </div>
        <div class="form-group">
            <label for="note">Note:</label>
            <textarea class="form-control" id="note" name="note"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
        <a href="../../controllers/student/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
    </form>
</div>
<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
<script type="text/javascript" src="../../public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../public/js/validate.js"></script>
</body>
</html>
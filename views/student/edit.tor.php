<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sửa thông tin sinh viên</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/main.css">
</head>
<body>
<div class="container">
    <h2>Sửa thông tin sinh viên</h2>
    <form id="form" method="post">
        <div class="form-group">
            <label for="student_number">Student Number:</label>
            <input type="text" class="form-control" id="student_number" name="student_number"
                value="<?php echo $student['student_number'] ?>">
        </div>
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname"
                   value="<?php echo $student['firstname'] ?>">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname"
                   value="<?php echo $student['lastname'] ?>">
        </div>
        <div class="form-group">
            <label for="father_name">Father Name:</label>
            <input type="text" class="form-control" id="father_name" name="father_name"
                   value="<?php echo $student['father_name'] ?>">
        </div>
        <div class="form-group">
            <label for="mother_name">Mother Name:</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name"
                   value="<?php echo $student['mother_name'] ?>">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address"
                   value="<?php echo $student['address'] ?>">
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city" value="<?php echo $student['city'] ?>">
        </div>
        <div class="form-group">
            <label for="state_or_province">State Or Province:</label>
            <input type="text" class="form-control" id="state_or_province" name="state_or_province"
                   value="<?php echo $student['state_or_province'] ?>">
        </div>
        <div class="form-group">
            <label for="postal_code">Postal Code:</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code"
                   value="<?php echo $student['postal_code'] ?>">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number"
                   value="<?php echo $student['phone_number'] ?>">
        </div>
        <div class="form-group">
            <label for="email_name">Email:</label>
            <input type="text" class="form-control" id="email_name" name="email_name"
                   value="<?php echo $student['email_name'] ?>">
        </div>
        <div class="form-group">
            <label for="major">Major:</label>
            <input type="text" class="form-control" id="major" name="major" value="<?php echo $student['major'] ?>">
        </div>
        <div class="form-group">
            <label for="note">Note:</label>
            <textarea class="form-control" id="note" name="note" value="<?php echo $student['note'] ?>"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="../../controllers/student/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
    </form>
</div>
<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
<script type="text/javascript" src="../../public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../public/js/validate.js"></script>
</body>
</html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Thêm lớp</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/main.css">
</head>
<body>
<div class="container">
    <h2>Thêm sinh viên</h2>
    <form id="form" method="post">
        <div class="form-group">
            <label for="class_name">Class Name:</label>
            <input type="text" class="form-control" id="class_name" name="class_name"
                   placeholder="Enter class name">
        </div>
        <div class="form-group">
            <label for="section">Section:</label>
            <input type="text" class="form-control" id="section" name="section" placeholder="Enter section">
        </div>
        <div class="form-group">
            <label for="term">Term:</label>
            <input type="text" class="form-control" id="term" name="term" placeholder="Enter term"
                   required>
        </div>
        <div class="form-group">
            <label for="units">Units:</label>
            <input type="text" class="form-control" id="units" name="units" placeholder="Enter units">
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Enter year">
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter location"
                   required>
        </div>
        <div class="form-group">
            <label for="days_and_times">Days And Times:</label>
            <input type="text" class="form-control" id="days_and_times" name="days_and_times" placeholder="Enter day and times">
        </div>
        <div class="form-group">
            <label for="department_id">Department:</label>
            <select class="form-control" name="department_id" id="department_id">
                <?php foreach ($departments as $d): ?>
                    <option value="<?php echo $d['id'] ?>"><?php echo $d['department_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="instructor_id">Instructor:</label>
            <select class="form-control" name="department_id" id="department_id">
                <?php foreach ($instructors as $i): ?>
                    <option value="<?php echo $i['id'] ?>"><?php echo $i['instructor_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="note">Note:</label>
            <textarea class="form-control" id="note" name="note"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
        <a href="../../controllers/class/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
    </form>
</div>
<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
<script type="text/javascript" src="../../public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../public/js/validate.js"></script>
</body>
</html>
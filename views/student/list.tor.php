<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Student List</h2>
    <table class="table table-striped">
        <tr>
            <th>Student Number</th>
            <th>Major</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>City</th>
        </tr>
        <?php foreach($student_list as $student): ?>
            <tr>
                <td><?php echo $student['student_number']; ?></td>
                <td><?php echo $student['major']; ?></td>
                <td><?php echo $student['firstname']; ?></td>
                <td><?php echo $student['lastname']; ?></td>
                <td><?php echo $student['address']; ?></td>
                <td><?php echo $student['city']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
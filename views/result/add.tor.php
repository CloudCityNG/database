<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Add New Result</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add New Result</h2>
                    <form id="form" method="post">
                        <div class="form-group">
                            <label for="assignment_id">Assignment:</label>
                            <select class="form-control" name="assignment_id" id="assignment_id">
                                <?php foreach ($assignments as $i): ?>
                                    <option value="<?php echo $i['id'] ?>"><?php echo $i['assignment_description'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="student_id">Student:</label>
                            <select class="form-control" name="student_id" id="student_id">
                                <?php foreach ($students as $i): ?>
                                    <option value="<?php echo $i['id'] ?>"><?php echo $i['firstname'].' '.$i['lastname'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="score">Score:</label>
                            <input type="text" class="form-control" id="score" name="score" placeholder="Enter score" required>
                        </div>
                        <div class="form-group">
                            <label for="late">Late:</label>
                            <select class="form-control" name="late" id="late">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Add</button>
                        <a href="../../controllers/student/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--wrapper-->
    <?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Update Student</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Update Student Information</h2>
                    <form id="form" method="post">
                        <div class="form-group">
                            <label for="class_name">Class Name:</label>
                            <input type="text" class="form-control" id="class_name" name="class_name"
                                   value="<?php echo $class['class_name']?>">
                        </div>
                        <div class="form-group">
                            <label for="section">Section:</label>
                            <input type="text" class="form-control" id="section" name="section" value="<?php echo $class['section']?>">
                        </div>
                        <div class="form-group">
                            <label for="term">Term:</label>
                            <input type="text" class="form-control" id="term" name="term" value="<?php echo $class['term']?>">
                        </div>
                        <div class="form-group">
                            <label for="units">Units:</label>
                            <input type="text" class="form-control" id="units" name="units" value="<?php echo $class['units']?>">
                        </div>
                        <div class="form-group">
                            <label for="year">Year:</label>
                            <input type="text" class="form-control" id="year" name="year" value="<?php echo $class['year']?>">
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" class="form-control" id="location" name="location" value="<?php echo $class['location']?>">
                        </div>
                        <div class="form-group">
                            <label for="days_and_times">Days And Times:</label>
                            <input type="text" class="form-control" id="days_and_times" name="days_and_times" value="<?php echo $class['days_and_times']?>">
                        </div>
                        <div class="form-group">
                            <label for="department_id">Department:</label>
                            <select class="form-control" name="department_id" id="department_id">
                                <?php foreach ($departments as $d): ?>
                                    <option value="<?php echo $d['id'] ?>"
                                        <?php if($d['id'] == $class['department_id']) echo "selected='selected'" ?> >
                                        <?php echo $d['department_name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="instructor_id">Instructor:</label>
                            <select class="form-control" name="instructor_id" id="instructor_id">
                                <?php foreach ($instructors as $i): ?>
                                    <option value="<?php echo $i['id'] ?>"
                                        <?php if($i['id'] == $class['instructor_id']) echo "selected='selected'" ?> >
                                        <?php echo $i['instructor_name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="note">Note:</label>
                            <textarea class="form-control" id="note" name="note"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="../../controllers/class/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!--wrapper-->
<?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
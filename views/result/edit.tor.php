<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Edit Result</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Result</h2>
                    <form id="form" method="post">
                        <div class="form-group">
                            <label for="assignment_id">Assignment:</label>
                            <select class="form-control" name="assignment_id" id="assignment_id">
                                <?php foreach ($assignments as $i): ?>
                                    <option value="<?php echo $i['id'] ?>"
                                        <?php if($i['id'] == $result['assignment_id']) echo "selected='selected'" ?>
                                    ><?php echo $i['assignment_description'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="student_id">Student:</label>
                            <select class="form-control" name="student_id" id="student_id">
                                <?php foreach ($students as $i): ?>
                                    <option value="<?php echo $i['id'] ?>"
                                        <?php if($i['id'] == $result['student_id']) echo "selected='selected'" ?>
                                    ><?php echo $i['firstname'].' '.$i['lastname'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="score">Score:</label>
                            <input type="text" class="form-control" id="score" name="score" value="<?php echo $result['score']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="late">Late:</label>
                            <select class="form-control" name="late" id="late">
                                <option value="1"
                                    <?php if($result['late'] == 1) echo "selected='selected'" ?>
                                >Yes</option>
                                <option value="0"
                                    <?php if($result['late'] == 0) echo "selected='selected'" ?>
                                >No</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="../../controllers/student/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--wrapper-->
    <?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
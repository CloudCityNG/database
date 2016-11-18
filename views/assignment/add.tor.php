<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Add New Assignment</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Add New assignment</h2>
                <form id="form" method="post">
                    <div class="form-group">
                        <label for="assignment_description">assignment Description:</label>
                        <input type="text" class="form-control" id="assignment_description" name="assignment_description"
                               placeholder="Enter assignment number">
                    </div>
                    <div class="form-group">
                        <label for="exam">Exam:</label>
                        <input type="text" class="form-control" id="exam" name="exam" placeholder="Enter exam">
                    </div>
                    <div class="form-group">
                        <label for="percent_of_grade">Percent Of Grade:</label>
                        <input type="text" class="form-control" id="percent_of_grade" name="percent_of_grade" placeholder="Enter percent of grade"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="maximum_point">Maximum point:</label>
                        <input type="text" class="form-control" id="maximum_point" name="maximum_point" placeholder="Enter maxium point">
                    </div>
                    <div class="form-group">
                        <label for="class_id">Class Id:</label>
                        <input type="text" class="form-control" id="class_id" name="class_id" placeholder="Enter class id">
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                    <a href="../../controllers/assignment/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
                </form>
            </div>
        </div>
    </div>
</div> <!--wrapper-->
    <?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
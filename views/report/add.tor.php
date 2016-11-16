<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Add New Report</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-9"><h2>Add report</h2></div>
            <div class="col-md-3">
                <a href="../../controllers/report/list.php" class="pull-right add">
                    <button type="button" class="btn btn-primary">List Report</button>
                </a>
            </div>
        </div>
        <form id="form" method="post">
            <div class="form-group">
                <label for="student_number">Reports Name:</label>
                <input type="text" class="form-control" id="report_name" name="report_name"
                       placeholder="Enter report name">
            </div>
            <div class="form-group">
                <label for="firstname">Report Descript:</label>
                <input type="text" class="form-control" id="firstname" name="report_desc" placeholder="Enter report desc:">
            </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
    </div>
</div> <!--wrapper-->
<?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
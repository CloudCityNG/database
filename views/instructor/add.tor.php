<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Add New Instructor</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9"><h2>Add Instructor</h2></div>
                <div class="col-md-3">
                    <a href="../../controllers/instructor/list.php" class="pull-right add">
                        <button type="button" class="btn btn-primary">List instructor</button>
                    </a>
                </div>
            </div>

            <form id="form" method="post">
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
    </div>
</div> <!--wrapper-->
<?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
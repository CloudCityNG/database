<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>
    <title>Update instructor</title>
</head>
<body>
<div id="wrapper">
    <?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Update instructor</h2>
                <form id="form" method="post">
                    <div class="form-group">
                        <label for="instructor_name">instructor Name:</label>
                        <input type="text" class="form-control" id="instructor_name" name="instructor_name"
                            value="<?php echo $instructor['instructor_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email_name">email_name:</label>
                        <input type="text" class="form-control" id="email_name" name="email_name"
                               value="<?php echo $instructor['email_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone number:</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                               value="<?php echo $instructor['phone_number'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="extension">Extension:</label>
                        <input type="text" class="form-control" id="extension" name="extension"
                               value="<?php echo $instructor['extension'] ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="../../controllers/instructor/list.php"><button type="button" class="btn btn-default">Cancle</button></a>
                </form>
            </div>
        </div>
    </div>
    </div>
</div> <!--wrapper-->
<?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>
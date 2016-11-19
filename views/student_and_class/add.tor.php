<html>
<head>
    <?php include_once __DIR__.'/../partial/_head.tor.php' ?>

</head>
<body>
<div id="wrapper">
<?php include_once __DIR__.'/../partial/_nav.tor.php' ?>
    <div id="page-content-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-9"><h2>Add report </h2></div>
        <div class="col-md-3">
            <a href="../../controllers/student_and_class/list.php" class="pull-right add">
                <button type="button" class="btn btn-primary">List Student And Class</button>
            </a>
        </div>
    </div>
    
    <form id="addForm" method="post">
        <div class="form-group">
          <label for="student_number">Class Id:</label>
            <div class="form-group">
              <select class="form-control" id="sel1" name="class_id">

               <?php foreach($class_list as $class): ?>
                <?php echo "<option>".$class['id']."</option>";   ?>
                 <?php endforeach; ?> 
              </select>
              <br>
            </div>
            <label for="student_id">Student Id:</label>
            <div class="form-group">
              <select class="form-control" id="sel1" name="student_id">

               <?php foreach($student_list as $student): ?>
                <?php echo "<option>".$student['id']."</option>";   ?>
                 <?php endforeach; ?> 
              </select>
              <br>
            </div>
        <div class="form-group">
            <label for="firstname">Grade:</label>
            <input type="text" class="form-control" id="firstname" name="grade" placeholder="Enter report desc:">
        </div>
        
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div></form></div>

</div>

<?php include_once __DIR__.'/../partial/_js.tor.php' ?>
</body>
</html>

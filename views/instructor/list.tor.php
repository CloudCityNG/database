<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>instructor List</title>
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/main.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/mystyle.css">
</head>
<body>
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Student Manager
                    </a>

                </li>

                <li>
                    <a href="../../controllers/student/list.php">Student Board</a>
                </li>
                <li>
                    <a href="../../controllers/department/list.php">Department Board</a>
                </li>
                <li>
                    <a href="../../controllers/instructor/list.php">Instructor Board</a>
                </li>
                <li>
                    <a href="../../controllers/reports/list.php">Report Board</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
	<div class="container">
		<div class="row">
		<div class="col-md-9">
			<h2>instructor List</h2>
		</div>
		<div class="col-md-3" >
			<a href="../../controllers/instructor/add.php"  class="add pull-right">
				<button type="button" class="btn  btn-info">Add instructor</button>
			</a>
		</div>			
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>Instructor Name</th>
					<th>Email Name</th>
					<th>Phone Number</th>
					<th>Extension</th>
				</tr>
			</thead>

			<tbody>
			<?php foreach ($instructor_list as $instructor ): ?>
			
				<tr>
					<td><?php echo $instructor['id'];?></td>
					<td><?php echo $instructor['instructor_name'];?></td>
					<td><?php echo $instructor['email_name'];?></td>
					<td><?php echo $instructor['phone_number'];?></td>
					<td><?php echo $instructor['extension'];?></td>
					<td>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo "#edit".$instructor['id']?>">Edit</button>
					</td>
					<td>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo "#delete".$instructor['id']?>">Delete</button>
					</td>
				</tr>
			</tbody>
			<div id="<?php echo 'edit'.$instructor['id'];?>" class="modal fade" role="dialog">
				<form method="post">
				 	<input type="hidden" name="id" value="<?php echo $instructor['id'];?>">
				 	<div class="modal-dialog">
				 		<div class="modal-content">
				 				<div class="modal-header">
				 					<button type="button" class="close" data-dismiss="modal">&times;</button>
				 					<h4 class="modal-title custom_align" >Edit this entry</h4>
				 				</div>
				 				<div class="modal-body">
				 					<div class="alert">
				 						 <form id="addForm" method="post">
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
				 		</div>
				 	</div>
				</form>
			</div>
			 <div id="<?php echo 'delete'.$instructor['id']; ?>" class="modal fade" role="dialog">
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $instructor['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title custom_align">Delete this entry</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete <?php echo $instructor['id']?>?
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="delete">
                                    <span class="glyphicon glyphicon-ok-sign"></span> 
                                    Yes
                                </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span> 
                                    No
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
		<?php endforeach?>
		</table>

	</div>
	<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
	<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
</body>
</html>
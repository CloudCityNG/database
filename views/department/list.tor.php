<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Department List</title>
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
				<h2>List Department</h2>
			</div>
			<div class="col-md-3">
				<a class="add pull-right" href="../../controllers/department/add.php">
					<button type="button" class="btn btn-info">Add Department</button>
				</a>
			</div>
			
				
			
			<table class="table table-striped">
				<thead>
					<tr>
						<th>id</th>
						<th>Department Name</th>
						<th>Department Number</th>
						<th>Department Manager</th>
						<th>Department Chairperson</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<?php foreach ($department_list as $department ):?> 
				<tbody>

					<tr>
						<td><?php echo $department['id']?></td>
						<td><?php echo $department['department_name']?></td>
						<td><?php echo $department['department_number']?></td>
						<td><?php echo $department['department_manager']?></td>
						<td><?php echo $department['department_chairperson']?></td>
						<td >
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo "#edit".$department['id']
							?>">Edit</button>
						</td>
						<td>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo "#delete".$department['id']?>">Delete</button>
						</td>
					</tr>

					<div id="<?php echo 'delete'.$department['id']; ?>" class="modal fade" role="dialog">
		                <form method="post">
		                    <input type="hidden" name="id" value="<?php echo $department['id']; ?>">
		                    <div class="modal-dialog">
		                        <div class="modal-content">
		                            <div class="modal-header">
		                                <button type="button" class="close" data-dismiss="modal">&times;</button>
		                                <h4 class="modal-title custom_align">Delete this entry</h4>
		                            </div>
		                            <div class="modal-body">
		                                <div class="alert alert-danger">
		                                    <span class="glyphicon glyphicon-warning-sign"></span>
		                                    Are you sure you want to delete <?php echo $department['id']?>?
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
            		<div id="<?php echo 'edit'.$department['id'];?>" class="modal fade" role="dialog">
				<form method="post">
				 	<input type="hidden" name="id" value="<?php echo $department['id'];?>">
				 	<div class="modal-dialog">
				 		<div class="modal-content">
				 				<div class="modal-header">
				 					<button type="button" class="close" data-dismiss="modal">&times;</button>
				 					<h4 class="modal-title custom_align" >Edit this entry</h4>
				 				</div>
				 				<div class="modal-body">
				 					<div class="alert">
				 						 <form id="addForm" method="post">
				 						 	<input type="text" class="hidden" value="<?php echo $department['id']?>">
										    <div class="form-group">
										        <label for="student_number">Department Name:</label>
										        <input type="text" class="form-control" id="report_name" name="department_name"
										               value="<?php echo $department['department_name']?>" >
										    </div>
										    <div class="form-group">
										        <label for="student_number">Department Number:</label>
										        <input type="text" class="form-control" id="report_name" name="department_number"
										               value="<?php echo $department['department_number']?>" >
										    </div>
										    <div class="form-group">
										        <label for="student_number">Department Manager:</label>
										        <input type="text" class="form-control" id="report_name" name="department_manager"
										               value="<?php echo $department['department_manager']?>" >
										    </div>
										    <div class="form-group">
										        <label for="student_number">Department Chairperson:</label>
										        <input type="text" class="form-control" id="report_name" name="department_chairperson"
										               value="<?php echo $department['department_chairperson']?>" >
										    </div>
										    
										    <button type="submit" class="btn btn-success" name="edit">Submit</button>
										</form>	
				 					</div>
				 				</div>
				 		</div>
				 	</div>
				</form>
			</div>
				</tbody>
				<?php endforeach?>
			</table>

			
		
		</div>
	</div>
</body>
<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
	<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
</html>
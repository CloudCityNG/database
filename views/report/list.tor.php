<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reports List</title>
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/main.css">
	<?php require('../../controllers/report/list.php');?>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-9">
			<h2>Reports List</h2>
		</div>
		<div class="col-md-3" >
			<a href="../../controllers/report/add.php" class="add pull-right">
				<button type="button" class="btn  btn-info">Add Reports</button>
			</a>
		</div>			
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>Reports Name</th>
					<th>Reports DESC</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>

			<tbody>
			<?php foreach ($reports_list as $report ): ?>
			
				<tr>
					<td><?php echo $report['id'];?></td>
					<td><?php echo $report['report_name'];?></td>
					<td><?php echo $report['report_desc'];?></td>
					<td>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo "#edit".$report['id']?>">Edit</button>
					</td>
					<td>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo "#delete".$report['id']?>">Delete</button>
					</td>
				</tr>
			</tbody>
			<div id="<?php echo 'edit'.$report['id'];?>" class="modal fade" role="dialog">
				<form method="post">
				 	<input type="hidden" name="id" value="<?php echo $report['id'];?>">
				 	<div class="modal-dialog">
				 		<div class="modal-content">
				 				<div class="modal-header">
				 					<button type="button" class="close" data-dismiss="modal">&times;</button>
				 					<h4 class="modal-title custom_align" >Edit this entry</h4>
				 				</div>
				 				<div class="modal-body">
				 					<div class="alert">
				 						 <form id="addForm" method="post">
				 						 	<input type="text" class="hidden" value="<?php echo $report['id']?>">
										    <div class="form-group">
										        <label for="student_number">Reports Name:</label>
										        <input type="text" class="form-control" id="report_name" name="report_name"
										               value="<?php echo $report['report_name']?>" >
										    </div>
										    <div class="form-group">
										        <label for="firstname">Report Descript:</label>
										        <input type="text" class="form-control" id="firstname" name="report_desc" value="<?php echo $report['report_desc']?>">
										    </div>
										    
										    <button type="submit" class="btn btn-success" name="edit">Submit</button>
										</form>	
				 					</div>
				 				</div>
				 		</div>
				 	</div>
				</form>
			</div>
			 <div id="<?php echo 'delete'.$report['id']; ?>" class="modal fade" role="dialog">
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $report['id']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title custom_align">Delete this entry</h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete <?php echo $report['id']?>?
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
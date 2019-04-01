<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	

</head>
<body>

<div class="container">
	<h1>Setting Data User</h1>

	<a href="users/add" class="btn btn-primary">Tambah user</a>


	<table class="table" id="tab">
		<thead>
			<tr>
				<th>User Name</th>
				<th>Password</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php //echo $yusuf; echo $mabes;
			$no = 1; //untuk menampilkan no
			foreach($list_users as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[username]</td>
					<td>$row[password]</td>				
					<td>
						<a href='data/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>



			<!-- ISI DATA AKAN MUNCUL DISINI -->

		</tbody>
	</table>
</div>

<!-- <script>
$(document).ready( function () {
$('#tab').DataTable();
} );
</script> -->


<script>
$(document).ready(function() {
    $('#tab').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );
</script>
	
</body>
</html>

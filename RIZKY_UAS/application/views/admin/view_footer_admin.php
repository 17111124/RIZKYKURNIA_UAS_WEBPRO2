</body>
</html>

	<!-- jQuery library -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1/16/0/umd/pooper.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> <!-- Data Tables -->

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    


<script>
	$(document).ready(function(){
		$('#table-data').DataTable();
	});
</script>

<script>
	$().click(function(){
		var id=$(this).data('int_id_mahasiswa');
		$('#modalDelete').attr(id);
	});
</script>


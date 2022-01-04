<?php 

?>
<div class="container-fluid">
<div class="col-md-12">
    <br>
				<div class="card">
					<div class="card-header">
						<b>Jadwal Bimbingan</b>
						<span class="">
							<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_user">
					<i class="fa fa-plus"></i> Tambah Jadwal </button>
				</span>
					</div>
</div>
</div>
</div>
<br>
<script>
	$('table').dataTable();
$('#new_user').click(function(){
	tambah('Tambah Jadwal','add_jadwal.php')
})
</script>
</div>
<div class="container-fluid">
	
	<div class="row">
	</div>
    <br>
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
<div class="table-responsive">
		<table class="table small">
			<thead>
				<tr>
					<th scope="col" class="w-auto">No</th>
					<th scope="col" class="w-auto">NIM</th>
					<!-- <th scope="col">NAMA</th> -->
					<th scope="col">WAKTU MULAI</th>
					<th scope="col">WAKTU SELESAI</th>
					<th scope="col">STATUS</th>
					
			</thead>
			<tbody>
			<?php
				include "db_connect.php";
				$tamPeg = mysqli_query($conn,"SELECT * FROM jadwal ");
			?>
			<?php if(mysqli_num_rows($tamPeg)>1){ 
       		 
            $no=0;
			while ($tpeg = mysqli_fetch_array($tamPeg)) {
			
        	?>
			<tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tpeg['nim'];?></td>
                    <td><?php echo $tpeg['waktu_mulai'];?></td>
                    <td><?php echo $tpeg['waktu_selesai'];?></td>
					<td><input type="submit" name="accept" value="Accept"/></td>
					
					

            </tr>
			<?php $no++; } ?>
        <?php } ?>
                </tbody>


                            </table>

							<?php
              
            
            ?>
                            </table>
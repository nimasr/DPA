<?php 

?>
<div class="container-fluid">
<div class="col-md-12">
    <br>
				<div class="card">
					<div class="card-header">
						<b>Formulir Bimbingan</b>
						<span class="">
							<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_user">
					<i class="fa fa-plus"></i> Tambah Data </button>
				</span>
					</div>
</div>
</div>
</div>
<br>
<script>
	$('table').dataTable();
$('#new_user').click(function(){
	tambah('Tambah Data','add_formulir.php')
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
					<th scope="col">NAMA</th>
					<th scope="col">SEMESTER</th>
					<th scope="col">JUDUL BIMBINGAN</th>
                    <th scope="col">NAMA DOSEN</th>
                    <th scope="col">STATUS</th>
					
					
			</thead>
			<tbody>
			<?php
				include "db_connect.php";
				$tamPeg = mysqli_query($conn,"SELECT * FROM formulir_bimbingan ");
			?>
			<?php if(mysqli_num_rows($tamPeg)>0){ 
       		 
            $no=0;
			while ($tpeg = mysqli_fetch_array($tamPeg)) {
			
        	?>
			<tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tpeg['nim'];?></td>
                    <td><?php echo $tpeg['nama_mahasiswa'];?></td>
					<td><?php echo $tpeg['semester'];?></td>
                    <td><?php echo $tpeg['judul_bimbingan'];?></td>
                    <td><?php echo $tpeg['nama_dosen'];?></td>
                    <td><input type="submit" name="sedang" value="On Progress"/></td>
                 
					

            </tr>
			<?php $no++; } ?>
        <?php } ?>
                </tbody>


                            </table>

							<?php
              
            
            ?>
                            </table>
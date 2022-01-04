<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b> Mahasiswa </b>
						<span class="">

							<!-- <button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_topic">
					<i class="fa fa-plus"></i> Tambah Mahasiswa </button> -->
				</span>
					</div>
<style>
	
	td{
		vertical-align: left !important;
	}
</style>
<div class="container-fluid">
	
	<div class="row">
	<!-- <div class="col-lg-12">
			<button class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> New user</button>
	</div> -->
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
					<th scope="col">TOPIK BIMBINGAN</th>
					<th scope="col">STATUS</th>
					<th scope="col">ACTION</th>
				</tr>
			</thead>
			<tbody>

<!-- SELECT * FROM mahasiswa AS m
LEFT JOIN formulir_bimbingan AS f ON m.id_mhs = f.id_formulir
UNION
SELECT * FROM mahasiswa AS m
RIGHT JOIN formulir_bimbingan AS f ON m.id_mhs = f.id_formulir 

SELECT nim, name, prodi, IDKonsentrasiUser, Email, NoHP FROM users order by name asc-->


			<?php
				include "db_connect.php";
				$tamPeg = mysqli_query($conn,"SELECT nim, nama_mahasiswa, semester, judul_bimbingan, status_formulir FROM formulir_bimbingan ");
			?>
			<?php if(mysqli_num_rows($tamPeg)>1){ ?>
       		 <?php
            $no=0;
			while ($tpeg = mysqli_fetch_array($tamPeg)) {
			
        	?>
			<tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tpeg['nim'];?></td>
                    <td><?php echo $tpeg['nama_mahasiswa'];?></td>
                    <td><?php echo $tpeg['semester'];?></td>
					<td><?php echo $tpeg['judul_bimbingan'];?></td>
					<td><?php echo $tpeg['status_formulir'];?></td>
					<td><input type="submit" name="terima" value="Terima"/></td>

            </tr>
			<?php $no++; } ?>
        <?php } ?>
                </tbody>


                            </table>

							<?php
              
            
            ?>
                            </table>
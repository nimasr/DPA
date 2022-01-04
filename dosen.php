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
						<b> Dosen </b>
						<span class="">

							<!-- <button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_topic">
					<i class="fa fa-plus"></i> Tambah Dosen </button> -->
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
					<th scope="col" class="w-auto">NIDN</th>
					<th scope="col">NAMA</th>
					<th scope="col">STATUS</th>
					<th scope="col">ACTION</th>
					
				</tr>
			</thead>
			<tbody>
			<?php
				include "db_connect.php";
				$tamPeg = mysqli_query($conn,"SELECT nip_dos, nama_dos FROM dosen order by nama_dos asc");
			?>
			<?php if(mysqli_num_rows($tamPeg)>0){ ?>
       		 <?php
            $no=0;
			while ($tpeg = mysqli_fetch_array($tamPeg)) {
			
        	?>
			<tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tpeg['nip_dos'];?></td>
                    <td><?php echo $tpeg['nama_dos'];?></td>
					<td><input type="submit" name="process" value="Process"/></td>
					<td><input type="submit" name="Edit" value="Edit"/></td>
                    

            </tr>
			<?php $no++; } ?>
        <?php } ?>
                </tbody>


                            </table>

							<?php
              
            
            ?>
                            </table>
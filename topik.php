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

							<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_topic">
					<i class="fa fa-plus"></i> Tambah Mahasiswa </button>
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
					<th scope="col">PRODI</th>
					<th scope="col">TOPIK BIMBINGAN</th>
					<th scope="col">EMAIL</th>
					<th scope="col">NO HP</th>
					<th scope="col">STATUS</th>
					<th scope="col">ACTION</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include "db_connect.php";
				$tamPeg = mysqli_query($conn,"SELECT nim, name, prodi, IDKonsentrasiUser, Email, NoHP FROM users order by name asc");
			?>
			<?php if(mysqli_num_rows($tamPeg)>1){ ?>
       		 <?php
            $no=0;
			while ($tpeg = mysqli_fetch_array($tamPeg)) {
			
        	?>
			<tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tpeg['nim'];?></td>
                    <td><?php echo $tpeg['name'];?></td>
                    <td><?php echo $tpeg['prodi'];?></td>
					<td><?php echo $tpeg['IDKonsentrasiUser'];?></td>
					<td><?php echo $tpeg['Email'];?></td>
					<td><?php echo $tpeg['NoHP'];?></td>

            </tr>
			<?php $no++; } ?>
        <?php } ?>
                </tbody>


                            </table>

							<?php
              
            
            ?>
                            </table>
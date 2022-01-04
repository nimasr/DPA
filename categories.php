<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-category">
				<div class="card">
					<div class="card-header">
						    Pembimbing
				  	</div>
					<div class="card-body">
					<TABLE align=center>
					<select name="nama_dos" id="nama_dos" class="form-control" onchange='changeValue(this.value)' required>
  <option value="">-Pilih-</option>
 <?php 
 $query=mysqli_query($conn, "select * from mahasiswa group by nama_dos order by nim asc"); 
 $result = mysqli_query($conn, "select * from mahasiswa group by nama_dos order by nim asc");  
 $jsArray = "var prdName = new Array();\n";
 while ($row = mysqli_fetch_array($result)) {  
 echo '<option name="nama_dos"  value="' . $row['nama_dos'] . '">' . $row['nama_dos'] . '</option>';  
 $jsArray .= "prdName['" . $row['nama_dos'] . "'] = {nim:'" . addslashes($row['nim']) . "',nama_mhs:'" . addslashes($row['nama_mhs']) . "',prodi:'".addslashes($row['prodi'])."'};\n";
  }
  ?>
</select>
<tr>
</form>
</table>
</div>
						</div>
					</div>
				</div>
			</form>
			</div>
<style>
	
	td{
		vertical-align: left !important;
	}
</style>
<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>Data Mahasiswa</b>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<colgroup>
								<col width="15%">
								<col width="40%">
								<col width="30%">
							</colgroup>
							<thead>
								<tr>
									
									<th class="text-center">NIM</th>
									<th class="text-center">Nama</th>
									<th class="text-center">Prodi</th>
								</tr>
							</thead>
							<tbody>
							<?php
                              if (isset($_POST['nama_dos'])) {
                $nama_dos=trim($_POST['nama_dos']);               
                //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox
                $tamPeg=mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama_dos='$nama_dos' ORDER BY nim DESC");
            
                $no=0;
                while ($tpeg = mysqli_fetch_array($tamPeg)) {
                $no++;
                ?>
            <tbody>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $tpeg['nim'];?></td>
                    <td><?php echo $tpeg['nama_mhs'];?></td>
                    <td><?php echo $tpeg['prodi'];?></td>
					<td><?php echo $tpeg['nama_dos'];?></td>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>

<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('nama_dos').value = prdName[id].nama_dos;
    document.getElementById('nama_mhs').value = prdName[id].nama_mhs;
    document.getElementById('nim').value = prdName[id].nim;
    document.getElementById('prodi').value = prdName[id].prodi;
};
</script>
<?php
              }  
            }
            ?>
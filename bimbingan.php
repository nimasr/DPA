<?php 

?>
<div class="container-fluid">
<div class="col-md-12">
    <br>
				<div class="card">
					<div class="card-header">
						<b>Form Bimbingan</b>
						<span class="">
							<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_user">
					<i class="fa fa-plus"></i> Tambah</button>
				</span>
					</div>
</div>
</div>
</div>
<br>
<script>
	$('table').dataTable();
$('#new_user').click(function(){
	tambah('Tambah Mahasiswa','tambah_mhs.php')
})
</script>
</div>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						    Pembimbing
				  	</div>
					<div class="card-body">
					<TABLE align=center>
        <form action="#" method="POST">
            <p>Select list:</p>
            
            <select name="nama_dos" class="form-control">
            <option value="">-Pilih-</option>
                <?php
                include "db_connect.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    =mysqli_query($conn, "SELECT * FROM mahasiswa GROUP BY nama_dos ORDER BY nama_dos");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['nama_dos'];?>"><?php echo $data['nama_dos'];?></option>
                <?php
                }
                ?>
            </select>
            <br>
            <button class="btn btn-primary btn-block btn-sm col-sm-5 float-center" type="submit">
					Tampilkan</button></span>
        </form>
</table>
                     </div>
                </div>
             </div>
        </div>
    </div>
</div>
<style>
	
	td{
		vertical-align: left !important;
	}
</style>
    <br>
<div class="container-fluid">
<div class="col-md-12">
				<div class="card">
					<div class="card-header">
		<table class="table small">
			<thead>
				<tr>
					<th scope="col" class="w-auto">No</th>
					<th scope="col" class="w-auto">NIM</th>
					<th scope="col">NAMA</th>
					<th scope="col">PRODI</th>
					<th scope="col">DOSEN</th>
				</tr>
			</thead>
			<tbody>
            <?php
            if (isset($_POST['nama_dos'])) {
                $nama_dos=trim($_POST['nama_dos']);
                
                //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox
                $tamPeg=mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama_dos='$nama_dos' ORDER BY nim ASC");
            
                $no=0;
                while ($tpeg = mysqli_fetch_array($tamPeg)) {
                $no++;
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $tpeg['nim'];?></td>
                    <td><?php echo $tpeg['nama_mhs'];?></td>
                    <td><?php echo $tpeg['prodi'];?></td>
					<td><?php echo $tpeg['nama_dos'];?></td>

                </tr>
                </tbody>

            <?php
              }  
            }
            ?>
            </table>


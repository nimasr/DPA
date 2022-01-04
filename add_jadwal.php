<form action="save_jadwal.php" method="POST">	
		<div class="form-group">
			<label for="name">NIM</label>
            <input type="int" name="nim" class="form-control">
		</div>
		<!-- <div class="form-group">
			<label for="name">Nama</label>
            <input type="text" name="nama_mhs" class="form-control">
		</div> -->
		<div class="form-group">
			<label for="name">Waktu Mulai</label>
            <input type="date" name="waktu_mulai" class="form-control">
		</div>
        <div class="form-group">
			<label for="name">Waktu Selesai</label>
            <input type="date" name="waktu_selesai" class="form-control">
		</div>
		<div class="form-group">
        <label for="name">Status Jadwal</label>
            <select name="status_jadwal" class="custom-select">
                <option>Ajukan</option>
                <option>Mulai</option>
                <option>Sedang Berlangsung</option>
                <option>Selesai</option>
            </select>
               
            
            </select>
        <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>


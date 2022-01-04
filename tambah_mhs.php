	<form action="simpan_mhs.php" method="POST">	
		<div class="form-group">
			<label for="name">NIM</label>
            <input type="text" name="nim" class="form-control">
		</div>
		<div class="form-group">
			<label for="name">Nama</label>
            <input type="text" name="nama_mhs" class="form-control">
		</div>
		<div class="form-group">
			<label for="name">Prodi</label>
            <input type="text" name="prodi" class="form-control">
		</div>
		<div class="form-group">
        <label for="name">Dosen</label>
            <select name="nama_dos" class="custom-select">
                <option>Pilih</option>
                <option>Syauqie Muhammad, S.Kom., M.Kom</option>
                <option>Pipit Febriana Dewi, M.Kom</option>
            
            </select>
        <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
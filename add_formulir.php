<form action="save_formulir.php" method="POST">	
		<div class="form-group">
			<label for="name">NIM</label>
            <input type="int" name="nim" class="form-control">
		</div>
		<div class="form-group">
			<label for="name">Nama</label>
            <input type="text" name="nama_mahasiswa" class="form-control">
		</div>
		<div class="form-group">
			<label for="name">Semester</label>
            <input type="int" name="semester" class="form-control">
		</div>
        <div class="form-group">
			<label for="name">Judul Bimbingan</label>
            <input type="text" name="judul_bimbingan" class="form-control">
		</div>
        <div class="form-group">
        <label for="name">Dosen</label>
            <select name="nama_dosen" class="custom-select">
                <option>Pilih</option>
                <option>Syauqie Muhammad, S.Kom., M.Kom</option>
                <option>Pipit Febriana Dewi, M.Kom</option>
            
            </select>
            <div class="form-group">
        <label for="name">Status</label>
            <select name="status_formulir" class="custom-select">
                <option>Ajukan</option>

            </select>
        <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>


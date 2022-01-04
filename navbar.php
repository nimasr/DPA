
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=mahasiswa" class="nav-item nav-mahasiswa"><span class='icon-field'><i class="fa fa-graduation-cap"></i></span> Mahasiswa</a>
				<a href="index.php?page=dosen" class="nav-item nav-dosen"><span class='icon-field'><i class="fa fa-briefcase"></i></span> Dosen</a>
				<a href="index.php?page=topics" class="nav-item nav-topics"><span class='icon-field'><i class="fa fa-comment"></i></span> Diskusi</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Pengguna</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>

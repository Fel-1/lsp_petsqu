<!-- header -->
<div class="agileits_header">
		<div class="container">
			<div class="agile-login">
				<ul>
				<?php
				if(!isset($_SESSION['log'])){
					echo '
					<li><a href="registered.php"> Register</a></li>
					<li><a href="login.php">Login</a></li>
					';
				} else {
					
					if($_SESSION['role']=='Member'){
					echo '
					<li style="color:black">Halo, '.$_SESSION["name"].'
					<li><a href="logout.php">Logout?</a></li>
					';
					} else {
					echo '
					<li style="color:black">Halo, '.$_SESSION["name"].'
					<li><a href="admin">Admin Panel</a></li>
					<li><a href="logout.php">Logout?</a></li>
					';
					};
					
				}
				?>
					
				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>

			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
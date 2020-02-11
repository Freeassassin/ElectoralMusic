<?php
	session_start(); 
	require 'header.php';
?>
	<div class="mainbody">
		<?php
			if (isset($_SESSION['userId'])) 
			{
				require'mainBody.php';
			}else
			{
				require'singUpForm.php';
			}
		?>

	</div>
<?php
	require 'footer.php';
?>
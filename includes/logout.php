<?php
	
	session_start();
	session_destroy();
	
	echo "<script type='text/javascript'> alert('Obrigado por utilizar nosso sistema!'); window.location.href='../?pagina=principal'; </script>";

?>
<?php

if (isset($_GET['act'])) :
	switch ($_GET['act']) :
		case 'edit-usr':
			require_once('user/profile.php');
			break;
	endswitch;
else : ?>
<div class="text-center col-sm-offset-4 col-sm-6">
	<h2>Sistema em desenvolvimento por<br>Carlu P. Azevedo</h2>
</div>
<?php endif; ?>
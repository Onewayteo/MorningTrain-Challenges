<!-- Author information is given in the page  -->

<?php
	require_once('template.class.php');

	$template = new Template('templates/test.tpl.html');

	$template->assign('title1','This Is Some Facts about me');
	$template->assign('name','Teo Wang Wei');
	$template->assign('age','24');
	$template->assign('sex','male');
	$template->assign('email','e150088@e.ntu.edu.sg');
	$template->assign('title2','This Is Another Article');
	$template->assign('content2','Sample Content 2');

	$template->show();
?>

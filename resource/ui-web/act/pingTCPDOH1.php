<?php
putenv("dohNUM=1");
system('sudo /opt/de_GWD/ui-pingTCPDOH $dohNUM');
die();
?>

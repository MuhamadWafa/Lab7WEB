<?php
$hari = date("l");
if ($hari == "Sunday") echo "Minggu";
elseif ($hari == "Monday") echo "Senin";
else echo "Hari lainnya";
?>
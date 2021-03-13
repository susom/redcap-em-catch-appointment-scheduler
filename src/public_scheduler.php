<?php

namespace Stanford\CatchAppointmentScheduler;

/** @var \Stanford\CatchAppointmentScheduler\CatchAppointmentScheduler $module */

use REDCap;

$public_url = $module->getUrl('src/types.php', true, true) . '&email=""';

?>

<a href='<?php echo $public_url; ?>'><?php echo $public_url; ?></a>

<?php

// 1) Use the method date_default_timezone_set to set the timezone.
// 2) Timezone: 'Australia/Melbourne'

//https://www.php.net/manual/en/function.geoip-time-zone-by-country-and-region.php
echo date_default_timezone_get() . PHP_EOL;
echo date("m/d/y h:i:s a");
date_default_timezone_set("Australia/Melbourne");
echo date("m/d/y h:i:s a") . PHP_EOL;
echo date_default_timezone_get() . PHP_EOL;
?>
<?php
// Other Filter FILTER_CALLBACK
$name="Geekyshows";
echo filter_var($name, FILTER_CALLBACK, array("options"=>"strtoupper"));

// User Defined function with FILTER_CALLBACK
function convertwtoG($info) {
 return str_replace("website", "www.geekyshows.com", $info);
}
$info = "You can visit our website and learn php from website";
echo filter_var($info, FILTER_CALLBACK, array("options"=>"convertwtoG"));

?>
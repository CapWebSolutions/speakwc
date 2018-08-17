<?php
/**
 * Display listing of all html files in unordered list as listing of links
 */
echo "<h2>Presentations Available</h2>";
$path = ".";
$dh = opendir($path);
$i=1;
echo "<ul>";
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != "index.html" &&$file != ".htaccess" && $file != "error_log" && $file != "cgi-bin" ) {
    	if ( strpos($file, '.html') || strpos($file, '.htm') ) {
	        echo "<li><a href='$path/$file'>$file</a></li>";
	        $i++;
	    }
	}
}
echo "</ul>";
closedir($dh);
?>

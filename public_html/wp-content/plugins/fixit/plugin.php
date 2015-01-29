<?php
/*
Plugin Name: Sandbox
Plugin URI: http://apergyinc.com/sandbox/
Description: This is a sandbox for test code.
Author: adruff
Author URI: http://apergyinc.com
Version: 1.0.0
Text Domain:apergy
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/* How to Use
 * Create a page /sandbox/ , make it private, and then add your code in the conditional.
 */


if ($_SERVER["REQUEST_URI"]==='/sandbox/'){
    //add code here
phpinfo();

}






?>

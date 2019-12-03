<?php
/*
Plugin Name:  Mouse And Keyboard Disable
Description:  Plugin "Mouse And Keyboard Disable" helps users not to right click and disable keyboard (Ctrl+C, Ctrl+V, Ctrl+A) for all Browsers.
Version:      0.1
Author:       itroz
Author URI:   https://itroz.com
License:      GPLv2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  itroz
*/

add_action( 'wp_head', 'M_and_Kd'); 
function M_and_Kd(){
echo '  
<script>
    function keypressed() {return false;}
var isM = (navigator.mouse == "enable") ? 1 : 0;
    if(navigator.mouse == "enable") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
   return false;}
function mousehandler(e){
    var myM = (isM) ? e : event;
    var eventbutton = (isM) ? myM.which : myM.button;
    if((eventbutton==2)||(eventbutton==3)) return false;}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
document.onkeydown=keypressed;
</script>';
}

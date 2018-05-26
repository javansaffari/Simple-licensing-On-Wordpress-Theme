<?php
@$mjs = file_get_contents( get_template_directory()."/footer.php");
if(!strstr($mjs,"<div class=\"designer\"> Developed by <a target=\"_blank\" rel=\"nofollow\" href=\"#/\">Mohammad Javan Saffari</a></div>")){exit;}

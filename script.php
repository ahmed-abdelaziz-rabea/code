#!/usr/bin/php
<?php
echo "installing Project ...............";
echo "\n \n \n";
shell_exec("composer create-project roots/bedrock && cd bedrock/web/app/themes && composer create-project roots/sage");
shell_exec("cd bedrock/web/app/themes/sage && git clone git@git.code95.info:code95/starter-theme.git framework");
shell_exec("cp -v functions.php bedrock/web/app/themes/sage/resources");
echo "Function copy done ...............";
echo "\n";

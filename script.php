#!/usr/bin/php
<?php
echo "installing Project ...............";
echo "\n \n \n";


shell_exec("composer create-project roots/bedrock && cd bedrock/web/app/themes && composer create-project roots/sage");

echo "\n \n \n";
echo "Project Install Done";

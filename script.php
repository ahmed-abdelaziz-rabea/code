#!/usr/bin/php
<?php

echo "installing bedrock ......";
shell_exec("composer create-project roots/bedrock ");
echo "bedrock installed";
echo "change Dir ...";
shell_exec("cd bedrock/web/app/themes");
echo "Go To theme folder done";
echo "installing Sage ....";
shell_exec("composer create-project roots/sage");
echo "sage installed";
shell_exec("clean");

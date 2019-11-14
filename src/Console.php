<?php
namespace setup;
/**
 *
 */
class Console
{
  public static function StaticMethod(){

    echo "Q ?";

    $file = fgets(STDIN);
    echo $file;


  }

}

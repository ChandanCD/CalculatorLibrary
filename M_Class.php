<?php

Class M_class{

  //This function will fetch extension of a file
  public function file_extension($file_name){
   return pathinfo($file_name, PATHINFO_EXTENSION);
  }
  
  //file extension alternative method
  public function extension($file_name){
    return end(explode(".", $file_name ) );
  }
  
}

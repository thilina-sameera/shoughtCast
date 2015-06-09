<?php
if(!is_dir("recordings")){
    $res = mkdir("recordings",0777); 
}
move_uploaded_file($_FILES["file"]["tmp_name"],
  $res . $_FILES["file"]["fname"]);
?>
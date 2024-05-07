<?php
include_once 'operations.php';
$_POST['image'] = upload_docs("image");
if(insert_edit_form("events")){
header("location:../index.php?msg=Event Created Successfully");
}
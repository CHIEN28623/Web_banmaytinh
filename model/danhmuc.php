<?php
 function insert_danhmuc($tenloai) {
    $sql="INSERT INTO danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
 }

 function delete_danhmuc($id) {
    $sql="DELETE from danhmuc WHERE id=".$id;
    // $sql=" DELETE FROM danhmuc WHERE `danhmuc`.`id` = {$id}";
    pdo_query($sql);
 }
function loadall_danhmuc(){
    $sql="SELECT * from danhmuc order by id DESC";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id) {
    $sql="SELECT * FROM danhmuc WHERE id=".$_GET['id'];
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id,$tenloai){
    $sql="UPDATE danhmuc set name='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}
?>
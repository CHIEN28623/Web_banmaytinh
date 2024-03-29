<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan) {
        $sql="INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
     }

     function loadall_binhluan($idpro){
        $sql="SELECT * from binhluan WHERE 1";
        if($idpro>0) $sql.=" AND idpro='".$idpro."' order by id DESC";
        $listbl=pdo_query($sql);
        return $listbl;
    }

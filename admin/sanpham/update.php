<?php
if(is_array($sanpham)){
    extract($sanpham);
}
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
    $hinh="no photo";
}
?>

<div class="">
    <div class="border-2 border-black rounded-md py-2 bg-green-200">
        <h1 class="px-2 font-bold ">CẬP NHẬT HÀNG HÓA</h1>
    </div>
    <div class="px-4 py-2">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div>
                <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                           foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$id) $s="selected"; else $s="";
                            // else echo '<option value="'.$id.'" selected>'.$name.'</option>';
                            echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                           }
                        ?>
                </select>   
            </div>
            <div>
                <label for="">Tên sản phẩm</label> <br>
                <input type="text" name="tensp" class=" border-2 w-full" value="<?=$name?>">
            </div>
            <div>
                <label for="">Giá</label> <br>
                <input type="text" name="giasp" class=" border-2 w-full" value="<?=$price?>">
            </div>
            <div>
                <label for="">Hình</label> <br>
                <input type="file" name="hinh" class=" border-2 w-full">
                <?=$hinh?>
            </div>
            <div>
                <label for="">Mô tả</label> <br>
                <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                <!-- <input type="text" name="tensp" class=" border-2 w-full"> -->
            </div>
            <br>
            <div>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập Nhật"   class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">
                <input type="reset" value="Nhập lại"   class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"  class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105" ></a>
            </div>
            <br>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
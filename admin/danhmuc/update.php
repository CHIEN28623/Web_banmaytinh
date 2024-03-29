<?php
if(is_array($dm)){
    extract($dm);
}
?>

<div class="">
    <div class="border-2 border-black rounded-md py-2 bg-green-200">
        <h1 class="px-2 font-bold ">CẬP NHẬT HÀNG HÓA</h1>
    </div>
    <div class="px-4 py-2">
        <form action="index.php?act=updatedm" method="post">
            <div>
                <label for="">Mã Loại</label> <br>
                <input type="text" name="maloai" placeholder="" disabled class="w-full font-bold bg-[#BDBDBD]">
            </div>
            <div>
                <label for="">Tên loại</label> <br>
                <input type="text" name="tenloai" class=" border-2 w-full" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
            </div>
            <br>
            <div>
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật"   class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">
                <input type="reset" value="Nhập lại"   class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"  class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105" ></a>
            </div>
            <br>
            <?php
            if(isset($thongbao)&&($thongbao=!"")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
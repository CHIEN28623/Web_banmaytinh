<div class="">
    <div class="border-2 border-black rounded-md py-2 bg-green-200">
        <h1 class="px-2 font-bold ">THÊM MỚI HÀNG HÓA</h1>
    </div>
    <div class="px-4 py-2">
        <form action="index.php?act=adddm" method="post">
            <div>
                <label for="">Mã Loại</label> <br>
                <input type="text" name="maloai" placeholder="" disabled class="w-full font-bold bg-[#BDBDBD]">
            </div>
            <div>
                <label for="">Tên loại</label> <br>
                <input type="text" name="tenloai" class=" border-2 w-full">
            </div>
            <br>
            <div>
                <input type="submit" name="themmoi" value="Thêm mới"   class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">
                <input type="reset" value="Nhập lại"   class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"  class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105" ></a>
            </div>
            <br>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
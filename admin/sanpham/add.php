<div class="">
    <div class="border-2 border-black rounded-md py-2 bg-green-200">
        <h1 class="px-2 font-bold ">THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="px-4 py-2">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div>
                Danh muc <br>
                <select name="iddm" id="" class="border-2">
                    <?php
                     foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                     }
                    ?>
                </select>
            </div>
            <br>
            <div>
                <label for="">Tên sản phẩm</label> <br>
                <input type="text" name="tensp" class=" border-2 w-full">
            </div>
            <div>
                <label for="">Giá</label> <br>
                <input type="text" name="giasp" class=" border-2 w-full">
            </div>
            <div>
                <label for="">Hình</label> <br>
                <input type="file" name="hinh" class=" border-2 w-full">
            </div>
            <div>
                <label for="">Mô tả</label> <br>
                <textarea name="mota" id="" cols="200" rows="10" class="border-2"></textarea>
                <!-- <input type="text" name="tensp" class=" border-2 w-full"> -->
            </div>
            <br>
            <div>
                <input type="submit" name="themmoi" value="Thêm mới"   class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">
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
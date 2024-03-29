
<body>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <div class="border-2 py-2 px-2 border-black w-[250px] m-auto rounded-md bg-black">
        <h1 class="text-2xl text-center text-white">Danh sách tài khoản</h1>
    </div>
    <br>
    <nav class="px-[80px]">
        <table>
            <tr>
                <th class="border-2 w-[400px] border-white font-bold bg-black text-white px-2 py-2"></th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">ID</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Nội dung bình luận</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">IDuser</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">IDpro</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Ngày bình luận</th>
                <th class="border-2 w-[300px] border-white font-bold bg-black text-white px-2 py-2"></th>
            </tr>

            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $suabl = "index.php?act=suabl&id=".$id;
                $xoabl = "index.php?act=xoabl&id=".$id;
                echo '<tr>
                <td class="border-2 w-[250px] border-black px-2 py-2"><input type="checkbox" name="" id=""></td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$id.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$noidung.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$iduser.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$idpro.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$ngaybinhluan.'</td>
                <td class="border-2 w-[300px] border-black px-2 py-2">  
                    <a href="'.$suabl.'">
                        <input type="button" value="Sửa" class="border-2 border-black px-2 py- text-white bg-black font-bold rounded-md hover:scale-105 active:text-green-300">  
                    </a>
                    <a href="'.$xoabl.'">
                        <input type="button" value="xóa" class="border-2 border-black px-2 py- text-white bg-black font-bold rounded-md hover:scale-105 active:text-green-300">  
                    </a>
                </td>
            </tr>';
            }
            ?>
        </table>
        <br>
        <div>
            <input class="border-2 border-black  px-2 rounded text-white bg-black font-bold hover:scale-105 active:text-green-300" type="button" value="Chọn tất cả">
            <input class="border-2 border-black  px-2 rounded text-white bg-black font-bold hover:scale-105 active:text-green-300" type="button" value="Bỏ chọn tất cả">
            <input class="border-2 border-black  px-2 rounded text-white bg-black font-bold hover:scale-105 active:text-green-300" type="button" value="Xóa các mục đã chọn">
            <!-- <a href="index.php?act=adddm">
                <input type="button" value="Nhập thêm" class="border-2 border-black  px-2 rounded text-white bg-black font-bold hover:scale-105 active:text-green-300">
            </a> -->
        </div>
    </nav>
    <br>
    <br>
</body>

</html>
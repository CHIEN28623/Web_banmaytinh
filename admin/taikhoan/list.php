
<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="border-2 py-2 px-2 border-black w-[250px] m-auto rounded-md bg-black">
        <h1 class="text-2xl text-center text-white">Danh sách tài khoản</h1>
    </div>
    <br>
    <nav class="px-[80px]">
        <table>
            <tr>
                <th class="border-2 w-[400px] border-white font-bold bg-black text-white px-2 py-2"></th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Mã tài khoản</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Tên đăng nhập</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Mật khẩu</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Email</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Địa chỉ</th>
                <th class="border-2 w-[400px] border-white font-bold bg-black text-white px-2 py-2">Điện thoại</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Vai trò</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2"></th>
            </tr>

            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk = "index.php?act=suadm&id=".$id;
                $xoatk = "index.php?act=xoadm&id=".$id;
                echo '<tr>
                <td class="border-2 w-[250px] border-black px-2 py-2"><input type="checkbox" name="" id=""></td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$id.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$user.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$pass.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$email.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$address.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$tel.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$role.'</td>
                <td class="border-2 w-[700px] border-black px-2 py-2">  
                    <a href="'.$suatk.'">
                        <input type="button" value="Sửa" class="border-2 border-black px-2 py- text-white bg-black font-bold rounded-md hover:scale-105 active:text-green-300">  
                    </a>
                    <a href="'.$xoatk.'">
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
            <a href="index.php?act=adddm">
                <input type="button" value="Nhập thêm" class="border-2 border-black  px-2 rounded text-white bg-black font-bold hover:scale-105 active:text-green-300">
            </a>
        </div>
    </nav>
    <br>
    <br>
</body>

</html>
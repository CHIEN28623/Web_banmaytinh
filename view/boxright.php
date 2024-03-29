<!-- <div class="w-[20%] pl-4"> -->
<!-- TAI KHOAN -->
<div class="border-4 rounded-md border-black py-2 px-2">
    <div>
        <div class="text-center border-b-2 py-2 border-black text-white bg-black font-bold rounded">TÀI KHOẢN
        </div>
        <div>
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
                <div class="text-center">
                    Xin Chào <br>
                    <p class="text-red-500 font-bold"><?= $user ?></p>
                </div>
                <br>
                <div class="">
                    <li class="border-b-2 border-white rounded-md active:text-green-300 hover:scale-105 bg-black">
                        <a href="index.php?act=quenmk" class="active:text-green-300 hover:text-red-300 text-white">Quên mật khẩu</a>
                    </li>
                    <li class="border-b-2 border-white rounded-md active:text-green-300 hover:scale-105 bg-black">
                        <a href="index.php?act=edit_taikhoan" class="active:text-green-300 hover:text-red-300 text-white">Cập nhật tài khoản</a>
                    </li>
                    <?php
                    if ($role == 1) {
                    ?>
                        <li class="border-b-2 border-white rounded-md active:text-green-300 hover:scale-105 bg-black">
                            <a href="admin/index.php" class="active:text-green-300 hover:text-red-300 text-white">Đăng nhập ADMIN</a>
                        </li>
                    <?php } ?>
                    <li class="border-b-2 border-white rounded-md active:text-green-300 hover:scale-105 bg-black">
                        <a href="index.php?act=thoat" class="active:text-green-300 hover:text-red-300 text-white">Đăng xuât</a>
                    </li>
                </div>
            <?php
            } else {
            ?>
                <form action="index.php?act=dangnhap" method="post">
                    <br>
                    TÊN ĐĂNG NHẬP
                    <br>
                    <input type="text" name="user" class="border-2 border-black w-full"> <br> <br>
                    MẬT KHẨU
                    <br>
                    <input type="password" name="pass" class="border-2 border-black w-full"> <br> <br>
                    <input type="checkbox" name=""> Ghi nhớ tài khoản?
                    <br> <br>
                    <input type="submit" value="ĐĂNG NHẬP" name="dangnhap" class="w-full bg-[#bdbdbd] text-white hover:text-black hover:scale-105 rounded font-bold py-[2px]">
                </form>
                <li class="text-center">
                    <a href="#" class="text-[#BDBDBD] hover:text-black font-bold text-center">Quên mật khẩu
                        ?</a>
                </li>
                <li class="text-center">
                    <a href="index.php?act=dangky" class="text-[#BDBDBD] hover:text-black font-bold text-center">Đăng ký thành
                        viên</a>
                </li>
            <?php } ?>
        </div>
    </div>
</div>

<br>
<!-- DANh MUC -->
<div class="border-4 border-black py-2 px-2 rounded-md">
    <div class="text-center border-2 bg-black text-white font-bold py-2 rounded-md">DANH MUC</div>
    <!-- <br> -->
    <ul class="py-2">
        <?php
        foreach ($dsdm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=sanpham&iddm=" . $id;
            echo '<li class="border-b-2 text-center hover:scale-105">
                      <a href="' . $linkdm . '" class="hover:text-red-300 active:text-green-300">' . $name . '</a>
                    </li>';
           }
        ?>
    </ul>

    <br>
    <form action="index.php?act=sanpham" method="post">
        <input type="text" name="kyw" class="border-2 border-[#BDBDBD] rounded-md w-[65%] pb-[2px]">
        <input type="submit" name="timkiem" value="tìm kiếm" class="text-xs py-[5px] rounded-md hover:text-black font-bold hover:scale-105 border-2 border-[#BDBDBD] bg-[#bdbdbd] text-white w-[30%]">
    </form>
</div>

<!-- TOP san pham dc yeu thich -->
<br>
<div class="border-4 border-black  rounded-md py-2 px-2">
    <div class="text-center border-2 bg-black text-white font-bold py-2 rounded-md">TOP 10 YÊU THÍCH</div>
    <?php
    foreach ($dstop10 as $sp) {
        extract($sp);
        $linksp = "index.php?act=sanphamct&idsp=" . $id;
        $img = $img_path . $img;
        echo ' <div class="hover:scale-105 hover:text-red-300 active:text-green-300">
              <a href="' . $linksp . '"><img src="' . $img . '" alt="" class="w-[80px] inline-block m-auto px-2 py-2 rounded-2xl"> </a>
              <a href="' . $linksp . '" class="hover:scale-150">' . $name . '</a>
      </div>';
    }
    ?>

</div>
</div>
</main>

</body>

</html>
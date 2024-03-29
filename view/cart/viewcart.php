<script src="https://cdn.tailwindcss.com"></script>

<body>
    <main class="flex">
        <div class="box-right w-[75%] m-auto">
            <div class="text-center w-[200px] rounded-2xl m-auto py-2 border-2 bg-black text-white font-bold">GIỎ HÀNG</div>
            <div>
                <table class="text-center flex justify-center py-2">
                    <tr class="">
                        <th class="border-2 px-8 text-white bg-black">Hình</th>
                        <th class="border-2 px-8 text-white bg-black">Sản phẩm</th>
                        <th class="border-2 px-8 text-white bg-black">Đơn giá</th>
                        <th class="border-2 px-8 text-white bg-black">Số lượng</th>
                        <th class="border-2 px-8 text-white bg-black">Thành tiền</th>
                        <th class="border-2 px-8 text-white bg-black">Thao tác</th>
                    </tr>

                    <?php
                    $tong = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;
                        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';
                        echo '
                        <tr>
                            <td class="border-2 px-8 "><img src="' . $hinh . '" alt="" class="h-[60px]"></td>
                            <td class="border-2 px-8 ">' . $cart[1] . '</td>
                            <td class="border-2 px-8 ">' . $cart[3] . '</td>
                            <td class="border-2 px-8 ">' . $cart[4] . '</td>
                            <td class="border-2 px-8 ">' . $ttien . '</td>
                            <td class="border-2 px-8 active:text-green-300">' . $xoasp . '</td>
                        </tr>';
                        $i+=1;
                        ;
                        echo '
                        <tr>
                            <td class="border-2 px-8 text-white bg-black">Tổng đơn hàng</td>
                            <td class="border-2 px-8 text-white bg-black"></td>
                            <td class="border-2 px-8 text-white bg-black"></td>
                            <td class="border-2 px-8 text-white bg-black"></td>
                            <td class="border-2 px-8 text-white bg-black">' . $tong . '</td>
                            <td class="border-2 px-8 text-white bg-black"></td>
                        </tr>
                        ';
                    }
                    ?>

                </table>
                <div class="flex space-x-2 justify-center">
                    <button class="border-2 rounded px-2 border-black active:bg-white text-white bg-black hover:text-green-300">Đồng ý đặt hàng</button>
                    <button class="border-2 rounded px-2 border-black active:bg-white text-white bg-black hover:text-green-300">Hủy đơn hàng</button>
                </div>
            </div>
        </div>
        <!-- end-phan box trai -->
        <!-- phaan boxx phai......................................................................  -->
        <div class="w-[20%] pl-4">

            <div class="">
                <?php
                include "boxright.php";
                ?>
            </div>
            <!-- end phan box phai -->
        </div>
    </main>


</body>

</html>
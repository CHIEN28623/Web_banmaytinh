<body>
    <main class="flex">
        <div class="w-[90%] m-auto">
            <div class="w-[80%] m-auto pb-[200px]">
                <div class="pb-[1000px] border-[10px] border-[black] rounded-md">
                    <div class="text-center py-2 text-xl border-2 w-full bg-[#BDBDBD] text-white rounded-md font-bold">QUÊN MẬT KHẨU</div>
                    <div class="">
                        <form class="px-2 py-2" action="index.php?act=quenmk" method="post">
                            Email
                            <input type="email" name="email" class="border-2 border-[$bdbdbd] py-2 rounded-md w-full" placeholder=" email"> <br> <br>
                            <div class="">
                                <input type="submit" value="Gửi" name="guiemail" class="border-2 px-2 border-[#bdbdbd] rounded-md active:text-green-300 hover:text-white hover:bg-[#BDBDBD]">
                                <input type="reset" value="Nhập lại" class="border-2 px-2 border-[#bdbdbd] rounded-md active:text-green-300 hover:text-white hover:bg-[#BDBDBD]">
                            </div>
                        </form>
                        <br>
                        <h2 class="text-red-600 text-center">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- enn-phan box trai -->

        <!-- phaan boxx phai......................................................................  -->
        <div class="w-[20%] pl-4">

            <div class="">
                <?php
                include "view/boxright.php";
                ?>
            </div>
            <!-- end phan box phai -->
        </div>
    </main>


</body>

</html>
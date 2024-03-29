<body>
    <main class="flex">
        <div class="w-[90%] m-auto">
            <div class="w-[80%] m-auto pb-[220px]">
                <div class="w-full border-4 border-black rounded-md  py-2 px-2 h-[500px]">
                    <div>
                        <?php
                        extract($onesp);
                        ?>
                        <div class="text-center border-2 bg-black text-white font-bold py-2"><?= $name ?></div>
                        <div class="py-2">
                            <?php
                            $img = $img_path . $img;
                            echo ' <img src="' . $img . '" alt="" class=" m-auto py-4 hover:scale-105 rounded-[20px] w-[480px]">';
                            echo '<p class="text-center text-xs font-bold">' . $mota . '</p>'
                            ?>
                        </div>
                    </div>
                </div>

                <br>

                <!-- <div class="border-2 border-black  py-2 px-2 h-[300px]"> -->
                    <!-- <div class="text-center border-2 bg-black text-white font-bold py-2">BÌNH LUẬN</div> -->
                    <div id="binhluan">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?= $id ?>});
                            });
                        </script>
                    </div id="binhluan">
                <!-- </div> -->

                <br>

                <div class=" border-2 border-black py-2 px-2 h-[300px]">
                    <div class="text-center border-2 bg-black text-white font-bold py-2">SẢN PHẨM CÙNG LOẠI</div> <br>
                    <div class="px-4">
                        <?php
                        foreach ($sp_cung_loai as $sp_cung_loai) {
                            extract($sp_cung_loai);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            echo '<li><a href="' . $linksp . '" class="hover:text-green-300 active:text-red-300">' . $name . '</a?</li>';
                        }
                        ?>
                    </div>
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
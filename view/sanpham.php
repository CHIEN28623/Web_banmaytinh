<body>
    <main class="flex justify-betwwen">
    <div class="w-[90%] m-auto">
    <div class="w-[80%] m-auto">
        <div class="w-full border-2 border-black  py-2 px-2 pb-[200px]">
            <div>
                <div class="text-center border-2 bg-black text-white font-bold py-2">Sản Phẩm : <strong><?=$tendm?></strong></div>
                <div class="grid grid-cols-3 gap-4">
                    <?php
                          $i = 0;
                          foreach ($dssp as $sp) {
                              extract($sp);
                              $linksp="index.php?act=sanphamct&idsp=".$id;
                              $hinh=$img_path.$img;
                              if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                                  $mr="";
                              } else {
                                  $mr="mr";
                              }
                              echo '<div class="'.$mr.' pl-2 py-6">
                                        <div class="border-2 rounded-md border-[#BDBDBD] h-[250px] w-[250px] hover:scale-105">
                                        <a href="'.$linksp.'">  
                                           <img src="'.$hinh.'" alt="" class=" m-auto py-4 hover:scale-105 rounded-[20px] w-[90%]">
                                           
                                           <div class="text-center">
                                            <p class="text-center text-red-600 font-bold">Giá '.$price.'$</p>
                                            <a href="'.$linksp.'" class="font-bold text- hover:text-red-300 active:text-green-300">'.$name.'</a>
                                           </div>
                                           <br>
                                        </div>
                                    </div>';
                              $i += 1;
                          }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
        <!-- enn-phan box trai -->

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
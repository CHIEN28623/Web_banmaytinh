<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <main class="flex">
        <link rel="stylesheet" href="style.css">
        <!-- phan box trai.............................................................. -->
        <div class="w-[80%] m-auto">
            <div>
                <!-- Slideshow container -->
                <div class="">
                    <img class="mySlides w-full" src="https://www.w3schools.com/howto/img_nature_wide.jpg"  > 
                    <img class="mySlides w-full" src="https://www.w3schools.com/howto/img_snow_wide.jpg"  > 
                    <img class="mySlides w-full" src="https://www.w3schools.com/howto/img_mountains_wide.jpg"  > 
                    <img class="mySlides w-full" src="https://www.w3schools.com/howto/img_mountains_wide.jpg"  >
                </div>
                <br>
            </div>
            <br>

            <!-- phần thân trang-->
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid grid-cols-2 xl:grid-cols-3 gap-8">
                <?php
                $i = 0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $img;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<div class="abc' . $mr . ' pl-4">
                              <div class="border-2 rounded-md border-[#BDBDBD] h-[300px] w-[300px] hover:scale-105">
                                 <a href="' . $linksp . '">  
                                 <img src="' . $hinh . '" alt="" class=" m-auto py-4 hover:scale-110 rounded-[20px] w-[90%]">
    
                                 <div class="text-center">
                                  <p class="text-center text-red-600 font-bold">Giá ' . $price . '$</p>
                                  <a href="' . $linksp . '" class="font-bold text-xl hover:text-red-300 active:text-green-300">' . $name . '</a>

                                  <div class=" btnaddtocart">
                                  <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="' . $id . '">
                                    <input type="hidden" name="name" value="' . $name . '">
                                    <input type="hidden" name="img" value="' . $img . '">
                                    <input type="hidden" name="price" value="' . $price . '">
                                    <button class="hover:text-red-300" name="addtocart"><i class="fa-solid fa-cart-shopping"></i></button>
                                  </form>
                                  </div>  
                            </div>
                         <br>     
                    </div> 
                </div>';
                    $i += 1;
                }
                ?>

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
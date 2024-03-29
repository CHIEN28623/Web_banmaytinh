<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table tr{
            border: 2px solid black;
        }
    </style>
</head> -->

<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="border-2 py-2 px-2 border-black w-[450px] m-auto rounded-md bg-black">
        <h1 class="text-2xl text-center text-white ">Danh sách sản phẩm</h1>
    </div>
    <br>
    <nav class="px-[80px]">
        <form action="index.php?act=listsp" method="POST">
            <input type="text" name="kyw" class="border-2">
            <select name="iddm" class="border-2">
                <option value="0" selected>Tất cả</option>
                    <?php
                     foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                     }
                    ?>
                    <input type="submit" name="listok" value="tìm kiếm" class="border-2 bg-black text-white px-2 font-bold active:text-green-300 hover:text-red-300 hover:scale-105">
            </select>
        </form>
        <br>
        <table>
            <tr>
                <th class="border-2 w-[400px] border-white font-bold bg-black text-white px-2 py-2"></th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">MÃ LOẠI</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">Tên SẢN PHẨM</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">HÌNH</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">GIÁ</th>
                <th class="border-2 w-[500px] border-white font-bold bg-black text-white px-2 py-2">LƯỢT XEM</th>
                <th class="border-2 w-[250px] border-white font-bold bg-black text-white px-2 py-2"></th>
            </tr>

            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=".$id;
                $xoasp = "index.php?act=xoasp&id=".$id;
                $hinhpath="../upload/".$img;
                if(is_file($hinhpath)){
                    $hinh="<img src='".$hinhpath."' height='80'>";
                }else{
                    $hinh="no photo";
                }
                
                echo '<tr>
                <td class="border-2 w-[250px] border-black px-2 py-2"><input type="checkbox" name="" id=""></td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$id.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$name.'</td>
                <td class="border-2 w-[800px] border-black px-2 py-2">'.$hinh.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$price.'</td>
                <td class="border-2 w-[500px] border-black px-2 py-2">'.$luotxem.'</td>
                <td class="border-2 w-[350px] border-black px-2 py-2">  
                    <a href="'.$suasp.'">
                        <input type="button" value="Sửa" class="border-2 border-black px-2 py- text-white bg-black font-bold rounded-md hover:scale-105 active:text-green-300">  
                    </a>
                    <a href="'.$xoasp.'">
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
            <a href="index.php?act=addsp">
                <input type="button" value="Nhập thêm" class="border-2 border-black  px-2 rounded text-white bg-black font-bold hover:scale-105 active:text-green-300">
            </a>
        </div>
    </nav>
    <br>
    <br>
</body>

</html>
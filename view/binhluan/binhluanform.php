<?php
session_start();
$iduser = $_SESSION['user']['id'];
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body>
    <!-- DANh MUC -->
    <div class="border-4 border-black py-2 px-2 rounded-md">
        <div class="text-center border-2 bg-black text-white font-bold py-2">BÌNH LUẬN</div>
        <br>
        <div class="h-[150px]">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr class="text-center"><td class="pl-[300px] font-bold">'.$noidung.'</td>';
                    echo '<td class=">'.$iduser.'</td>';
                    echo '<td class=">'.$ngaybinhluan.'</td></tr>';
                }
                ?>
            </table>
        </div>
        <br>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="idpro" value="<?= $idpro ?>">
            <input type="text" name="noidung" class="border-2 border-[#BDBDBD] rounded-md w-[68%] pb-[2px]">
            <input type="submit" name="guibinhluan" value="Gửi bình luận" class="text-xs py-[5px] rounded-md hover:text-black font-bold hover:scale-105 border-2 border-[#BDBDBD] bg-[#bdbdbd] text-white w-[30%]">
        </form>
    </div>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
    </div>

</body>

</html>
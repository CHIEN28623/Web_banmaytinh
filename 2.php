<?php
session_start();
if (isset($_SESSION['mycart'])) {
    foreach ($_SESSION['mycart'] as $cart) {
        echo "Mã sp; " . $cart[0];
        echo " Tên sp; " . $cart[1];
        echo " Giá sp; " . $cart[2];
        echo " Sô lượng sp; " . $cart[3] . "<br>";
    }
    echo '<h1>Sessions đã show</h1>';
} else {
    echo '<h1>Sessions đã hủy</h1>';
}
echo '<a href="1.php">Khởi tạo</a>';
echo '<a href="3.php">Hủy session</a>';

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <!-- css -->
  <!-- <style>
    * {
      box-sizing: border-box
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -22px;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }
  </style> -->
  <!-- end-css -->
</head>

<body class="">
  <div class="container w-[95%] m-auto">
    <header class="py-2">
      <div class="">
        <div class="border-2 border-green-400 ">
        <a href="index.php"><h1 class="border-2 border-black py-6 rounded-[4px] bg-black font-bold text-white text-center px-2 text-4xl">Siêu thị trực tuyến</h1></a>
        </div>
      </div>
      <br>
      <div class="">
        <ul class="flex border-2 border-black py-4 rounded-[4px] bg-black justify-center">
          <li class="px-4 font-bold text-xl hover:text-white text-[#BDBDBD] hover:scale-105 border-r-2">
            <a href="index.php">Trang chủ</a>
          </li>

          <li class="px-4 font-bold text-xl hover:text-white text-[#BDBDBD] hover:scale-105 border-r-2">
            <a href="index.php?act=gioithieu">Giới thiệu</a>
          </li>

          <li class="px-4 font-bold text-xl hover:text-white text-[#BDBDBD] hover:scale-105 border-r-2">
            <a href="index.php?act=lienhe">Liên hệ</a>
          </li>

          <li class="px-4 font-bold text-xl hover:text-white text-[#BDBDBD] hover:scale-105 border-r-2">
            <a href="index.php?act=gopy">Góp ý</a>
          </li>

          <li class="px-4 font-bold text-xl hover:text-white text-[#BDBDBD] hover:scale-105 ">
            <a href="index.php?act=hoidap">Hỏi đáp</a>
          </li>
        </ul>
      </div>
    </header>
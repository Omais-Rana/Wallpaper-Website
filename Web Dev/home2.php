<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="web.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="#" />
  <title>WallVerse - Out Of This World</title>
</head>

<body>
  <div class="grid">
    <div class="item" id="logo">
      <a href="home.html">WallVerse</a>
    </div>
    <div class="item" id="navbar">
      <ul>
        <li>
          <a href="LA1.html" style="padding-right: 0.5vw"><i class="fa fa-fw fa-clock-o"></i> Latest</a>
          <ul>
            <li>
              <a href="LA1.html" style="padding-left: 1.7vw">All</a>
            </li>
            <li>
              <a href="LP1.html" style="padding-left: 0.6vw">Phone</a>
            </li>
            <li>
              <a href="LD1.html" style="padding-right: 0.733vw">Desktop</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="PA1.html" style="padding-right: 0.5vw"><i class="fa fa-fw fa-fire"></i> Popular</a>
          <ul>
            <li>
              <a href="PA1.html" style="padding-left: 1.7vw">All</a>
            </li>
            <li>
              <a href="PP1.html" style="padding-left: 0.6vw">Phone</a>
            </li>
            <li>
              <a href="PD1.html" style="padding-right: 0.733vw">Desktop</a>
            </li>
          </ul>
        </li>
        <li>
          <a style="color: gold; cursor: pointer"><i class="fa fa-fw fa-user"></i><?php echo $_SESSION['Username'] ?></a>
          <ul>
            <li>
              <a href="Logout.php" style="padding-right: 0.8vw">LogOut</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="item" id="subm">
      <h1 style="
            top: 16.667vw;
            text-shadow: -0.067vw 0.067vw 0.133vw #000,
              0.067vw 0.067vw 0.133vw #000, 0.067vw -0.067vw 0 #000,
              -0.067vw -0.067vw 0 #000;
            margin-left: 35.4vw;
          ">
        SPACETACULAR
      </h1>
      <svg id="wave" style="margin-top: 32.1vw" viewBox="0 0 1440 190" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(248.587, 248.587, 248.587, 1)" offset="0%"></stop>
            <stop stop-color="rgba(214.435, 214.435, 214.435, 1)" offset="100%"></stop>
          </linearGradient>
        </defs>
        <path style="transform: translate(0, 0px); opacity: 1" fill="url(#sw-gradient-0)" d="M0,133L24,133C48,133,96,133,144,120.3C192,108,240,82,288,88.7C336,95,384,133,432,145.7C480,158,528,146,576,120.3C624,95,672,57,720,63.3C768,70,816,120,864,133C912,146,960,120,1008,110.8C1056,101,1104,108,1152,95C1200,82,1248,51,1296,47.5C1344,44,1392,70,1440,79.2C1488,89,1536,82,1584,66.5C1632,51,1680,25,1728,34.8C1776,44,1824,89,1872,117.2C1920,146,1968,158,2016,164.7C2064,171,2112,171,2160,155.2C2208,139,2256,108,2304,82.3C2352,57,2400,38,2448,50.7C2496,63,2544,108,2592,107.7C2640,108,2688,63,2736,47.5C2784,32,2832,44,2880,53.8C2928,63,2976,70,3024,72.8C3072,76,3120,76,3168,69.7C3216,63,3264,51,3312,57C3360,63,3408,89,3432,101.3L3456,114L3456,190L3432,190C3408,190,3360,190,3312,190C3264,190,3216,190,3168,190C3120,190,3072,190,3024,190C2976,190,2928,190,2880,190C2832,190,2784,190,2736,190C2688,190,2640,190,2592,190C2544,190,2496,190,2448,190C2400,190,2352,190,2304,190C2256,190,2208,190,2160,190C2112,190,2064,190,2016,190C1968,190,1920,190,1872,190C1824,190,1776,190,1728,190C1680,190,1632,190,1584,190C1536,190,1488,190,1440,190C1392,190,1344,190,1296,190C1248,190,1200,190,1152,190C1104,190,1056,190,1008,190C960,190,912,190,864,190C816,190,768,190,720,190C672,190,624,190,576,190C528,190,480,190,432,190C384,190,336,190,288,190C240,190,192,190,144,190C96,190,48,190,24,190L0,190Z"></path>
        <defs>
          <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop>
            <stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop>
          </linearGradient>
        </defs>
        <path style="transform: translate(0, 50px); opacity: 0.9" fill="url(#sw-gradient-1)" d="M0,38L24,47.5C48,57,96,76,144,72.8C192,70,240,44,288,31.7C336,19,384,19,432,22.2C480,25,528,32,576,44.3C624,57,672,76,720,82.3C768,89,816,82,864,88.7C912,95,960,114,1008,123.5C1056,133,1104,133,1152,120.3C1200,108,1248,82,1296,60.2C1344,38,1392,19,1440,38C1488,57,1536,114,1584,133C1632,152,1680,133,1728,133C1776,133,1824,152,1872,161.5C1920,171,1968,171,2016,142.5C2064,114,2112,57,2160,47.5C2208,38,2256,76,2304,76C2352,76,2400,38,2448,28.5C2496,19,2544,38,2592,41.2C2640,44,2688,32,2736,25.3C2784,19,2832,19,2880,44.3C2928,70,2976,120,3024,133C3072,146,3120,120,3168,120.3C3216,120,3264,146,3312,145.7C3360,146,3408,120,3432,107.7L3456,95L3456,190L3432,190C3408,190,3360,190,3312,190C3264,190,3216,190,3168,190C3120,190,3072,190,3024,190C2976,190,2928,190,2880,190C2832,190,2784,190,2736,190C2688,190,2640,190,2592,190C2544,190,2496,190,2448,190C2400,190,2352,190,2304,190C2256,190,2208,190,2160,190C2112,190,2064,190,2016,190C1968,190,1920,190,1872,190C1824,190,1776,190,1728,190C1680,190,1632,190,1584,190C1536,190,1488,190,1440,190C1392,190,1344,190,1296,190C1248,190,1200,190,1152,190C1104,190,1056,190,1008,190C960,190,912,190,864,190C816,190,768,190,720,190C672,190,624,190,576,190C528,190,480,190,432,190C384,190,336,190,288,190C240,190,192,190,144,190C96,190,48,190,24,190L0,190Z"></path>
      </svg>
      <!-- <svg         //2nd style wave under homepage background
          id="wave"
          style="margin-top: 32.1vw"
          viewBox="0 0 1440 280"
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
        >
          <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
              <stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop>
              <stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop>
            </linearGradient>
          </defs>
          <path
            style="transform: translate(0, 0px); opacity: 1"
            fill="url(#sw-gradient-0)"
            d="M0,84L30,93.3C60,103,120,121,180,140C240,159,300,177,360,172.7C420,168,480,140,540,126C600,112,660,112,720,121.3C780,131,840,149,900,149.3C960,149,1020,131,1080,135.3C1140,140,1200,168,1260,168C1320,168,1380,140,1440,130.7C1500,121,1560,131,1620,116.7C1680,103,1740,65,1800,46.7C1860,28,1920,28,1980,23.3C2040,19,2100,9,2160,23.3C2220,37,2280,75,2340,93.3C2400,112,2460,112,2520,102.7C2580,93,2640,75,2700,93.3C2760,112,2820,168,2880,158.7C2940,149,3000,75,3060,37.3C3120,0,3180,0,3240,9.3C3300,19,3360,37,3420,51.3C3480,65,3540,75,3600,93.3C3660,112,3720,140,3780,144.7C3840,149,3900,131,3960,140C4020,149,4080,187,4140,177.3C4200,168,4260,112,4290,84L4320,56L4320,280L4290,280C4260,280,4200,280,4140,280C4080,280,4020,280,3960,280C3900,280,3840,280,3780,280C3720,280,3660,280,3600,280C3540,280,3480,280,3420,280C3360,280,3300,280,3240,280C3180,280,3120,280,3060,280C3000,280,2940,280,2880,280C2820,280,2760,280,2700,280C2640,280,2580,280,2520,280C2460,280,2400,280,2340,280C2280,280,2220,280,2160,280C2100,280,2040,280,1980,280C1920,280,1860,280,1800,280C1740,280,1680,280,1620,280C1560,280,1500,280,1440,280C1380,280,1320,280,1260,280C1200,280,1140,280,1080,280C1020,280,960,280,900,280C840,280,780,280,720,280C660,280,600,280,540,280C480,280,420,280,360,280C300,280,240,280,180,280C120,280,60,280,30,280L0,280Z"
          ></path>
        </svg> -->
    </div>
    <div class="subm2" style="transform: rotate(0deg); transition: 0.3s">
      <div class="devices">
        <h2 class="words" style="margin-left: -63vw">All Your Wallpapers</h2>
        <img src="dvs.png" alt="Devices-Image" style="
              width: 40%;
              margin-top: -11vw;
              margin-bottom: -10vw;
              filter: drop-shadow(2px 4px 6px black);
            " />
        <h1 class="words" style="margin-left: 65.333vw">All Your Devices</h1>
      </div>
    </div>

    <div class="item" id="main">
      <h2>
        <i class="fa fa-fw fa-star" style="color: gold; margin-top: 1vw; margin-bottom: 1vw"></i>Featured
      </h2>
      <div class="gallery">
        <img src="desktop\w1.png" alt="image" />
        <img src="desktop\w2.png" alt="image" />
        <img src="desktop\w3.png" alt="image" />
        <img src="desktop\w4.jpg" alt="image" />
        <img src="desktop\w5.jpg" alt="image" />
        <img src="desktop\w6.png" alt="image" />
        <img src="desktop\w7.png" alt="image" />
        <img src="desktop\w8.png" alt="image" />
        <img src="desktop\w9.png" alt="image" />
        <img src="desktop\w11.png" alt="image" />
        <img src="desktop\w10.jpg" alt="image" />
        <img src="desktop\w12.jpg" alt="image" />

        <img src="mobile/mob5.jpg" alt="image" class="hidden" />
        <img src="mobile/mob3.png" alt="image" class="hidden" />
        <img src="mobile/mob2.png" alt="image" class="hidden" />
        <img src="mobile/mob4.jpg" alt="image" class="hidden" />

        <img src="desktop/wallhaven-q2j9j7.png" alt="image" class="hidden" />
        <img src="desktop/wallhaven-k735r1.jpg" alt="image" class="hidden" />
        <img src="desktop/wallhaven-9dm258.png" alt="image" class="hidden" />
        <img src="desktop/h2.jpg" alt="image" class="hidden" />
      </div>
      <button class="btn">More...</button>
    </div>

    <div class="item" id="footer">
      <section>
        <ul class="icon-list" id="icon-item" style="margin-top: -2px">
          <li>
            <a href="https://www.instagram.com/" class="insta"><i class="fa fa-fw fa-instagram"></i></a>
          </li>
          <li>
            <a href="#" class="fb"><i class="fa fa-fw fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="https://www.pinterest.com/cooler_than_thou/" class="pint"><i class="fa fa-fw fa-pinterest"></i></a>
          </li>
        </ul>
      </section>

      <h5>
        All images remain property of their original owners. Copyright 2023 ©
        WallVerse.com. All Rights Reserved.
      </h5>
    </div>
  </div>
</body>
<script src="working.js"></script>

</html>
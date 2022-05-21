<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f1f1f1;
        }
        .slider-item:nth-child(1) {
            background-image: url("https://megaribolov.ru/images/siteimage/opisanie_vodoemov/enciklopediya_okeanov/atlanticheskiy_okean/Atlanticheskiy_okean_photographiya_10.jpg");
        }
        .slider-item:nth-child(2) {
            background-image: url("https://static.tildacdn.com/tild6538-3565-4366-b531-616463333031/bermamit_3.jpg");
        }
        .slider-item:nth-child(3) {
            background-image: url("https://avatars.mds.yandex.net/get-zen_doc/5213501/pub_60f1309ee7c10860b23bbeee_60f130a072494866a97543f0/scale_1200");
        }
        .slider-item:nth-child(4) {
            background-image: url("http://severnykavkaz.ru/wp-content/uploads/2018/10/djip-tur-na-plato-bermamyt.jpg");
        }
        .slider-item:nth-child(5) {
            background-image: url("https://photocentra.ru/images/main86/869679_main.jpg");
        }

        .slider-main{
            display: flex;
            margin: 3rem 0;
            width: 250px;
            overflow: hidden;
            background-color: #f1f1f1;
            border-radius: 9px;
            box-shadow: 1px 1px 9px 2px #ad9595;
            transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -webkit-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -o-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -ms-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -moz-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);

        }
        .slider-items{
            width: fit-content;
            display: flex;
            flex-direction: row;
            transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -webkit-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -o-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -ms-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -moz-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
        }
        .slider-item{
            width: 250px;
            height: 240px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            box-shadow: 0 0 6px 2px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding-top: 10px;
            color: white;
            font-size: 1.5rem;
        }
        .slider_control{
            font-size: 5rem;
            font-family: monospace;
            margin: 0 3rem;
            border-radius: 50%;
            border: 0;
            width: 100px;
            height: 100px;
            padding: 0;
            background-color: #c9c9c9;
            color: white;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -webkit-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -o-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -ms-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -moz-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
        }
        .slider_control:hover {
            transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -webkit-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -o-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -ms-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -moz-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            background-color: #b4b0b0;
            color: #151515;
        }
        #back {
            -   opacity: 0;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <button disabled class="slider_control" id="back" onclick="back()"><</button>
    <div class="slider-main">
        <div class="slider-items">
            <div class="slider-item">1/5</div>
            <div class="slider-item">2/5</div>
            <div class="slider-item">3/5</div>
            <div class="slider-item">4/5</div>
            <div class="slider-item">5/5</div>
        </div>
    </div>
    <button class="slider_control" id="forward" onclick="forward()">></button>
</div>
<script>
    let count = 1;
    function forward() {
        document.querySelector(".slider-items").style.marginLeft = `${-250 * count}px`;
        count++;
        if (count > 1) {
            document.getElementById("back").style.opacity = "1";
            document.getElementById("back").disabled = false;
        }
        if(count === 5) {
            document.getElementById("forward").style.opacity = "0";
            document.getElementById("forward").disabled = true;
        }
        console.log(count);
    }
    function back() {
        count--;
        document.querySelector(".slider-items").style.marginLeft = `${-250 * (count - 1)}px`;
        if (count === 1) {
            document.getElementById("back").style.opacity = "0";
            document.getElementById("back").disabled = true;
        }
        if(count < 5) {
            document.getElementById("forward").style.opacity = "1";
            document.getElementById("forward").disabled = false;
        }
        console.log(count);
    }
</script>
</body>
</html>
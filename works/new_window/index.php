<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #wrapper {
            background-color: rgba(102, 102, 102, .5);
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 100;
            top: 0;
            left: 0;
            display: none;
        }
        #wrapper:target {
            transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -webkit-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -o-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -ms-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -moz-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            display: unset;
        }
        #content {
            flex-flow: column wrap;
            padding: 2rem;
            display: flex;
            border: 3px solid darkgrey;
            border-radius: 10px;
            color: black;
            position: fixed;
            overflow: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 300px;
            height: 350px;
            margin: auto;
            background-color: #fff;
            text-align: center;
        }
        img {
            width: 300px;
            height: 300px;
            box-shadow: 0 0 0 0 darkgrey;
        }
        .button {
            transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -webkit-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -o-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -ms-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            -moz-transition: all 0.3s cubic-bezier(0.41, 0.03, 0.22, 0.97);
            display: inline-block;
            border: 1px solid darkgrey;
            color: black;
            padding: 0 12px;
            margin: 13px 10px;
            text-decoration: none;
            background-color: #f2f2f2;
            font-size: 14pt;
            cursor: pointer;
            border-radius: 5px;
            font-family: monospace;
        }
        .button:hover {background-color: #e6e6ff;}
    </style>
</head>
<body>
<a class="button" href="#wrapper">Кнопка</a>

<div id="wrapper">
    <div id="content">
        <img src="https://sun9-82.userapi.com/impg/753FcWkLb_rAosJxAYaf2O_vAeR-dH3-F91MfA/Twvtou9ACo4.jpg?size=720x817&quality=96&sign=8fe8b350ce7276971d79fb4578f09efe&type=album" alt="Картинка">
        <a href="#" class="button">Не кнопка</a>
    </div>
</div>

</body>
</html>
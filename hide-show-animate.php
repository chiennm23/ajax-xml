<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#hide").click(function () {
                $("p").hide();
            });
            $("#show").click(function () {
                $("p").show();
            })
        });
        $(document).ready(function () {
            $("button").click(function () {
                let div = $("div");
                div.animate({left:'100px'}, "slow");
                div.animate({fontSize: '100px'}, "slow");
            })
        });
    </script>
</head>
<body>
<!--<p>If you click on the "Hide" button, I will disappear.</p>-->
<!--<button id="hide">Hide</button>-->
<!--<button id="show">Show</button><br>-->
<button>Start Animation</button>
<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>
<div style="background:#98bf21;height:100px;width:200px;position:absolute;">HELLO</div>
</body>
</html>

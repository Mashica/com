<!doctype html>
<html lang="en">
<head><meta charset="UTF-8"><title>Mashica Sport</title>
<style>
* { margin: 0;
    border: 0;
    font: 11px/14px Verdana, Arial, Helvetica, sans-serif;
    color:#333;
    }
body {
    text-align: center;
    width: 600px;
    margin:auto;
    padding-top:50px;
    /*background-color:#311e22;*/
    background-color:#eee;
    }
p {
    padding:2px;
    }
.error {
    color:red;
    }
#wrapper {
    text-align: left;
    }
#header {
    color:#666;
    padding-bottom: 25px;
    /*background-color:#333;*/
    }
#pagebody {
    /*background-color:#666;*/
    }
#footer {
    /*background-color:#999;*/
    }

</style>
</head><body>

<div id="wrapper">

    <div id="header">
        @yield('header')
    </div>

    <div id="pagebody">
        @yield('pagebody')
    </div>

    <div id="footer">
        @yield('footer')
    </div>


</div>

</body></html>

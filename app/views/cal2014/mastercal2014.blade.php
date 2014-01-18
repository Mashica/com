<!doctype html>
<html lang="en">
<head><meta charset="UTF-8"><title>Mashica Sport</title>
<style>


* { margin: 0;
    border: 0;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    /*font: 16px/19px Verdana, Arial, Helvetica, sans-serif;*/
    /*color:#333;*/
    }
html {
    background: url(img/cal2014/bosqu.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
body {
    text-align: center;
    width: 750px;
    margin:auto;
    padding-top:5em;
   /*background-color:#311e22;*/
   /*background-color:#eee;*/
    }
a {
    color:#999;
    /*background-color:#333;*/

    -ms-word-break: break-all;
         word-break: break-all;

         /* Non standard for webkit */
         word-break: break-word;

    -webkit-hyphens: auto;
       -moz-hyphens: auto;
            hyphens: auto;
}
h1 {
    font-size: 2em;
}
h2 {
    font-size: 1em;
}

#wrapper {
    text-align: left;
    }
#header {
    /*color:#ddd;*/
    padding-bottom: 5em;
    /*background-color:#333;*/
    }
#pagebody {
    /*background-color:#666;*/
    }
#footer {
    /*background-color:#999;*/
    }

.titletext{
    color:eee;
    background-color:#eee;
    padding:0 .1em 0 .1em;
}
.bodycontenedor{
    margin-bottom: 50px;
}

.bodytext{
    color:eee;
    background-color:#eee;
    padding:.1em .3em .1em .3em;
}
.links{
    margin:.2em 0 .2em 0;
}

.linklabel1 {
    color:#fff;
    background-color:black;
    padding:0 .1em 0 .1em;
}
.linklabel2 {
    color:#fff;
    background-color:black;
    padding:0 .1em 0 .1em;
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

<!doctype html>
<html>
    <head>
        <title>
            PTZ Optics Controller
        </title>
    </head>
    <body>
        <h1>
            Welkom op bij PTZ Optics Controller <br>
            <img src="afbeeldingen/logo/MBEngineringLogoV2.png" alt="MB engineering" width=20%>
        </h1>
        <p>
            Op deze pagina kun je je jouw ptz optic cameras bedienen <br> met simple drukken op de knop
        </p>
        <p>
            <a href="index.html"> HOME</a> 
        </p>
        <pack>
            <form method="post">
                <table border='0'>
                    <tr>
                        <td>
                        <td>
                        <td>
                            <input name="omhoog" type="submit" value="omhoog" />
                        </td>
                        <td>
                        </td>
                        <td>
                            <input name="zoomIn" type="submit" value="+" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="links" type="submit" value="links" />
                        </td>
                        <td>
                        <td>
                        <td>
                            <input name="rechts" type="submit" value="rechts" />
                        </td>
                        <td>
                            <input name="zoomStop" type="submit" value="stop" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <td>
                        <td>
                            <input name="omlaag" type="submit" value="omlaag" />
                        </td>
                        <td>
                        </td>
                        <td>
                            <input name="zoomUit" type="submit" value="-" />
                        </td>
                    </tr>
                </table>    
            </form>
            <?php
                error_reporting(0);
                if (isset($_POST['omhoog']))
                {
                    $url = 'http://192.168.2.241/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url of cam 1
                    $action = 'UP&1&10'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                }
                if (isset($_POST['links']))
                {
                    $url = 'http://192.168.2.241/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url of cam 1
                    $action = 'LEFT&10&1'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                }
                if (isset($_POST['rechts']))
                {
                    $url = 'http://192.168.2.241/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url of cam 1
                    $action = 'RIGHT&10&1'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                }
                if (isset($_POST['omlaag']))
                {
                    $url = 'http://192.168.2.241/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url of cam 1
                    $action = 'DOWN&1&10'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                }
                if (isset($_POST['zoomIn']))
                {
                    $url = 'http://192.168.2.241/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url of cam 1
                    $action = 'ZOOMIN&5'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                }
                if (isset($_POST['zoomUit']))
                {
                    $url = 'http://192.168.2.241/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url of cam 1
                    $action = 'ZOOMOUT&5'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                }
                if (isset($_POST['zoomStop']))
                {
                    $url = 'http://192.168.2.241/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url of cam 1
                    $action = 'ZOOMSTOP&5'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                }
            ?> 
        </p>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-37b0"><div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">MB engineering©2021 All rights reserved</p>
          </div></footer>
    </body>
</html>
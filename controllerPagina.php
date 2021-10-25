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
            <img src="afbeeldingen/logo/MBEngineringLogoV2.png" alt="MB engineering" width=100px>
        </h1>
        <p>
            Op deze pagina kun je je jouw ptz optic cameras bedienen <br> met simple drukken op de knop
        </p>
        <p>
            <a href="index.html"> HOME</a> 
        </p>
            <form method="post">
                <table border='0'>
                        <td> 
                            <strong>Huidige IP adres: <strong>
                        </td>
                        <td>
                            <?php 
                                $file = 'ip.txt';
                                $current = file_get_contents($file);
                                echo $current;
                            ?>
                        </td>
                    </tr>
                </table>
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
                if (isset($_POST['setIp']))
                {
                    $file = 'ip.txt';
                    $current = $_POST['ipcam'];
                    echo $current;
                    if (is_writable($file))
                    {
                        if (!$handle = fopen($filename, 'a'))
                        {
                            echo "Error opening file ($file)";
                            exit;
                        }

                        if (fwrite($handle, $current) == FALSE)
                        {
                            echo "Error cannot write fot file ($file)";
                            exit;
                        }
                        fclose($handle);
                    } else 
                    {
                        echo "The file ($file) is not writable";
                    }
                }
                if (isset($_POST['omhoog']))
                {
                    $camUrl = file_get_contents($file); // get the ip form user input
                    $url = $camUrl . '/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url for cam
                    $action = 'UP&1&10'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                    echo "Command omhoog naar $camUrl, zend url $requestUrl";
                }
                if (isset($_POST['links']))
                {
                    $camUrl = file_get_contents($file); // get the ip form user input
                    $url = $camUrl . '/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url for cam
                    $action = 'LEFT&10&1'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                    echo "Command links naar $camUrl, zend url $requestUrl";
                }
                if (isset($_POST['rechts']))
                {
                    $camUrl = file_get_contents($file); // get the ip form user input
                    $url = $camUrl . '/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url for cam
                    $action = 'RIGHT&10&1'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                    echo "Command rechts naar $camUrl, zend url $requestUrl";
                }
                if (isset($_POST['omlaag']))
                {
                    $camUrl = file_get_contents($file); // get the ip form user input
                    $url = $camUrl . '/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url for cam
                    $action = 'DOWN&1&10'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                    echo "Command omlaag naar $camUrl, zend url $requestUrl";
                }
                if (isset($_POST['zoomIn']))
                {
                    $camUrl = file_get_contents($file); // get the ip form user input
                    $url = $camUrl . '/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url for cam
                    $action = 'ZOOMIN&5'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                    echo "Command zoom in naar $camUrl, zend url $requestUrl";
                }
                if (isset($_POST['zoomUit']))
                {
                    $camUrl = file_get_contents($file); // get the ip form user input
                    $url = $camUrl . '/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url for cam
                    $action = 'ZOOMOUT&5'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                    echo "Command zoom uit naar $camUrl, zend url $requestUrl";
                }
                if (isset($_POST['zoomStop']))
                {
                    $camUrl = file_get_contents($file); // get the ip form user input
                    $url = $camUrl . '/cgi-bin/ptzctrl.cgi?ptzcmd&'; // url for cam
                    $action = 'ZOOMSTOP&5'; // the actiond for the camera to do
                    $requestUrl = $url. $action;
                    echo "Command zoom stop naar $camUrl, zend url $requestUrl";
                }
            ?> 
        </p>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-37b0"><div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">MB engineering©2021 All rights reserved</p>
          </div></footer>
    </body>
</html>
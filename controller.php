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
        <pack>
            <form action="controllerPagina.php"method="post">
                <table border='0'>
                    <tr>
                        <td>
                            <strong>Camera IP adres: <strong>
                        </td>
                        <td>
                            <input type="text" placeholder="192.168.2.xxx" name="ipCam" size="8" minlength="13" maxlength="13">
                        </td>
                        <td>
                            <input name="setIp" type="submit" value="zet ip adres vast" />
                    </tr>
                    <tr>
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
            </form>
            
        </p>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-37b0"><div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">MB engineering©2021 All rights reserved</p>
          </div></footer>
    </body>
</html>
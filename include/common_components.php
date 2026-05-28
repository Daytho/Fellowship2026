<?php
    // echoHeader()
    function echoHeader($tabtitle, $pagetitle) {
        echo "
            <!DOCTYPE html>	
                <head>
                    <meta charset='utf-8'> 
                    <link rel='stylesheet' href='style.css'>

                    <title>$tabtitle</title>
                </head>

                <header style='margin-bottom: 85px; margin-top: 50px;'>
                    <h1 style='text-align: center;'>$pagetitle</h1> 
                </header>
    ";
    }



    // echoFooter()
    function echoFooter() {
        echo "
            <footer class='footer'>
                <div style='width: 100%;'>
                    <p style='font-size: 28px; color: cadetblue;'><strong class='lacrm' style='font-size: 24px; color:rgb(182, 189, 189);'>LACRM First Project</strong>
                    </br>
                    <a class='green' href='index.php' target='_blank' style='position:relative; float:inline-end;'>⾕</a>
                    <img src='/pics/LACRMlogo.png' alt='LACRM Logo' style='float:right;width:45px;height:45px;'>
                    Developed by: Dayshaun Thompson
                    </p>
                </div>
            </footer>
        </html>
    ";
    }
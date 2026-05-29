<?php
    // // echoHeader()
    // function echoHeader($tabtitle, $pagetitle) {
    //     echo "
    //         <!DOCTYPE html>	
    //             <head>
    //                 <meta charset='utf-8'> 
    //                 <link rel='stylesheet' href='style.css'>

    //                 <title>$tabtitle</title>
    //             </head>

    //             <header style='margin-bottom: 85px; margin-top: 50px;'>
    //                 <h1 style='text-align: center;'>$pagetitle</h1> 
    //             </header>
    // ";
    // }



    // echoFooter()
    function echoFooter() {
        echo "
            <footer class='footer'>
                <div>
                    <p style='font-size: 28px; color: slategrey;'><strong class='lacrm' style='font-size: 24px;'>LACRM First Project</strong>
                    </br>
                    <img src='/pics/LACRMlogo.png' alt='LACRM Logo' style='float:right;width:45px;height:45px;'>
                    Developed by: Dayshaun Thompson
                    </p>
                </div>
                <a href='index.php' target='_blank' style='margin: auto;'>⾕</a>
            </footer>
        </html>
    ";
    }

    function echoHeader($tabtitle, $pagetitle, $secondline, $isIndex = False) {
        if($isIndex){
            echo "
                <!DOCTYPE html>	
                    <head>	
                        <meta charset='utf-8'> 
                        <link rel='stylesheet' href='style.css'>

                        <title>$tabtitle</title>
                    </head>

                    <header style='margin-bottom: 65px; margin-top: 50px;'>
                        <h1 style='text-align: center;'>$pagetitle
                        </br>$secondline
                        </h1> 
                    </header>

            ";
        }else{
            echo "
                <!DOCTYPE html>	
                    <head>	
                        <meta charset='utf-8'> 
                        <link rel='stylesheet' href='style.css'>

                        <title>$tabtitle</title>
                    </head>

                    <header style='margin-top: 50px;'>
                        <h1 style='text-align: center;'>$pagetitle
                        </br>$secondline
                        </h1> 
                    </header>

            ";
        }
    }

    function bodyPics($href1, $src1, $alt1, $capt1, $href2, $src2, $alt2, $capt2, $href3, $src3, $alt3, $capt3) {
        echo "
                <body>
                    <div class='wrapper' style='justify-content: space-evenly; height: 350px;'>
                        <div style='text-align: center;'>
                            <a href='$href1'>
                                <img src='/pics/$src1' alt='$alt1' style='height: 350px; width: 275px;'>
                            </a>
                        </br>$capt1
                        </div>
                        <div style='text-align: center;'>
                            <a href='$href2'>
                                <img src='/pics/$src2' alt='$alt2' style='height: 350px; width: 275px;'>
                            </a>
                        </br>$capt2
                        </div>
                        <div style='text-align: center;'>
                            <a href='$href3'>
                                <img src='/pics/$src3' alt='$alt3' style='height: 350px; width: 275px;'>
                            </a>
                            </br>$capt3
                        </div>
                    </div>

        ";
    }

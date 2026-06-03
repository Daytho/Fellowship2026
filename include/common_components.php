<?php
    // echoFooter()
    function echoFooter() {
        echo "
            <footer class='footer'>
                <div class='footer-left'>
                    <p><strong style='font-size: 24px;'>LACRM First Project</strong></p>
                    <p>Developed by: Dayshaun Thompson
                    <img class='crmlogo' src='/pics/LACRMlogo.png' alt='LACRM Logo'>
                    </p>
                </div>
                <div class='footer-center'>
                    <a href='index.php' target='_blank' style=' color: slategrey;'>⾕</a>
                </div>
                <div class'footer-right'></div>
            </footer>
        </html>
    ";
    }

    function echoHeader($tabtitle, $pagetitle, $secondline, $isIndex) {
        if($isIndex){
            echo "
                <!DOCTYPE html>	
                    <head>	
                        <meta charset='utf-8'> 
                        <link rel='stylesheet' href='style.css'>

                        <title>$tabtitle</title>
                    </head>

                    <header style='margin-bottom: 65px; margin-top: 50px;'>
                        <h1>$pagetitle</h1>
                        <h2>$secondline</h2>
                        
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
                        <h1>$pagetitle</h1>
                        <h2>$secondline</h2> 
                    </header>
            ";
        }
    }

    function bodyPics($href1, $src1, $alt1, $capt1, $href2, $src2, $alt2, $capt2, $href3, $src3, $alt3, $capt3, $midPicLarger) {
            if($midPicLarger) {
                echo "
                    <body>
                        <div class='wrapper bodyPics' style='align-items: center; padding-top: 40px;'>
                            <div>
                                <a href='$href1'>
                                    <img src='/pics/$src1' alt='$alt1' style='height: 350px; width: 275px;'>
                                </a>
                            </br>$capt1
                            </div>
                            <div>
                                <a href='$href2'>
                                    <img src='/pics/$src2' alt='$alt2' style='height: 450px; width: 325px;'>
                                </a>
                            </br>$capt2
                            </div>
                            <div>
                                <a href='$href3'>
                                    <img src='/pics/$src3' alt='$alt3' style='height: 350px; width: 275px;'>
                                </a>
                                </br>$capt3
                            </div>
                        </div>
                ";
            }else{
                echo "
                    <body>
                        <div class='wrapper bodyPics'>
                            <div>
                                <a href='$href1'>
                                    <img src='/pics/$src1' alt='$alt1' style='height: 350px; width: 275px;'>
                                </a>
                            </br>$capt1
                            </div>
                            <div>
                                <a href='$href2'>
                                    <img src='/pics/$src2' alt='$alt2' style='height: 350px; width: 275px;'>
                                </a>
                            </br>$capt2
                            </div>
                            <div>
                                <a href='$href3'>
                                    <img src='/pics/$src3' alt='$alt3' style='height: 350px; width: 275px;'>
                                </a>
                                </br>$capt3
                            </div>
                        </div>
                ";
            }
    }

    function get_title($postId) {
        $post = getPost($postId);
        $title = $post['title'];

        return $title;
    }

    function get_content($postId) {
        $post = getPost($postId);
        $content = $post['content'];

        return $content;
    }

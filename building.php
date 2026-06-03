<?php
    include('include/init.php');
    $postId = $_REQUEST['postId'];
    $title = get_title($postId);
    $content = get_content($postId);

    echoHeader('PC Builder', 'Plugged In', $title);

    // var_dump($post);
    // debugOutput($post);
   
?>
    <body>
        <div class='wrapper' style='justify-content: space-evenly; height: 350px;'>
            <video height: 350px; width: 300px; autoplay loop muted>
                <source src="/vids/pcvid.mp4" type="video/mp4">
            Your browser does not support the video format
            </video>
        </div>
        <div class='wrapper content'>
            <p style='width: 75%;'>
                <?php
                    echo "$content";
                ?>
            </p>
        </div>
    </body>


<?php
    echoFooter();
?>
<?php
    include('include/init.php');
    echoHeader('PC Builder', 'Building My First PC', '');
    $postId = $_REQUEST['postId'];
    $post = getPost($postId);
    $content = $post['content'];
    // var_dump($post);
    // debugOutput($post);
   
?>
    <body style="height:100%; overflow:auto;">
        <div class='wrapper' style='justify-content:space-evenly; height: 350px;'>
            <video height: 350px; width: 300px; autoplay loop muted>
                <source src="/vids/pcvid.mp4" type="video/mp4">
            Your browser does not support the video format
            </video>
        </div>
        <div class='wrapper' style='justify-content:center; text-align:center; margin-top: 5px; margin-bottom: 15px; padding-bottom: 100px;'>
            <p style="width:75%;">
                <?php
                    echo "$content";
                ?>
            </p>
        </div>
    </body>


<?php
    echoFooter();
?>
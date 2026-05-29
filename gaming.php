<?php
    include('include/init.php');
    echoHeader('PC Gaming', 'Next Level PC Gamer', '');
    $postId = $_REQUEST['postId'];
    $post = getPost($postId);
    $content = $post['content'];
?>
    <body>
        <div class='wrapper' style='justify-content:space-evenly; height: 300px;'>
            <img src='/pics/32k.jpeg' alt='32 Kill Game' style='height: 350px; width: 275px;'>
        </div>
        <div class='wrapper' style='justify-content:center; text-align:center; margin-top: 25px;'>
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
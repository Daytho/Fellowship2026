<?php
    include('include/init.php');
    echoHeader('Pi-hole Project', 'Pi-hole Add Blocker', '');
    $postId = $_REQUEST['postId'];
    $post = getPost($postId);
    $content = $post['content'];
?>
    <body style="min-height:100%;">
        <div class='wrapper' style='justify-content:space-evenly; height: 350px;'>
            <img src='/pics/phole.jpeg' alt='32 Kill Game' style='height: 275px; width: 350px;'>
        </div>
        <div class='wrapper' style='justify-content:center; text-align:center; margin-top: 5px;'>
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

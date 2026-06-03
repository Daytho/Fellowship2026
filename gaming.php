<?php
    include('include/init.php');
    $postId = $_REQUEST['postId'];
    $title = get_title($postId);
    $content = get_content($postId);

    echoHeader('PC Gaming', 'Plugged In', $title, false);
?>
        <div class='wrapper' style='justify-content: space-evenly; height: 350px;'>
            <img src='/pics/32k.jpeg' alt='32 Kill Game' style='height: 350px; width: 275px;'>
        </div>
        <div class='wrapper content'>
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
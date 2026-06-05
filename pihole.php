<?php
    include('include/init.php');
    $postId = htmlspecialchars($_GET['postId']);
    $title = get_title($postId);
    $content = get_content($postId);

    echoHeader('Pi-hole Project', 'Plugged In', $title, false);
?>
        <div class='wrapper' style='justify-content: space-evenly; height: 275px;'>
            <img src='/pics/phole.jpeg' alt='Pi-hole Admin Page' style='height: 275px; width: 350px;'>
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

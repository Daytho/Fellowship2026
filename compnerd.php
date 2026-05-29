<?php
    include('include/init.php');
    // $posts = getPosts();
    // var_dump($posts);
    echoHeader('Computer Nerd', 'Computer Nerd', '', $isIndex = true);
    bodyPics('gaming.php?postId=1', 'heirloom.JPG', 'Apex Legends Heirloom Shards', 'Click for PC Gaming',
            'building.php?postId=2', 'pc.jpeg', 'My First PC Build', 'Click for PC Building',
            'pihole.php?postId=3', 'routerpi.JPG', 'Administering Pi-hole Add Blocker', 'Click for Administering Pi-hole');
    

?>

	</body>
<?php
    echoFooter();
?>

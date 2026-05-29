<?php
    include('include/init.php');
    echoHeader('DJs Home Page', 'Dayshaun Thompson', 'Plugged In vs Logged Off', $isIndex = true);
    bodyPics('fitness', 'hooping.JPG', 'My Journey to Living a Fit Lifestyle', 'Click for Physical Fitness',
            'outdoors', 'fishingpic.PNG', 'My Love for The Great Outdoors', 'Click for Outdoor Activities',
            'compnerd', 'building.JPG', 'Becoming a Briliant Computer Nerd', 'Click for Computer Projects');

?>
	<!-- <body>
        <div class="wrapper" style="justify-content:space-evenly; height: 300px;">
		    <div style="text-align: center;">
                <a href="fitness.php">
                    <img src="/pics/dunk3.png" alt="MoveMent" style="height: 300px; width: 250px;">
                </a>
            </br>Click for Physical Fitness
            </div>
            <div style="text-align: center;">
                <a href="outdoors.php">
                    <img src="/pics/fishingpic.PNG" alt="Outdoors" style="height: 300px; width: 250px;">
                </a>
            </br>Click for Outdoor Activities
            </div>
            <div style="text-align: center;">
                <a href="compnerd.php">
                    <img src="/pics/building.JPG" alt="Computer Nerd" style="height: 300px; width: 250px;">
                </a>
                </br>Click for Computer Projects
            </div>
        </div> -->
	</body>
    
<?php
    echoFooter();
?>
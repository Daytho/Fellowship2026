<?php
    include('include/init.php');
    echoHeader('Outdoors', 'Outdoor Activities', '');
?>

	<body>

        <div class="wrapper" style="justify-content:space-evenly; height: 300px;">
		    <div style="text-align: center;">
                <a href="fitness.php">
                    <img src="/pics/fishing2.JPG" alt="MoveMent" style="height: 300px; width: 250px;">
                </a>
            </br>Click for Physical Fitness
            </div>
            <div style="text-align: center;">
                <a href="outdoors.php">
                    <img src="/pics/pond.jpeg" alt="Outdoors" style="height: 300px; width: 250px;">
                </a>
            </br>Click for Outdoor Activities
            </div>
            <div style="text-align: center;">
                <a href="compnerd.php">
                    <img src="/pics/whiteSquirrel.JPG" alt="Computer Nerd" style="height: 300px; width: 250px;">
                </a>
                </br>Click for Computer Projects
            </div>
        </div>
	</body>
<?php
    echoFooter();
?>
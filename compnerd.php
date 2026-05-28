<?php
    include('include/init.php');
    echoHeader('Computer Nerd', 'Computer Nerd');
?>

	<body>
        <div class="wrapper" style="justify-content:space-evenly; height: 300px;">
		    <div style="text-align: center;">
                <a href="gaming.php">
                    <img src="/pics/heirloom.JPG" alt="MoveMent" style="height: 300px; width: 250px;">
                </a>
            </br>Click for PC Gaming
            </div>
            <div style="text-align: center;">
                <a href="building.php">
                    <img src="/pics/pc.jpeg" alt="PC Building" style="height: 300px; width: 250px;">
                </a>
            </br>Click for PC Building
            </div>
            <div style="text-align: center;">
                <a href="pihole.php">
                    <img src="/pics/routerpi.JPG" alt="Pi-hole Project" style="height: 300px; width: 250px;">
                </a>
                </br>Click for Pi-hole Project
            </div>
        </div>
	</body>
<?php
    echoFooter();
?>

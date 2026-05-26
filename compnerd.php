<!DOCTYPE html>
    <!-- The root that wraps all of the content on the page -->
	
	<head>
        <!-- Everything that we want to include on our webpage on initial load but keep hidden from the webpage visitor goes here. -->
		
		<meta charset="utf-8"> 
        <!-- The character set (pretty much any character you might use) your document is allowed to use and have no issues displaying -->
		<link rel="stylesheet" href="style.css">

		<title> Dj's Home Page</title>
		<style>
            .green {
                color: green;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
            }
        </style>
        <!--This is also where your style tags should go so the browser has access to all of the style prior to trying to load the elements in the body.
         Can be included in body if needed but not common -->
	</head>

    <header style="margin-bottom: 85px; margin-top: 50px;">
        <h1 style="text-align: center;">Computer Projects</h1> 
    </header>

	<body>
    	<!-- The page content goes in the body.-->

        <div class="wrapper" style="justify-content:space-evenly; height: 300px;">
		    <div style="text-align: center;">
                <a href="fitness">
                    <img src="/pics/hooping.JPG" alt="MoveMent" style="height: 300px; width: 250px;">
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
        </div>


	</body>
	
    <footer class="footer">
        <div>
            <p style="color:rgb(182, 189, 189);"><strong>LACRM First Project</strong></p></div>
            <p style="color: cadetblue; margin-top: 0px;">
            <img src="/pics/LACRMlogo.png" alt="LACRM Logo" style="float:right;width:45px;height:45px;">
            Developed by: Dayshaun Thompson</p>
        </div>
        <a class="green" href="index.php" target="_blank">Home</a>
    </footer>
		<!--  It is the placeholder for a link. You define the destination of a link using the href atribute. Target specifies where to open the linked doc -->
</html>

<?php

    // TODO 1: Create a getAllPosts() function that returns an arrayof all posts
    function getAllPosts () {
		$posts = [
			1 => [
				"postId" => 1,
				"title" => "Next Level PC Gamer",
				"content" => "This is my real page now for my PC Gaming Experiences. I am going to share all of my PC Gaming
                highs and lows on this page. All of the emotion and passion and hard work I have put in to 
                becoming the greatest gamer of all time. I am not joking! I am the best!"
			],
			2 => [
				"postId" => 2,
				"title" => "Building My First PC",
				"content" => "Building my gaming PC was one of the most exciting and frustrating tech projects I have worked on. My goal was to create a strong gaming system 
                that could handle modern games, support future upgrades, and eventually move toward high-performance 4K gaming. For this build, I used a Gigabyte B650 
                Gaming X AX V2 motherboard, a Ryzen 7 7700X processor, 32GB of 6000 MT/s DDR5 RAM, and an NVIDIA RTX 5060 Ti graphics card.</br>I started by installing
                 the CPU into the AM5 socket, carefully lining up the triangle on the processor with the triangle on the motherboard socket. Then I installed the RAM in 
                 the correct dual-channel slots, mounted the CPU cooler with thermal paste, and connected the cooler cable to the CPU fan header. After that, I placed 
                 the motherboard into the case, screwed it into the standoffs, installed the graphics card into the top PCIe slot, and connected the main power cables, 
                 case fans, front panel connectors, USB, and audio cables.</br>When I tried to boot the computer for the first time, it would not start correctly. I 
                 checked the power supply switch, wall outlet, 24-pin motherboard cable, 8-pin CPU cable, and GPU power cable. I also reseated the RAM, tried one stick 
                 at a time, tested different RAM slots, reseated the graphics card, checked the front panel power button connectors, cleared the CMOS, and tried a minimal
                  boot setup with only the CPU, one stick of RAM, cooler, and power supply connected. Even after all of that, the system still would not boot, so I 
                  concluded that the motherboard was likely dead or bricked.</br>After replacing the motherboard, I rebuilt the computer with the same parts. This time, 
                  the system booted with no problem. I entered the BIOS, confirmed that the CPU, RAM, and storage were detected, and enabled the correct memory profile so 
                  the RAM could run at its rated 6000 MT/s speed.</br>Once the hardware was working, I installed the operating system using a bootable USB drive. After 
                  the OS installation finished, I downloaded the motherboard chipset drivers, network drivers, audio drivers, and the latest NVIDIA graphics driver. I 
                  also installed my regular applications, game launchers, browser, and system monitoring tools. Finally, I ran updates and checked temperatures to make 
                  sure everything was stable.</br>Although the build was frustrating at first because of the dead motherboard, it taught me a lot about troubleshooting 
                  and how each part of the system works. After replacing the board, the PC worked correctly and became a solid gaming system with plenty of room for 
                  future upgrades."
			],
            3 => [
                "postId" => 3,
                "title" => "Pi-hole Add Blocker",
                "content" => "Building my Pi-hole project was one of the most useful and interesting networking projects I have worked on. My goal was to create a 
                network-wide ad-blocking system that could block ads, trackers, and unwanted domains for devices on my home network. For this project, I used a Raspberry 
                Pi, installed Pi-hole, configured it on my network, and connected it to my router so my devices could use it as their DNS server.</br>
                I started by preparing the Raspberry Pi with a fresh operating system on a microSD card. After flashing the OS, I connected the Pi to power and the network, 
                then completed the basic setup. I made sure the Pi had internet access and updated the system before installing Pi-hole.</br>
                Next, I installed Pi-hole using the official installer and followed the setup prompts. During the installation, I selected my network interface, chose an 
                upstream DNS provider, and allowed Pi-hole to install the web admin dashboard. Once the installation finished, I logged into the dashboard to check that the 
                service was running correctly.</br>
                After Pi-hole was installed, I configured my router so devices on my network would use the Raspberry Pi as their DNS server. This allowed Pi-hole to filter 
                requests across the network instead of only on one device. I also checked the Pi-hole dashboard to confirm that devices were sending DNS queries through it.</br>
                When I first tested the setup, I checked a few websites and watched the query log to make sure domains were being blocked. If something did not work correctly, 
                I checked the Pi’s IP address, DNS settings, router configuration, and whether the Pi-hole service was running. I also made sure the Raspberry Pi had a static 
                IP address so the router would always know where to send DNS traffic.</br>
                Once everything was working, I added blocklists, tested different devices, and made sure normal websites still loaded correctly. I also learned how to whitelist 
                domains in case Pi-hole blocked something important. This helped me understand how DNS filtering works and how much background traffic devices send on a network.</br>
                Overall, the Pi-hole project was a successful way to improve my home network. It gave me more control over ads, trackers, and DNS traffic while teaching me more about 
                networking, routers, and server-style projects. After finishing the setup, I had a useful tool running on my network that could protect multiple devices at once."
            ]
		];	
		return $posts;
	}

    function getPosts() {
        $posts = dbQuery("
            select *
            from post
        ")->fetchAll();

        return $posts;
    }
    // TODO 2: Create a getPost() function that returns a singular array of info corresponding to one post. The parameter: one post id (integer)
    function getPost($postId) {
        $post = dbQuery("
            select *
            from post
            where postId = $postId
            ")->fetch();
        return $post;
    }
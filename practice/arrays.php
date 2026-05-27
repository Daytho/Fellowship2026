<?php
    $employees = [
        [
            'Name' => 'Arlo',
            'PhoneNumber' => '123-456-7890'
        ],        
        [
            'Name' => 'Bella',
            'PhoneNumber' => '555-555-5555'
        ],        
        [
            'Name' => 'Ciara',
            'PhoneNumber' => '101-001-1001'
        ],
    ];

    $count = 1;

    foreach ($employees as $individualEmployee){
        echo "
            <div style='text-align:center; font-size: 12px; color: #999;'>Employee #".$count."</div>
            <div style='text-align:center; font-size: 16px; font-weight: bold;'>".$individualEmployee['Name']."</div>
            <div style='text-align:center; font-size: 14px; margin-bottom: 20px; color: #999;'>".$individualEmployee['PhoneNumber']."</div>
            
        ";
        $count++;
    }
<?php

$notifications = [
    "No Notifications",
    "New Message",
    "New Comment",
    "New Order"
];

echo $notifications[array_rand($notifications)];
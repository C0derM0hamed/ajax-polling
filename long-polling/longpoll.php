<?php

while (true) {

    $message = rand(1, 10);

    if ($message > 8) {

        echo "New Message Received at " . date("H:i:s");
        break;
    }

    sleep(1);
}
<?php

require "Events.php";

set_exception_handler(function ($e) {
    $data = array("status" => "error");
    $data['message'] = $e->getMessage();

    http_response_code(400);
    header("Content-Type: application/json");
    echo json_encode($data);
});

// what was the request? 
// Access control would go first here

// Look for a valid action
if(isset($_GET['method'])) {
    switch($_GET['method']) {
        case "eventList":
            $events = new Events();
            $data = $events->getEvents();
            break;
        case "event":
            $event_id = (int)$_GET['event_id'];
            $events = new Events();
            $data = $events->getEventById($event_id);
            break;
        default:
            http_response_code(400);
            $data = array("error" => "bad request");
            break;
    }
} else {
    http_response_code(400);
    $data = array("error" => "bad request");
}

// let's send the data back
header("Content-Type: application/json");
echo json_encode($data);

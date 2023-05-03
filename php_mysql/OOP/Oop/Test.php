<?php
include 'Room.php';

class Test
{
    function getData() {
        $room = new Room();
        $room1 = new Room();
        $room->door_color = 'red';
        $room1->door_color = 'blue';
        $room->setWallColor('red');

//        'asdasdasdas32432rnjsfdjnr23ug' => {$walls_color = 'red',$door_color = 'red',$window_type = null }
//        'asdasdasdas32432rnjdsfkksfdjnr23ug' => {$walls_color = null,$door_color = 'blue',$window_type = null}
//        Room::getColor();
//        Room::$color;
    }
}

//'asdasdasdas32432rnjsfdjnr23ug' => {$walls_color = 'red',$door_color = 'red',$window_type = null }
//        'asdasdasdas32432rnjdsfkksfdjnr23ug' => {$walls_color = null,$door_color = 'blue',$window_type = null}


https://us04web.zoom.us/j/74750691913?pwd=MlVoak1Ta1RaSUhVK1NjSE9BYnhMdz09
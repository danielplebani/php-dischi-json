<?php

$songs = json_decode(file_get_contents('songs.json'), true);

header('Content-Type: application/json');

echo json_encode($songs);


<?php

include_once __DIR__ . '/models/Automobile.php';

$automobiles = Automobile::all();

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/list.php';
include __DIR__ . '/includes/footer.php';


<?php

use Videogame\Observer\Channel;
use Videogame\Observer\Subscriber;

require __DIR__ . '/../vendor/autoload.php';


$channel = new Channel();

$subscriberGio = new Subscriber('Gio', $channel);
$subscriberMarcos = new Subscriber('Marcos', $channel);
$subscriberHumberto = new Subscriber('Humberto', $channel);

$channel->attach($subscriberGio);
$channel->attach($subscriberMarcos);
$channel->attach($subscriberHumberto);


$channel->addNewVideo('Another one bites the dust');
$channel->addNewVideo('Love me again');
$channel->addNewVideo('Give it 2 me');
$channel->addNewVideo('Hung up');

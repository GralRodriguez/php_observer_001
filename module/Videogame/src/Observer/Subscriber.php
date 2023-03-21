<?php

declare(strict_types=1);

namespace Videogame\Observer;

class Subscriber implements Observer
{

    private ?Observable $observable = null;

    private string $subscriberName;

    public function __construct(string $subscriberName, ?Observable $observable)
    {
        $this->subscriberName = $subscriberName;
        $this->observable = $observable;
    }

    public function update()
    {
        print_r("\n Subscriber $this->subscriberName notified!!");
    }
}

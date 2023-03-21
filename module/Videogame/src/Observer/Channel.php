<?php

namespace Videogame\Observer;

class Channel implements Observable
{

    private array $subscribers = [];

    public function attach(Observer $observer)
    {
        $this->subscribers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        foreach ($this->subscribers as $subscriber) {
            //if ($observer)
        }
    }

    public function notify()
    {
        /** @var Observer $subscriber */
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update();
        }
    }

    public function addNewVideo($videoName) {
        print_r("\n A new video: $videoName has been released");
        $this->notify();
    }
}
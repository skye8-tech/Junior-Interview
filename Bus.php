Booking<?php

class Bus {
    public string $id;
    public string $name;
    public int $seats;

    public function __construct(string $id, string $name, int $seats) {
        $this->id = $id;
        $this->name = $name;
        $this->seats = $seats;
    }
}

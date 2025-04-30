<?php

class Booking {
    public string $bookingId;
    public string $busId;
    public string $passengerName;
    public string $date;

    public function __construct(string $bookingId, string $busId, string $passengerName, string $date) {
        $this->bookingId = $bookingId;
        $this->busId = $busId;
        $this->passengerName = $passengerName;
        $this->date = $date;
    }


    public function addBooking(string $busId, string $passengerName, string $date): void {
        // Logic to add a new booking here
    }
}

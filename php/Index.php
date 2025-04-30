<?php

require_once 'Bus.php';
require_once 'Booking.php';

// Dummy Data
$buses = [
    new Bus("BUS001", "Yaoundé Express", 50),
    new Bus("BUS002", "Douala Shuttle", 40),
];

$bookings = [
    new Booking("BKG001", "BUS001", "John Doe", "2025-05-01"),
    new Booking("BKG002", "BUS001", "Alice Smith", "2025-05-01"),
    new Booking("BKG003", "BUS002", "Bob Brown", "2025-05-02"),
];



// Task 1: Display all buses


// Task 2: Display all bookings

// Task 3: Display all bookings on '2025-05-01'


// Task 4: Count the number of bookings for each bus



// Task 5: Add a new booking
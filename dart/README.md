---

## 🔰 INTERVIEW TASK: Mini Bus Booking System (Dart - Console-Based)

### 📌 **Objective**

This task assesses your understanding of **Object-Oriented Programming in Dart**, working with **lists**, and performing **basic data queries** and transformations. You'll simulate a mini bus booking system using Dart classes and dummy data.

---

### 📁 **File Structure (Single File)**

Create a single Dart file (e.g., `main.dart`) with the following content and tasks implemented.

---

### 🧾 **Context**

You will simulate a bus booking system consisting of:

- A list of **Bus** objects (with ID, name, seat count)
- A list of **Booking** objects (with booking ID, bus ID, passenger name, and date)

You are to **display and query the data** using basic Dart constructs and object methods.

---

### 🧱 Class Definitions

Define the following classes:

```dart
class Bus {
  String id;
  String name;
  int seats;

  Bus(this.id, this.name, this.seats);
}

class Booking {
  String bookingId;
  String busId;
  String passengerName;
  String date;

  Booking(this.bookingId, this.busId, this.passengerName, this.date);
}
```

---

### 🛠️ Tasks to Complete

#### ✅ **Task 1** – Display All Buses
Print:
- Bus ID
- Bus Name
- Number of seats

#### ✅ **Task 2** – Display All Bookings
Print:
- Booking ID
- Passenger Name
- Bus Name
- Date

> _Hint: You will need to look up the Bus name using the Bus ID._

#### ✅ **Task 3** – Display Bookings on a Specific Date
Filter and display all bookings for date `2025-05-01`.

#### ✅ **Task 4** – Count Bookings per Bus
Print the total number of bookings per bus.

#### ✅ **Task 5** – Add a New Booking
Write a function `addBooking()` that:
- Accepts booking ID, bus ID, passenger name, and date
- Adds a new booking to the bookings list
- Displays all bookings after the addition

---

### ✅ Evaluation Criteria

| Criteria | Description |
|----------|-------------|
| ✅ Dart Syntax | Proper use of classes, constructors, and properties |
| ✅ List Handling | Filtering, mapping, counting, and referencing |
| ✅ Logic Clarity | Approaches should be correct and consistent |
| ✅ Function Usage | Code reuse through function extraction |
| ✅ Output Readability | Clear and labeled output for all results |

---

### 🧠 Bonus (Optional)

Write a function that calculates **available seats** for each bus on a given date and prints:

```plaintext
Bus Name: Yaoundé Express
Date: 2025-05-01
Booked: 3
Available: 47
```

---

### 🕒 Time Allocation

Recommended time: **30–45 minutes**

---

### 📦 Sample Data to Use

Use this inside `main()`:

```dart
List<Bus> buses = [
  Bus('BUS001', 'Yaoundé Express', 50),
  Bus('BUS002', 'Douala Shuttle', 40),
];

List<Booking> bookings = [
  Booking('BKG001', 'BUS001', 'John Doe', '2025-05-01'),
  Booking('BKG002', 'BUS001', 'Alice Smith', '2025-05-01'),
  Booking('BKG003', 'BUS002', 'Bob Brown', '2025-05-02'),
];
```

---

## 🔰 INTERVIEW TASK: Mini Bus Booking System (PHP OOP)

### 📌 **Objective**

This task is designed to evaluate your practical understanding of **PHP Object-Oriented Programming**, **array manipulation**, and **data querying logic**. You will work with pre-defined classes and data, simulating a bus booking system without using a database.

---

### 🧾 **Context**

You are given a simplified bus booking system. The system consists of:
- A list of **buses**, each having an ID, name, and total number of seats.
- A list of **bookings**, where each booking is linked to a bus and contains passenger information and travel date.

This simulation is implemented using basic PHP classes and dummy data stored in arrays. Your task is to **interact with this data**, perform **queries**, and **manipulate the data structure** using object-oriented principles.

---

### 📁 **Files Provided**

You will receive or create the following files:

- `Bus.php` – Contains the `Bus` class definition.
- `Booking.php` – Contains the `Booking` class definition.
- `index.php` – Contains the dummy data and where all task implementations will be written.

---

### 🛠️ **Tasks to Complete**

> Implement the solutions inside `index.php`. Comment your code clearly and ensure outputs are readable.

#### ✅ **Task 1** – Display All Buses
Loop through the list of all buses and print the following for each:
- Bus ID
- Bus Name
- Total number of seats

#### ✅ **Task 2** – Display All Bookings
Loop through the bookings list and display:
- Booking ID
- Passenger Name
- Bus Name (not just Bus ID)
- Date of travel

> _Hint: You will need to match the bus ID in each booking to a corresponding bus to get the name._

#### ✅ **Task 3** – Display All Bookings on a Specific Date
Write code to filter and display all bookings **made for `2025-05-01`** only.

Display:
- Booking ID
- Passenger Name
- Bus Name

#### ✅ **Task 4** – Count Number of Bookings Per Bus
For each bus in the system, count and display how many times it has been booked.

Display:
- Bus Name
- Total number of bookings for that bus

#### ✅ **Task 5** – Add a New Booking
Write a function called `addBooking()` that accepts the following parameters:
- `bookingId`
- `busId`
- `passengerName`
- `date`

This function should:
- Create a new `Booking` object
- Add it to the `$bookings` array
- After adding, display all bookings again to confirm the update

---

### ✅ **Evaluation Criteria**

| Criteria | Details |
|---------|---------|
| ✅ Code Organization | Use of OOP, proper use of classes and properties |
| ✅ Array Manipulation | Filtering, searching, and aggregating array data |
| ✅ Logic Clarity | Does the solution make logical sense and handle data correctly? |
| ✅ Reusability | Use of functions or utility methods when appropriate |
| ✅ Code Readability | Proper comments, indentation, and variable naming |

---

### 🧠 Bonus (Optional)
If time permits, consider writing an additional function that checks:
- **Available seats** on a bus for a specific date
- Output: *Bus Name - Booked: X / Available: (Total - X)*

---

### ⏰ **Time Allocation**  
Recommended time: **30–45 minutes**

---

Would you like a downloadable version of this as a PDF or a Markdown document you can directly share with candidates or upload to your internship portal?
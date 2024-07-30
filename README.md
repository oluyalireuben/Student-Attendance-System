# Student Attendance Management System

This is a web-based application for managing student attendance. The system is built with HTML, CSS, JavaScript, PHP, and MySQL, and it uses XAMPP for the local server and database management.

## Features

- User Registration and Login
- Dashboard for managing attendance
- Responsive design with side navigation bar, main content, and footer
- CRUD operations for managing students and attendance records

## Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) installed on your local machine
- Web browser (e.g., Chrome, Firefox)
- PhpStorm or any other code editor

## Installation

### Step 1: Set Up XAMPP

1. **Download and Install XAMPP:**
   - Go to the [XAMPP download page](https://www.apachefriends.org/index.html) and download the installer for your operating system.
   - Follow the instructions to install XAMPP on your machine.

2. **Start Apache and MySQL:**
   - Open the XAMPP Control Panel.
   - Start the Apache and MySQL modules.

### Step 2: Set Up the Database

1. **Open phpMyAdmin:**
   - In your web browser, go to `http://localhost/phpmyadmin`.

2. **Create a New Database:**
   - Click on "New" in the left sidebar.
   - Enter a database name (e.g., `attendance_system`) and click "Create".

3. **Import Database Schema:**
   - Select the newly created database.
   - Go to the "Import" tab.
   - Choose the SQL file provided in the `database` directory of this project and click "Go".

### Step 3: Configure the Project

1. **Clone the Repository:**
   - Open your terminal or command prompt.
   - Navigate to the directory where you want to clone the project.
  

2. **Move the Project to XAMPP's htdocs Directory:**
   - Move the cloned project folder to `C:\xampp\htdocs` (or the corresponding directory on your system).

3. **Configure Database Connection:**
   - Open the project in PhpStorm or your preferred code editor.
   - Locate the `config.php` file and update the database credentials as follows:
     ```php
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "attendance_system";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

### Step 4: Run the Project

1. **Open the Project in Your Browser:**
   - In your web browser, go to `http://localhost/<your-project-folder>`.

2. **Register and Login:**
   - You can now register a new user and log in to access the attendance management dashboard.






### “Robot Control Web Interface”

This project consists of two main tasks:
1. Building a web page to control the direction of a robot and linking it to a database.
2. Creating a web page to display the stored data (latest value).

Prerequisites
Before you begin, ensure you have the following installed on your system:
- XAMPP (Apache, MySQL, PHP, and Perl)
- Visual Studio (or any preferred text editor)



### Task 1: Build a Web Page to Control Robot Direction

### Step 1: Set Up XAMPP
1. Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
2. Start Apache and MySQL from the XAMPP Control Panel.

### Step 2: Create Database
1. Open phpMyAdmin from the XAMPP Control Panel.
2. Create a new database named robot_control.
3. Create a table named directions with the following fields:
   - id (INT, AUTO_INCREMENT, PRIMARY KEY)
   - direction (VARCHAR(50))

### Step 3: Create Project Files
1. index.html: Create the main control interface.
    html
 
2. control.php: Handle direction input and store it in the database.
    php
  

### Task 2: Create a Web Page to Display Stored Data (Latest Value)

### Create Display Page
1. display.html: Create a page to display the latest direction value.
    html
 
2. fetch_last_value.php: Fetch the latest value from the database.
    php# robot_control

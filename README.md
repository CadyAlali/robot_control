
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
 
 
2. control.php: Handle direction input and store it in the database.
  
  
![Screenshot 2024-07-08 004524](https://github.com/CadyAlali/robot_control/assets/174820441/08f95f9e-a2f1-4313-87d0-f28783813a05)


### Task 2: Create a Web Page to Display Stored Data (Latest Value)

### Create Display Page
1. display.html: Create a page to display the latest direction value.

 
2. fetch_last_value.php: Fetch the latest value from the database.

![Screenshot 2024-07-08 004810](https://github.com/CadyAlali/robot_control/assets/174820441/207a4377-63cf-472c-af8a-6d6c3b720541)
    

# Library Management System
The Library Management System is a project designed to help manage and organize books in a library. It allows users to add, search, update, and delete book records efficiently. The system aims to make library operations more systematic and user-friendly.

## Objectives
- To provide a simple and efficient way to manage library records.  
- To enhance understanding of CRUD (Create, Read, Update, Delete) operations using PHP and MySQL.  
- To apply web development skills in building a real-world system.  
- To improve collaboration using Git and GitHub.

## Features / Functionality
- Add, view, update, and delete book records.  
- Search for specific books by title or author.  
- User-friendly interface with responsive design.  
- Database integration using MySQL.  
- Organized dashboard for easy navigation.

## Installation Instructions
1. Download or clone this repository.  
   ```
   git clone https://github.com/rchnfpnd/LibraryManagement.git
   ```
2. Move the folder to your local server directory (e.g., `htdocs` for XAMPP).  
3. Import the provided SQL file into your MySQL database.  
4. Update the database connection settings in `db_connect.php`.  
5. Open the project in your browser (e.g., `http://localhost/LibraryManagement`).

## Usage
1. Run your XAMPP server (Apache and MySQL).  
2. Open your browser and navigate to your local project folder.  
3. Use the interface to:
   - Add new books.  
   - Edit or delete existing records.  
   - Search for books.  
   - View all stored data in table format.

## Screenshots or Code Snippets

### Screenshot Example
![Library Dashboard](images/dashboard.png)

*(Tip: Place your image file in an `images/` folder in your repository and replace the filename above.)*

### Code Snippet Example
```php
<?php
// Sample PHP code snippet for adding a book
include('db_connect.php');

$title = $_POST['title'];
$author = $_POST['author'];
$query = "INSERT INTO books (title, author) VALUES ('$title', '$author')";
mysqli_query($conn, $query);
echo "Book added successfully!";
?>
```

## Contributors
- Reachinefee Paneda  
- Nicole Anne Saplan  

## License
This project is licensed under the MIT License — you are free to use, modify, and distribute this software as long as proper credit is given.  
See the LICENSE file for more information.

# Library Management System
a web-based application that helps organize and manage essential library operations. It allows librarians to efficiently handle book inventories and borrower information while maintaining accurate records of borrowing activities. Through its interactive dashboard and CRUD functionality, the system provides a practical and user-friendly platform for digital library management.

## Objectives
- To provide an efficient and organized system for managing books and borrower records.  
- To minimize manual record-keeping and reduce human errors in managing library data.  
- To practice CRUD (Create, Read, Update, Delete) functionalities in a real-world application.  
- To develop a responsive and easy-to-use web interface using Laravel and MySQL.  
- To create a dashboard that gives a quick overview of total borrowers, borrower records, and books.

## Features
- **Dashboard Overview:** Displays the total count of borrowers, borrower records, and books.  
- **Book Management:** Add, edit, and delete book information.  
- **Borrower Management:** Add, edit, and delete borrower profiles.  
- **Borrower Record Management:** Add, edit, and delete records of borrowed and returned books.  
- **CRUD Functionalities:** Perform create, read, update, and delete operations for all library entities.  
- **Database Integration:** Secure data storage and retrieval using MySQL.  
- **Responsive Interface:** User-friendly layout accessible on both desktop and mobile devices.


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

### Sample Code Snippet: Dashboard Controller
```php
class DashboardController extends Controller
{
    public function index()
    {
        $booksCount = Book::count();
        $borrowersCount = Borrower::count();
        $borrowRecordsCount = BorrowRecord::count();

        return view('dashboard', compact('booksCount', 'borrowersCount', 'borrowRecordsCount'));
    }
}
```


## Contributors
- Reachinefee Paneda  
- Nicole Anne Saplan  

## License
This project is developed for educational purposes only. It may be used, studied, and modified by students and teachers for learning and academic purposes. Commercial use is not permitted.

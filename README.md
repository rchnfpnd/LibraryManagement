📚 Library Management System
📖 Description / Overview

The Library Management System is designed to help organize and manage library operations efficiently. It allows users to record, track, and update book inventories, member information, and borrowing transactions. This system reduces manual work and improves accessibility of records for librarians and students.

🎯 Objectives

To automate the management of books and library members.

To provide an easy-to-use platform for managing borrow and return transactions.

To ensure accuracy of records and real-time availability of books.

To promote organized and digital record-keeping in library operations.

⚙️ Features / Functionality

Add, edit, and delete book records.

Manage member registration and borrowing history.

Search and filter books and members.

Track borrowed and returned books.

Generate reports of library activities.

Login system for admin and users (optional).

💻 Installation Instructions

Clone the repository:

git clone https://github.com/rchnfpnd/LibraryManagement.git


Open the project folder in your preferred code editor.

Set up your local database (if applicable) using the provided .sql file.

Update your database connection settings in the configuration file.

Run the project using your local server or IDE.

🚀 Usage

Launch the system in your local environment.

Log in using your credentials (if login feature is enabled).

Use the navigation menu to manage books, members, and borrowing transactions.

View, update, or delete records as needed.

🖼️ Screenshots or Code Snippets

Add relevant screenshots here (make sure to upload them to an images/ folder in your repo):

![Screenshot1](images/screenshot1.png)
![Screenshot2](images/screenshot2.png)


Example code snippet:

CREATE TABLE books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(100),
    category VARCHAR(50),
    status VARCHAR(20) DEFAULT 'available'
);

👩‍💻 Contributors

Reachinefee Paneda

Nicole Anne Saplan

📜 License

This project is created for educational purposes only under the course requirements.
You are free to modify and use it for academic and learning purposes.

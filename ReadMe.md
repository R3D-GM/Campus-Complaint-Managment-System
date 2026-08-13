# Complaint & Suggestion Management System

A web-based **Complaint & Suggestion Management System** developed to provide a simple way for students to submit complaints and suggestions and for administrators to manage the submitted information.

The system was developed as an academic/project exercise using **PHP and MySQL**, with the application running locally through **XAMPP**.

## 📌 Overview

The Complaint & Suggestion Management System is designed for environments such as a **campus**, where sudents may need to report problems, submit complaints, or provide suggestions.

Instead of handling complaints manually, the system stores submissions in a database so they can be accessed and managed through the web application.

## ✨ Features

* Submit complaints and suggestions through a web interface
* Store submitted information in a MySQL database
* Manage submitted complaints and suggestions
* Web-based interface for accessing the system
* PHP backend for handling application logic
* MySQL database for persistent data storage
* Local development and testing using XAMPP

## 🛠️ Technologies Used

* **PHP** — Server-side application development
* **MySQL** — Database management
* **HTML5** — Page structure
* **CSS3** — Styling and layout
* **JavaScript** — Client-side functionality
* **XAMPP** — Local Apache and MySQL development environment
* **phpMyAdmin** — Database administration

## 📂 Project Structure

The project contains the PHP application files, frontend resources, and database-related files required to run the system locally.

The exact structure may vary depending on the version of the project.

```text
Complaint-Suggestion-Management-System/
│
├── *.php
├── css/
├── js/
├── images/
└── database/
```

## 🚀 Running the Project Locally

### 1. Install XAMPP

Install XAMPP with **Apache, PHP, and MySQL/MariaDB** support.

### 2. Move the project into `htdocs`

Copy the project folder into:

```text
C:\xampp\htdocs\
```

For example:

```text
C:\xampp\htdocs\Campus-Complaint-System/
```

### 3. Start Apache and MySQL

Open the XAMPP Control Panel and start:

* Apache
* MySQL

### 4. Set up the database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Create the database required by the application.

If a database SQL file is included in the project, import it through phpMyAdmin.

The application uses a MySQL database for storing complaint and suggestion information.

### 5. Check the database connection

Make sure the database connection configuration matches your local MySQL setup, including:

```text
Host: localhost
Username: root
Password: 
Database: <complaints.sql>
```

The exact database name should match the configuration used by the project.

### 6. Open the application

Once Apache and MySQL are running, open the project through:

```text
http://localhost/Campus-Complaint-System/
```

If your project folder has a different name, replace the folder name in the URL.

## 🎯 Purpose of the Project

This project was developed to practice building a complete database-driven web application and to gain practical experience with:

* PHP web development
* MySQL database integration
* CRUD-based application functionality
* Form handling
* Connecting frontend interfaces with backend logic
* Local server configuration
* Database management with phpMyAdmin

## 🔮 Possible Future Improvements

Some possible improvements for future versions include:

* User authentication and role-based access
* Complaint status tracking
* Search and filtering
* Email notifications
* Admin dashboard with statistics
* Improved validation and security
* Responsive design improvements
* REST API integration
* Deployment to a production server

## 📅 Project Status

This is an **older academic/project implementation** and is preserved as part of my software development portfolio.

The project demonstrates my earlier experience working with **PHP, MySQL, web development, and database-driven applications**.

## 👨‍💻 Author

**Rediet Girma A.**

Software Engineering Student
Arba Minch University

---

> This project represents an earlier stage of my development journey and reflects the technologies and approaches I was working with at the time.


![nav](https://github.com/prosenjit07/Boikinon/assets/98583038/a1bd398b-b293-4bb6-8ab5-f32b87513e24)


![image](https://github.com/prosenjit07/Boikinon/assets/98583038/e2f77d73-846f-47ce-8536-087ff471aef2)
![image](https://github.com/prosenjit07/Boikinon/assets/98583038/4d259137-ce3a-4758-9d47-ce3528595d62)

# Sign Up
![image](https://github.com/prosenjit07/Boikinon/assets/98583038/97e94805-9d5b-4ae2-a672-8f5900b2de8f)

# Book Overview
![image](https://github.com/prosenjit07/Boikinon/assets/98583038/6c059d77-4dc1-4eb9-a445-e7653485412a)

# Checkout
![image](https://github.com/prosenjit07/Boikinon/assets/98583038/9654e26a-d934-40a7-8dca-0ef6939c643f)


# BDBookShop-A BookOrdering Web Application

This is a web application for ordering e-books, developed using HTML, CSS, JavaScript, Bootstrap, Node.js, PHP, and MySQL database. It includes an admin panel for managing books (add, edit, delete) and allows users to order books using a cash-on-delivery payment method.

## Features

- **User Features:**
  - Browse available e-books.
  - Place orders using cash on delivery.
  - View order history.
- **Admin Features:**
  - Add new e-books with details (title, author, price, etc.).
  - Edit existing e-books.
  - Delete e-books from the catalog.
  - View order details.

## Technologies Used

- **Frontend:**
  - HTML
  - CSS
  - JavaScript
  - Bootstrap
- **Backend:**
  - PHP
  - MySQL Database

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/prosenjit07/BDBookShop
   ```

2. **Setup Database:**
   - Import the `database.sql` file into your MySQL database.

3. **Project Setup:**

- mysql -u root -e "CREATE DATABASE IF NOT EXISTS 
bdbookshop;"
- mysql -u root bdbookshop < database/book_shop_db.sql
- verify if the database was imported successfully:
mysql -u root -e "SHOW TABLES FROM bdbookshop;"
- start the PHP server:
php -S localhost:8000
- visit: http://localhost:8080 

- for admin
Username: admin@admin.com
Password: admin123

- For database connection
host/ip: 127.0.0.1
port: 3306
username: root
password: 
database: bdbookshop


## Usage

- **Admin Panel:**
  - Access the admin panel by visiting `/admin` and logging in with admin credentials.
  - Use the interface to add, edit, or delete books.

- **User Interface:**
  - Browse available e-books on the homepage.
  - Click on a book to view details and place an order.
  - Complete the order using the cash-on-delivery option.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements

We would like to express our gratitude to the following individuals and projects that contributed to the development of this Website:

- **[Bootstrap](https://getbootstrap.com/):** For providing a sleek and responsive front-end framework that significantly enhances the user interface.

- **[Node.js](https://nodejs.org/):** The server-side JavaScript runtime that powered the backend of our application.

- **[PHP](https://www.php.net/):** For its role in handling server-side logic and interacting with the MySQL database.

- **[MySQL](https://www.mysql.com/):** The open-source relational database management system that stored and managed our data efficiently.

- **[Font Awesome](https://fontawesome.com/):** For the wide range of free icons that added visual appeal to our website.

- **[Unsplash](https://unsplash.com/):** For providing high-quality and royalty-free images that we used for book covers.

- **[GitHub](https://github.com/):** For hosting our version control repository and enabling collaborative development.

Special thanks to our contributors who actively participated in the project and provided valuable feedback, making this project better with their insights.

We appreciate the open-source community and the wealth of knowledge shared by developers worldwide. Thank you for your inspiration and support!


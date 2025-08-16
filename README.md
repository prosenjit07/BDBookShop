# BDBookShop - Modern E-Book Ordering Platform

![BDBookShop Banner](https://github.com/prosenjit07/Boikinon/assets/98583038/a1bd398b-b293-4bb6-8ab5-f32b87513e24)

## Overview
BDBookShop is a full-featured e-commerce platform for purchasing and managing e-books. The application features a responsive design, secure user authentication, and a comprehensive admin dashboard for inventory and order management.

## Screenshots
| ![Homepage](https://github.com/prosenjit07/Boikinon/assets/98583038/e2f77d73-846f-47ce-8536-087ff471aef2) | ![Book Details](https://github.com/prosenjit07/Boikinon/assets/98583038/4d259137-ce3a-4758-9d47-ce3528595d62) |
|:---:|:---:|
| *Homepage* | *Book Details* |

| ![Sign Up](https://github.com/prosenjit07/Boikinon/assets/98583038/97e94805-9d5b-4ae2-a672-8f5900b2de8f) | ![Checkout](https://github.com/prosenjit07/Boikinon/assets/98583038/9654e26a-d934-40a7-8dca-0ef6939c643f) |
|:---:|:---:|
| *User Registration* | *Checkout Process* |

## Features

### User Features
- **Account Management**
  - Secure registration and authentication
  - Profile management
  - Order history tracking

- **E-commerce Functionality**
  - Browse books by categories
  - Advanced search and filtering
  - Shopping cart management
  - Secure checkout process
  - Order tracking

### Admin Features
- **Inventory Management**
  - CRUD operations for books
  - Category management
  - Stock level monitoring
  - Bulk import/export

- **Order Management**
  - Process and track orders
  - Update order status
  - Generate sales reports
  - Customer management

- **System Administration**
  - User role management
  - System configuration
  - Database maintenance
  - Backup and restore

## Technical Stack

### Frontend
- **Core Technologies**
  - HTML5, CSS3, JavaScript (ES6+)
  - Bootstrap 5.x
  - jQuery 3.6.x
  - AJAX for asynchronous operations

- **Performance Optimizations**
  - Lazy loading of images
  - Minified and bundled assets
  - Client-side form validation
  - Responsive design with mobile-first approach

### Backend
- **Server-Side**
  - PHP 7.4+
  - MySQL 8.0+
  - Apache/Nginx web server

- **Security Features**
  - Prepared statements to prevent SQL injection
  - CSRF protection
  - Password hashing (bcrypt)
  - Input validation and sanitization
  - Session management

- **Performance**
  - Database query optimization
  - Caching mechanisms
  - Optimized image handling
  - GZIP compression

## Project Structure

### Core Application
```
BDBookShop/
├── admin/                     # Admin panel
│   ├── inc/                   # Admin includes
│   │   ├── db_connect.php     # Database connection
│   │   ├── footer.php         # Admin footer
│   │   ├── head.php           # Admin head section
│   │   ├── header.php         # Admin header
│   │   └── navbar.php         # Admin navigation
│   ├── inventory/             # Inventory management
│   │   ├── index.php          # Inventory listing
│   │   └── manage_inventory.php # Inventory CRUD
│   ├── maintenance/           # System maintenance
│   │   ├── category.php       # Category management
│   │   ├── index.php          # Maintenance dashboard
│   │   └── manage.php         # System management
│   └── orders/                # Order processing
│       ├── index.php          # Orders listing
│       ├── manage_product.php # Order management
│       └── update_status.php  # Order status updates
│
├── assets/                    # Static assets
│   ├── css/                   # Custom styles
│   │   └── styles.css         # Main stylesheet
│   └── js/                    # Frontend scripts
│       └── scripts.js         # Main JavaScript file
│
├── classes/                   # PHP classes
│   ├── DBConnection.php       # Database connection handler
│   ├── Login.php              # Authentication logic
│   ├── Master.php             # Core functionality
│   └── SystemSettings.php     # System configuration
│
├── database/                  # Database files
│   └── book_shop_db.sql       # Database schema and sample data
│
├── dist/                      # Compiled frontend assets
│   ├── css/                   # Compiled CSS
│   │   └── adminlte.css       # AdminLTE theme
│   └── js/                    # Compiled JavaScript
│       └── adminlte.js        # AdminLTE scripts
│
├── images/                    # Application images
│   ├── logo.png              # Site logo
│   └── cover.png             # Default book cover
│
├── inc/                       # Global includes
│   ├── defaultNav.php        # Default navigation
│   ├── footer.php            # Site footer
│   ├── header.php            # Site header
│   ├── navigation.php        # Main navigation
│   └── topBarNav.php         # Top navigation bar
│
├── libs/                      # Third-party libraries
│   ├── css/                  # External CSS
│   └── phpqrcode/            # QR code generation
│
├── plugins/                   # Third-party plugins
│   ├── bootstrap/            # Bootstrap framework
│   ├── jquery/               # jQuery library
│   ├── summernote/           # Rich text editor
│   └── ... (other plugins)   # Additional plugins
│
├── uploads/                   # User uploaded files
│   ├── product_1/            # Product 1 images
│   ├── product_2/            # Product 2 images
│   └── ...
│
# Main Application Files
├── about.php                 # About page
├── cart.php                  # Shopping cart
├── checkout.php              # Checkout process
├── config.php                # Configuration settings
├── edit_account.php          # User account editing
├── home.php                  # Homepage
├── index.php                 # Main entry point
├── initialize.php            # Application initialization
├── login.php                 # User login
├── logout.php                # User logout
├── my_account.php            # User account
├── order.php                 # Order processing
├── products.php              # Product listing
├── registration.php          # User registration
├── view_categories.php       # Category listing
└── view_product.php          # Product details
```

### Key Files Explained

1. **Admin Panel**
   - `admin/inc/`: Core admin functionality and templates
   - `admin/inventory/`: Product inventory management
   - `admin/orders/`: Order processing and management

2. **Core Application**
   - `classes/`: Contains all PHP classes for the application
   - `inc/`: Global includes and templates
   - `initialize.php`: Application bootstrap and configuration
   - `config.php`: Database and application settings

3. **Frontend**
   - `assets/`: Custom CSS and JavaScript
   - `dist/`: Compiled frontend assets
   - `plugins/`: Third-party libraries and plugins

4. **Database**
   - `database/book_shop_db.sql`: Complete database schema and sample data

5. **User Content**
   - `uploads/`: User-uploaded images and files
   - `images/`: Application images and assets

## Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 8.0 or higher
- Web server (Apache/Nginx)
- Composer (for dependency management)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/prosenjit07/BDBookShop.git
   cd BDBookShop
   ```

2. **Database Setup**
   ```bash
   # Create database
   mysql -u root -e "CREATE DATABASE IF NOT EXISTS bdbookshop;"
   
   # Import database schema
   mysql -u root bdbookshop < database/book_shop_db.sql
   
   # Verify tables
   mysql -u root -e "SHOW TABLES FROM bdbookshop;"
   ```

3. **Configuration**
   Update database credentials in `config.php`:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'bdbookshop');
   ```

4. **Start Development Server**
   ```bash
   # Using PHP built-in server
   php -S localhost:8000
   ```

5. **Access the Application**
   - Frontend: http://localhost:8000
   - Admin Panel: http://localhost:8000/admin
     - Username: admin@admin.com
     - Password: admin123

## Deployment

### Production Deployment
1. Set up a production web server (Apache/Nginx)
2. Configure virtual hosts
3. Set proper file permissions
4. Enable HTTPS using Let's Encrypt
5. Set up regular database backups

### Environment Variables
Create a `.env` file in the root directory:
```
DB_HOST=localhost
DB_USER=db_user
DB_PASS=db_password
DB_NAME=bdbookshop
BASE_URL=https://yourdomain.com
DEBUG_MODE=false
```

## Technical Optimizations

### Frontend Optimizations
- **Performance**
  - Minified and bundled JavaScript/CSS
  - Image optimization and lazy loading
  - Asynchronous script loading
  - Browser caching headers

- **User Experience**
  - Responsive design for all devices
  - Progressive enhancement
  - Smooth animations and transitions
  - Form validation feedback

### Backend Optimizations
- **Database**
  - Indexed database tables
  - Optimized queries with JOINs
  - Query caching
  - Pagination for large datasets

- **Security**
  - Prepared statements
  - Input validation and sanitization
  - CSRF protection
  - Secure session handling
  - Rate limiting for API endpoints

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [Bootstrap](https://getbootstrap.com/) - For the responsive frontend framework
- [jQuery](https://jquery.com/) - For simplifying JavaScript
- [Font Awesome](https://fontawesome.com/) - For beautiful icons
- [AdminLTE](https://adminlte.io/) - For the admin dashboard template
- The open-source community for invaluable resources and support

---

<div align="center">
  Made with ❤️ by Prosenjit Chandra Biswas
</div>

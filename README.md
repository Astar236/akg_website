<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# AKG Industries Website

This repository contains the source code for the official website of AKG Industries, a premier manufacturer and supplier of industrial components and solutions. The website is built using the Laravel PHP framework, providing a modern, responsive, and maintainable online presence.

## Project Description

The AKG Industries website serves as a digital storefront and information hub, designed to showcase the company's capabilities, products, and commitment to quality. Key features include:

* **Dynamic Home Page:** A visually engaging landing page with sections highlighting a welcome message, company strengths, product previews, certifications, client testimonials (via scrolling logos), and a direct message from the director.
* **Informative Pages:** Dedicated sections for "About Us," "Our Products" (displayed in a clear list view), and "Certificates."
* **Contact Form with Database Storage:** A fully functional contact form that captures user inquiries and securely stores them in a database, ensuring no lead is missed.
* **Responsive Design:** The layout is optimized to provide an excellent viewing experience across a wide range of devices, from desktops to mobile phones.
* **Unified Layout:** Utilizes a consistent header, navigation, and footer across all pages, managed through Blade templating.
* **Global Background:** Features a subtle, fixed background image with transparency across all pages for a consistent aesthetic.

## Technologies Used

This project leverages a modern web development stack to ensure robustness, performance, and ease of development:

* **Laravel (PHP Framework):**
    * **Why:** Chosen for its elegant syntax, robust features (like ORM, routing, and task scheduling), MVC architecture, and large, active community. It accelerates backend development and ensures a scalable application.
* **PHP:**
    * **Why:** The foundational server-side scripting language upon which Laravel is built. It's widely used, mature, and efficient for web applications.
* **Composer:**
    * **Why:** PHP dependency manager. Essential for installing and managing all Laravel packages and other PHP libraries used in the project.
* **MySQL (or equivalent, e.g., MariaDB/PostgreSQL):**
    * **Why:** A popular relational database management system used to store structured data, such as contact form submissions.
* **Blade Templating Engine:**
    * **Why:** Laravel's lightweight yet powerful templating engine. It allows for clean, reusable HTML structures by enabling the use of simple, elegant syntax for PHP logic within views.
* **Tailwind CSS:**
    * **Why:** A utility-first CSS framework. It enables rapid UI development by providing low-level utility classes directly in the HTML, promoting highly customizable and responsive designs without writing custom CSS.
* **Vite:**
    * **Why:** A next-generation frontend build tool that integrates seamlessly with Laravel. It offers an incredibly fast development server (Hot Module Replacement - HMR) and optimized builds for production, handling CSS (Tailwind) and JavaScript assets.
* **NPM (Node Package Manager):**
    * **Why:** Used for managing JavaScript dependencies, including Tailwind CSS and other frontend build tools.
* **Git:**
    * **Why:** A distributed version control system used for tracking changes in source code, coordinating work among developers, and managing releases.
* **Font Awesome:**
    * **Why:** A popular icon toolkit that provides scalable vector icons that can be customized with CSS, enhancing the visual appeal of the UI.

## How to Run This Project on Your Local Machine

Follow these steps to get the AKG Industries website up and running on your local development environment:

### Prerequisites

Before you begin, ensure you have the following installed:

* **Web Server Environment:** WAMP, XAMPP, Laragon (Windows), or Valet (macOS), or a Docker-based environment. This provides PHP, MySQL, and Apache/Nginx.
* **PHP:** Version 8.1 or higher (compatible with Laravel 10/11).
* **Composer:** [Download Composer](https://getcomposer.org/download/).
* **Node.js & NPM:** [Download Node.js](https://nodejs.org/en/download/) (NPM comes with Node.js).
* **Git:** [Download Git](https://git-scm.com/downloads/).

### Installation Steps

1.  **Clone the Repository:**
    ```bash
    git clone [https://github.com/Astar236/akg_website.git](https://github.com/Astar236/akg_website.git) # Replace with your actual repository URL
    ```
2.  **Navigate to the Project Directory:**
    ```bash
    cd akg_website
    ```
3.  **Install PHP Dependencies:**
    ```bash
    composer install
    ```
4.  **Install JavaScript Dependencies:**
    ```bash
    npm install
    # Or if you use Yarn: yarn install
    ```
5.  **Set Up Environment File:**
    Laravel uses an `.env` file for environment-specific configurations (like database credentials, app key).
    ```bash
    cp .env.example .env  # For Linux/macOS
    # For Windows: copy .env.example .env
    ```
6.  **Generate Application Key:**
    This command generates a unique application key for your `.env` file, which is crucial for security.
    ```bash
    php artisan key:generate
    ```
7.  **Database Configuration:**
    * Create a new MySQL database (e.g., `akg_db`) using phpMyAdmin or your database management tool.
    * Open the `.env` file and update the database connection details:
        ```dotenv
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=akg_db # Your database name
        DB_USERNAME=root   # Your database username
        DB_PASSWORD=       # Your database password (leave blank if none)
        ```
8.  **Run Database Migrations:**
    This will create the necessary tables in your database, including `contact_submissions`.
    ```bash
    php artisan migrate
    ```
9.  **Place Required Images:**
    Ensure you have the following images in their respective `public/images` subfolders:
    * `public/images/logo.png`
    * `public/images/logo2.png` (for the header)
    * `public/images/global_background.jpg` (for the transparent global background)
    * `public/images/hero_background.jpg` (for the hero section on the home page)
    * `public/images/director.jpg`
    * `public/images/clients/client1.png` to `client17.png` (for client logos)
    * `public/images/products/pipe.jpg`, `tube.jpg`, `section.jpg`, `fittings.jpg`, `valves.jpg`, `flanges.jpg`
    * `public/images/badges/best-quality.png`, `nabcb.png`, `iaf.png`, `on-time-delivery.png`, `reasonable-price.png`, `quality-assurance.png`
10. **Start Development Servers:**
    You need two separate terminal windows for this:
    * **Terminal 1 (Laravel Development Server):**
        ```bash
        php artisan serve
        ```
    * **Terminal 2 (Vite Frontend Server):**
        ```bash
        npm run dev
        # Or if you use Yarn: yarn dev
        ```
        Keep this terminal running while you are developing, as it will automatically recompile your CSS and JS.

### Accessing the Application

Once both servers are running, open your web browser and navigate to:
`http://127.0.0.1:8000` (or the URL provided by `php artisan serve`).

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Redberry](https://redberry.international/laravel-development)**
-   **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

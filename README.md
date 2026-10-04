# Marketing Safalta — Performance Marketing & Google Ads Agency

> Official website for **Marketing Safalta** — India's #1 Google Ads Expert & Certified Performance Marketer (Raj Thakur).

---

## 🚀 Features

- **Red & White Brand Identity**: High-converting, brand-aligned visual identity.
- **Custom WordPress Theme**: Located at `wp-content/themes/marketing-safalta-by-saurabh-singh`.
- **Tailwind CSS Integration**: Fully compiled and optimized design system.
- **Lead Generation & Contact Forms**: Complete with strategy call booking and WhatsApp integration.
- **Pre-configured Database**: Full MySQL/MariaDB database dump included (`database.sql`).

---

## 🛠️ Local Setup & Quickstart

### Prerequisites
- PHP 8.0+
- MariaDB / MySQL
- Composer & Node.js (for theme development)

### 1. Database Setup
```bash
mariadb -u root -p -e "CREATE DATABASE IF NOT EXISTS marketing;"
mariadb -u root -p marketing < database.sql
```

### 2. Configure Database Credentials
Edit `wp-config.php`:
```php
define( 'DB_NAME', 'marketing' );
define( 'DB_USER', 'your_username' );
define( 'DB_PASSWORD', 'your_password' );
define( 'DB_HOST', '127.0.0.1' );
```

### 3. Run Locally
```bash
php -S 0.0.0.0:8000
```
Visit `http://localhost:8000` in your browser.

---

## 🎨 Theme Development
To rebuild Tailwind CSS styles:
```bash
cd wp-content/themes/marketing-safalta-by-saurabh-singh
npm install
npm run build
```

---

## 📄 License & Credits
- **Founder & Agency**: Marketing Safalta / Boost Ads Agency (Raj Thakur)
- **Theme Development**: Marketing Safalta Custom Theme

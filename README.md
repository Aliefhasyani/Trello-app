

---

#  Course Management Web App

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge\&logo=laravel\&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge\&logo=bootstrap\&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge\&logo=mysql\&logoColor=white)

A course management system built with Laravel. This application integrates with RapidAPI to fetch course data and supports full CRUD operations with role-based access control.


![image](https://github.com/user-attachments/assets/42d60768-c9f5-41e1-923b-090da202f8a8)



---

## 🚀 Features

* **🔐 Role-Based Access Control**

  * **Admin**: Full CRUD for users and courses
  * **Teacher**: Manage assigned courses
  * **Student**: Enroll in and view courses

* **🌐 API Integration**

  * Fetches course data from RapidAPI
  * Stores data in a local MySQL database

* **👤 User Management**

  * Secure login and registration
  * Password encryption
  * User profile management

* **📚 Course Management**

  * Create, read, update, and delete courses
  * Enrollments system
  * Pricing and coupon features

---

## 🧰 Tech Stack

* **Backend**: Laravel 12
* **Frontend**: Blade + Bootstrap 5
* **Database**: MySQL
* **API**: RapidAPI
* **User Authentication**: Laravel Breeze

---

## 🛠️ Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/Aliefhasyani/web-app.git
   cd web-app
   ```

2. **Install dependencies**

   ```bash
   composer install
   npm install
   ```


3. **Set up the database**

   * Create a new MySQL database
   * Update your `.env` file with database credentials

   ```bash
   php artisan migrate --seed
   ```

4. **Start the development server**

   ```bash
   php artisan serve
   ```

---

## 👥 Default Test Accounts

| Role    | Email                                         | Password |
| ------- | --------------------------------------------- | -------- |
| Admin   | [admin@gmail.com](mailto:admin@gmail.com)     | 12345678 |
| Teacher | [teacher@gmail.com](mailto:teacher@gmail.com) | 12345678 |
| Student | [student@gmail.com](mailto:student@gmail.com) | 12345678 |

---






Here's a cleaned-up and professional version of your README file, with better formatting, fixed code blocks, clearer instructions, and section consistency:

---

# Trello-style Course Management App

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge\&logo=laravel\&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge\&logo=bootstrap\&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge\&logo=mysql\&logoColor=white)

A Trello-inspired course management system built with Laravel. This application integrates with RapidAPI to fetch course data and supports full CRUD operations with role-based access control.

![App Screenshot](https://via.placeholder.com/800x400?text=Trello-style+Course+Management+App) <!-- Replace with actual screenshot -->

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

* **Backend**: Laravel 10
* **Frontend**: Blade + Bootstrap 5
* **Database**: MySQL
* **API**: RapidAPI
* **Authentication**: Laravel Sanctum

---

## 🛠️ Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/Aliefhasyani/Trello-app.git
   cd Trello-app
   ```

2. **Install dependencies**

   ```bash
   composer install
   npm install
   ```

3. **Copy the `.env` file and configure your environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set up the database**

   * Create a new MySQL database
   * Update your `.env` file with database credentials

   ```bash
   php artisan migrate --seed
   ```

5. **Start the development server**

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

## 🌐 Key Routes

* Admin Panel: `/admin/dashboard`
* Course Management: `/courses`
* Register: `/register`
* Login: `/login`

---

## 🤝 Contributing

1. Fork the project
2. Create your feature branch

   ```bash
   git checkout -b feature/AmazingFeature
   ```
3. Commit your changes

   ```bash
   git commit -m "Add some AmazingFeature"
   ```
4. Push to the branch

   ```bash
   git push origin feature/AmazingFeature
   ```
5. Open a Pull Request

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

Let me know if you'd like me to add database schema diagrams, actual screenshots, or `.env` setup tips.

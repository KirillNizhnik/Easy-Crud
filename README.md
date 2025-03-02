# 🚀 Laravel CRUD Project with Docker

This project is a **Laravel CRUD application** with a **Dockerized environment**.  
The **Docker setup is inside the `develop/` folder**.

---


## 🔧 Setup & Installation

### 1️⃣ Prerequisites
Ensure you have **Docker & Docker Compose** installed.



### 2️⃣ Configure Laravel Database Connection

Update the **`.env`** file in your Laravel project with the following database settings:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=crud
DB_USERNAME=my_user
DB_PASSWORD=my_password
```


### 3️⃣ Setting Up Docker

The Docker configuration is located inside the **`develop/`** folder.  
It includes:

- **MySQL 8.0 Database** (`crud_mysql` container)
- **phpMyAdmin** (`crud_phpmyadmin` container)

### 🚀 Starting Docker Containers
Run the following command **from the project's root directory**:
```sh
chmod +x develop/start_develop.sh
```

### 🚀 Starting Dependencies Install
Run the following command **from the project's root directory**:
```sh
./develop/install_dependencies.sh
```

### 🚀 Running Laravel Migrations
Run the following command to **refresh the database and seed data**:
```sh
php artisan migrate:fresh --seed
```

### 🚀 Running Laravel 
```sh
php artisan serve
```



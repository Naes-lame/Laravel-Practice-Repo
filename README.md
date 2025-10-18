<div align="center">

# 🌸 <span style="font-family: 'Brush Script MT', cursive; color: #FFB6C1;">*Laravel Practice Repository*</span> 🌸

### <span style="color: #FFC0CB;">✿ *Mastering Eloquent Relationships & Database Management* ✿</span>

<p>
<img src="https://img.shields.io/badge/Laravel-11.x-FFB6C1?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
<img src="https://img.shields.io/badge/PHP-8.x-FFC0CB?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
<img src="https://img.shields.io/badge/MySQL-Database-FFD4E5?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

✨ 🌸 ✨

</div>

## <span style="color: #FFB6C1;">🌸 *Table of Contents*</span>

- 🌷 [About](#-about)
- 🌸 [What I Did](#-what-i-did)
- 🌺 [Database Schema](#-database-schema)
- 💐 [Getting Started](#-getting-started)
- 💖 [Features](#-features)

<div align="center">
🌺 ✿ ✿ ✿ 🌺
</div>

## <span style="color: #FFB6C1;">🌷 *About*</span>

This repository is a **Laravel practice project** focused on implementing and understanding **Eloquent ORM relationships**. It demonstrates a complete student management system with proper database design, migrations, factories, and seeders.

<div align="center">
🌺 ✿ ✿ ✿ 🌺
</div>

## <span style="color: #FFB6C1;">✨ *What I Did*</span>

### <span style="color: #FFC0CB;">**Branch:** `eloquent-practice`</span>

This branch implements a comprehensive **student management system** with the following Eloquent relationships:

#### <span style="color: #FFB6C1;">🌺 *Database Structure*</span>

- 🌸 **Department** → Has many **Sections** (One-to-Many)
- 🌸 **Section** → Belongs to **Department** (Many-to-One)
- 🌸 **Section** → Has many **Students** (One-to-Many)
- 🌸 **Student** → Belongs to **Section** (Many-to-One)
- 🌸 **Student** → Has one **Profile** (One-to-One)
- 🌸 **Profile** → Belongs to **Student** (One-to-One)

#### <span style="color: #FFB6C1;">💐 *Implementation Details*</span>

**1. Created Models with Relationships:**
   - 🌷 `Department` model with `hasMany` relationship to Sections
   - 🌷 `Section` model with `belongsTo` Department and `hasMany` Students
   - 🌷 `Student` model with `belongsTo` Section and `hasOne` Profile
   - 🌷 `Profile` model with `belongsTo` Student

**2. Database Migrations:**
   - 🌷 `departments` table with name field
   - 🌷 `sections` table with name and department_id foreign key
   - 🌷 `students` table with first_name, last_name, gender, age, email, and section_id
   - 🌷 `profiles` table with address, birthday, and student_id foreign key

**3. Factory & Seeder:**
   - 🌷 Created `StudentFactory` with Faker data generation
   - 🌷 Implemented `DatabaseSeeder` that creates:
     - 1 Computer Department
     - 3 Sections (Animations, IT, Computer Science)
     - 20 Students per section (60 total)
     - 1 Profile per student with address and birthday

**4. Data Generation:**
   - 🌷 Successfully seeded the database with realistic fake data
   - 🌷 All relationships properly connected and working

<div align="center">
🌺 ✿ ✿ ✿ 🌺
</div>

## <span style="color: #FFB6C1;">🌺 *Database Schema*</span>

```
┌─────────────┐
│ departments │
├─────────────┤
│ id          │
│ name        │
└──────┬──────┘
       │
       │ 1:N
       │
┌──────▼───────┐
│  sections    │
├──────────────┤
│ id           │
│ name         │
│ department_id│
└──────┬───────┘
       │
       │ 1:N
       │
┌──────▼──────┐      ┌───────────┐
│  students   │ 1:1  │ profiles  │
├─────────────┤◄─────┤───────────┤
│ id          │      │ id        │
│ first_name  │      │ address   │
│ last_name   │      │ birthday  │
│ gender      │      │ student_id│
│ age         │      └───────────┘
│ email       │
│ section_id  │
└─────────────┘
```

<div align="center">
🌺 ✿ ✿ ✿ 🌺
</div>

## <span style="color: #FFB6C1;">💐 *Getting Started*</span>

### <span style="color: #FFC0CB;">*Prerequisites*</span>

- 🌸 PHP 8.x or higher
- 🌸 Composer
- 🌸 MySQL/MariaDB/PgSQL
- 🌸 Laravel 11.x

### <span style="color: #FFC0CB;">*Installation Steps*</span>

**1. Clone the repository:**
   ```bash
   git clone <repository-url>
   cd Laravel-Practice-Repo
   ```

**2. Install dependencies:**
   ```bash
   composer install
   ```

**3. Configure environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

**4. Set up database in `.env`:**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

**5. Run migrations and seed data:**
   ```bash
   php artisan migrate:fresh --seed
   ```

<div align="center">
🌺 ✿ ✿ ✿ 🌺
</div>

## <span style="color: #FFB6C1;">💖 *Features*</span>

- 🌸 **Eloquent Relationships** - One-to-Many, One-to-One, Many-to-One
- 🌸 **Database Migrations** - Clean, version-controlled schema
- 🌸 **Model Factories** - Automated fake data generation
- 🌸 **Database Seeders** - Pre-populated test data
- 🌸 **Proper Foreign Keys** - Referential integrity maintained
- 🌸 **Fillable Properties** - Mass assignment protection

<div align="center">
🌺 ✿ ✿ ✿ 🌺
</div>

<div align="center">

### <span style="color: #FFB6C1;">💎 *Sponsored*</span>

🌸 **README by [ractopen](https://github.com/ractopen/ractopen)** 🌸

✨ 🌸 ✨

</div>

</div>

# Contacts App

**Author:** YOGYU MOHAMMED
**Course:** Web Programming II

A simple PHP and MySQL app that collects contact details through a form, saves them to a database, and displays them on a dashboard.

## Files

| File | Purpose |
|------|---------|
| `index.php` | Form with Name, Email and Contact fields (POST to `submit.php`) |
| `submit.php` | Gets the POST data and saves it to the database |
| `dashboard.php` | Displays all saved contacts in a table (Id, Name, Email, Contact) |
| `style.css` | Styling for the form, messages and dashboard |
| `db.php` | Database connection |
| `database.sql` | Creates the `Contacts` database and the `my_contact` table |

## Database

- Database: `Contacts`
- Table: `my_contact` (`id`, `name`, `email`, `contact`)

## How to Run

1. Start **Apache** and **MySQL** in XAMPP.
2. Open phpMyAdmin, go to the **SQL** tab, and run `database.sql`.
3. Copy the project folder to `C:\xampp\htdocs\contacts_app\`.
4. Open `http://localhost/contacts_app/index.php` in your browser.
5. Submit the form, then click **View Dashboard** to see the saved records.

## Requirements

- XAMPP (Apache, MySQL, PHP)

## User form overvirew
A simple PHP/MySQL web app to:
 * Add users (name & age)

 * View all users in a table

 * Toggle status (1/0)

## Database Setup
```sql
CREATE DATABASE simpleform;
USE simpleform;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    status INT DEFAULT 0
);
```

## Files

- `index.php` – Main form and user table display.
- `config.php` – Database connection.
- `toggle.php` – Handles user status toggle.
- `style.css` – Styling for the form and table.
- `script.js` – JavaScript function to handle toggle button click.

## Screenshots
 ### 🔹 BEFORE CLICKING TOGGLE

| Page | Database |
|------|----------|
| <img src="PageBeforeClicking" alt="Page View" width="400"/> | <img src="DB_Before" alt="DB View" width="400"/> |

### 🔹 AFTER CLICKING TOGGLE

| Page | Database |
|------|----------|
| <img src="PageAfterClicking" alt="Page View" width="400"/> | <img src="DB_After" alt="DB View" width="400"/> |


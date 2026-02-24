# Backend – Money Tracker API

This is a RESTful API built with Laravel for managing users, wallets and transactions.

## 🛠 Tech Stack

- PHP 8+
- Laravel 12
- SQLite (default) or MySQL
- Postman (for API testing)

---

## 🚀 Installation & Setup

### 1 Clone Repository


git clone https://github.com/YOUR_USERNAME/Tasks.git
cd Tasks/backend


### 2 Install Dependencies

composer install


###  Run Server


php artisan serve


Server runs at:
http://127.0.0.1:8000


# 📡 API Endpoints

Base URL:
http://127.0.0.1:8000/api


## 👤 Create User Using Postman

POST /api/users

Body (JSON):

json
{
  "name": "John",
  "email": "john@email.com"
}


## 💼 Create Wallet

POST /api/wallets
json
{
  "user_id": 1,
  "name": "Main Wallet"
}

## 💰 Add Income

POST /api/transactions

json
{
  "wallet_id": 1,
  "amount": 500,
  "type": "income",
  "description": "salary"
}


## 💸 Add Expense

json
{
  "wallet_id": 1,
  "amount": 100,
  "type": "expense",
  "description": "food"
}


## 📊 View User Profile

GET `/api/users/1

Returns:
- Wallet list
- Individual balances
- Total balance



## 📱 Testing with Postman

1. Open Postman
2. Select method (GET/POST)
3. Enter URL (example: http://127.0.0.1:8000/api/users)
4. Select Body → Raw → JSON
5. Send request

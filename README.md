# 🌾 AgriNav - Empowering Farmers with Real-time Weather and Global Collaboration

AgrNav is a web-based platform built with **PHP**, **HTML**, **Tailwind CSS**, and **JavaScript** to provide **real-time weather forecasts** and a **global communication space for farmers and agricultural experts**. It also features an **AI-powered chatbot** to assist farmers with their queries, making agricultural knowledge accessible and instant.

---

## 🚀 Features

- **📡 Real-time Weather Forecast**
  - Location-based weather updates tailored for agricultural needs.
  - Helps farmers make informed decisions about their work and crops.

- **🌍 Global Farmer-Expert Forum**
  - Farmers can communicate with each other and agricultural experts globally.
  - Facilitates collaboration, knowledge sharing, and problem-solving.

- **🤖 Smart Agricultural Chatbot**
  - Built-in chatbot that provides instant answers to common farming questions.
  - Uses AI to assist farmers with best practices, seasonal planning, pest control, and more.

---

## 🛠️ Technologies Used

- **PHP** – Backend logic and data handling
- **HTML** – Structure of the web pages
- **Tailwind CSS** – Clean, responsive user interface
- **JavaScript** – Dynamic interactions and real-time functionality
- **MySQL** – Data storage (user accounts, forum data, etc.)

---

# 🌾 AgriConnect - Empowering Farmers with Real-time Weather and Global Collaboration

AgriConnect is a web-based platform built with **PHP**, **HTML**, **Tailwind CSS**, and **JavaScript** to provide **real-time weather forecasts** and a **global communication platform for farmers and agricultural experts**. It also includes an **AI-powered chatbot** to help farmers with instant answers to their farming-related queries.

---

## 🚀 Features

- **📡 Real-time Weather Forecasting**
  - Accurate, location-based weather updates.
  - Supports planning and decision-making for farmers.

- **🌍 Global Farmer & Expert Community**
  - Connect with other farmers and experts around the world.
  - Share knowledge, ask questions, and solve problems collaboratively.

- **🤖 Smart AI Chatbot**
  - Provides 24/7 assistance to farmers.
  - Answers common farming queries using AI and natural language processing.

---

## 🛠️ Technologies Used

- **PHP** – Backend scripting and server-side logic  
- **HTML** – Page structure and content  
- **Tailwind CSS** – Utility-first CSS framework for styling  
- **JavaScript** – Client-side interactivity and API handling  
- **MySQL** – Relational database for storing user and forum data  

---

## ⚙️ Installation & Setup Guide

Follow these steps to install and run the project locally:

---

### 📥 1. Clone the Repository

```bash
git clone https://github.com/yourusername/agriconnect.git
cd agriconnect
🖥️ 2. Install Required Software
Ensure the following are installed on your system:

✅ XAMPP – Local server environment (Apache + MySQL)

✅ Node.js & npm – Required for Tailwind CLI

✅ A code editor like VS Code

🗂️ 3. Project Setup
Move the project folder to your server’s root directory:
For XAMPP:

makefile
Copy
Edit
C:\xampp\htdocs\agriconnect
Start XAMPP:

Open the XAMPP Control Panel.

Start Apache and MySQL modules.

Open the project in your browser:

arduino
Copy
Edit
http://localhost/agriconnect
🗄️ 4. Database Configuration
Go to phpMyAdmin

Create a new database (example name):

nginx
Copy
Edit
agriconnect_db
Import the provided SQL file:

Go to Import tab

Select:

pgsql
Copy
Edit
/database/agriconnect.sql
Update your database credentials in the PHP config file (e.g., config/db.php):

php
Copy
Edit
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "agriconnect_db";
🔐 5. Environment File Setup
Locate the env.txt file in the project root.

Create a new file named .env in the same directory.

Copy the content from env.txt into .env, and update with your credentials:

env
Copy
Edit
OPENAI_API_KEY=your_api_key_here
WEATHER_API_KEY=your_weather_api_key_here
DB_HOST=localhost
DB_USER=root
DB_PASS=
DB_NAME=agriconnect_db
⚠️ Important: Never commit the .env file to version control. Keep it private.

🎨 6. Tailwind CSS Setup
To enable Tailwind CSS via CLI:

Install required packages:

bash
Copy
Edit
npm install
Run Tailwind CLI in development mode:

bash
Copy
Edit
npm run dev
This will watch and compile your Tailwind styles from input.css to output.css automatically.

✅ 7. You're All Set!
Now, go to:

arduino
Copy
Edit
http://localhost/agriconnect
You should see:

✅ Weather forecast dashboard

✅ Working chatbot interface

✅ Global discussion forum

✅ Tailwind styles live and responsive

📷 Screenshots
(Include screenshots here to showcase UI, chatbot, and forum features)

📬 Contributing
Contributions are welcome!

Fork this repository

Create a new branch:

bash
Copy
Edit
git checkout -b feature/my-feature
Commit your changes

Push to your fork

Submit a pull request

📝 License
This project is licensed under the MIT License.

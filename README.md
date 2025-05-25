# 🌾 AgriNav – Empowering Farmers with Real-time Weather & Global Collaboration

**AgriNav** is a web-based platform developed using **PHP**, **HTML**, **Tailwind CSS**, and **JavaScript**. It provides **real-time weather forecasts** and a **global forum** where farmers and agricultural experts can connect. The platform also integrates an **AI-powered chatbot** to deliver instant agricultural advice.

---

## 🚀 Features

- 📡 **Real-time Weather Forecast**
  - Location-based weather updates tailored for agriculture.
  - Helps farmers make informed crop and field decisions.

- 🌍 **Global Farmer-Expert Forum**
  - A discussion platform for farmers and agricultural experts around the globe.
  - Facilitates collaboration and problem-solving.

- 🤖 **Smart Agricultural Chatbot**
  - AI chatbot for instant farming advice.
  - Assists with best practices, seasonal planning, pest control, and more.

---

## 🛠️ Tech Stack

- `PHP` – Backend processing  
- `HTML` – Page structure and layout  
- `Tailwind CSS` – Responsive UI styling  
- `JavaScript` – Interactive and dynamic content  
- `MySQL` – Database management

---

## ⚙️ Installation & Setup Guide

### 📥 1. Clone the Repository

```bash
git clone https://github.com/yourusername/agriconnect.git
cd agriconnect
```

---

### 💻 2. Install Required Software

```markdown
- ✅ XAMPP (Apache + MySQL)
- ✅ Node.js and npm
- ✅ A code editor (e.g., VS Code)
```

---

### 🗂️ 3. Project Setup

```markdown
1. Move the project folder to your server root directory:

   Example (XAMPP on Windows):
   C:\xampp\htdocs\agriconnect

2. Open the XAMPP Control Panel.
3. Start the Apache and MySQL modules.
4. Open your browser and visit:

   http://localhost/agriconnect
```

---

### 🗄️ 4. Database Configuration

```markdown
1. Go to http://localhost/phpmyadmin

2. Create a new database:
   agriconnect_db

3. Import the SQL file:
   - Go to the Import tab
   - Choose: /database/agriconnect.sql

4. Update the database configuration in config/db.php:
```

```php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "agriconnect_db";
```

---

### 🔐 5. Environment File Setup

```markdown
1. Locate the `env.txt` file in the root directory.

2. Create a new file named `.env`.

3. Copy the contents of `env.txt` into `.env` and update the values:
```

```env
OPENAI_API_KEY=your_api_key_here
WEATHER_API_KEY=your_weather_api_key_here
DB_HOST=localhost
DB_USER=root
DB_PASS=
DB_NAME=agriconnect_db
```

> ⚠️ **Important:** Never commit your `.env` file to GitHub. Keep it private.

---

### 🎨 6. Tailwind CSS Setup

```bash
# Install dependencies
npm install

# Run Tailwind in development mode
npm run dev
```

> This will compile your Tailwind CSS files and watch for changes automatically.

---

### ✅ 7. You're All Set!

```markdown
Visit the application in your browser:

http://localhost/agriconnect

You should see:
- ✅ Weather Forecast Dashboard
- ✅ AI Chatbot Interface
- ✅ Global Farmer Forum
- ✅ Responsive Tailwind CSS Styling
```

---

## 📷 Screenshots

```markdown
📸 Add screenshots here to showcase:
- The main dashboard
- Chatbot in action
- Forum interface
```

---

## 📬 Contributing

```markdown
We welcome contributions! Follow these steps:

1. Fork the repository
2. Create a new branch:
```

```bash
git checkout -b feature/your-feature-name
```

```markdown
3. Commit your changes and push:
```

```bash
git add .
git commit -m "Add your message"
git push origin feature/your-feature-name
```

```markdown
4. Open a pull request on GitHub
```

---

## 📝 License

```markdown
This project is licensed under the MIT License.
```

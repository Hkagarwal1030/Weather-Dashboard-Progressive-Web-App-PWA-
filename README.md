# Weather-Dashboard-Progressive-Web-App-PWA-
.

🌤️ Weather Dashboard + Progressive Web App (PWA)
















A dual-mode Weather Application consisting of:

✅ 1. A Simple Weather Dashboard (HTML + JS only)

Uses Open-Meteo Geocoding + Weather API for real-time temperature, windspeed, and descriptions.
Reference: index.html 

index

✅ 2. A Full Weather Progressive Web App (PWA)

Includes offline caching, location-based weather, 5-day forecast, manifest, and service worker.
Reference: index.htm (PWA UI) 

index

 and sw.js (Service Worker) 

sw

✨ Features
🌦️ Weather Dashboard (index.html)

Search weather by city

Real-time temperature & windspeed

Open-Meteo API integration

Dynamic UI updates

Error handling for invalid cities

Clean gradient UI

📱 Weather PWA (index.htm)

Installable on Android / Desktop

Works offline using Service Worker Cache

Fetch weather by:

City name

User’s live GPS coordinates

Backend (backend.php) provides parsed weather + forecast

5-Day Forecast

Responsive Bootstrap UI

⚡ Service Worker (sw.js)

Caches essential static files for offline mode

Returns cached content when offline

Ensures fast repeated loads

📂 Project Structure
/weather-app
│── index.html          → Simple Weather Dashboard
│── index.htm           → Full Weather PWA
│── backend.php         → Weather request backend (PHP)
│── db.php              → Optional DB configuration
│── sw.js               → Service Worker for caching
│── manifest.json       → PWA config
│── bootstrap/          → Bootstrap assets (local)
│── README.md

🛠️ Technologies Used
Component	Technology
Weather API	Open-Meteo API
UI	Bootstrap 5 (PWA), Custom CSS
Backend	PHP (JSON response)
Storage	Browser Cache (Service Worker)
PWA	Manifest + Service Worker
Geolocation	HTML5 Location API
Forecast	Open-Meteo Forecast endpoint
🚀 Getting Started
1️⃣ Setup the project

Place the project in your server directory:

For XAMPP:

htdocs/weather-app/


For WAMP:

www/weather-app/

2️⃣ Start a local server

The PWA requires HTTP/HTTPS, so open via:

http://localhost/weather-app/index.htm

3️⃣ Using the PWA

Enter a city → Get weather instantly

Click Use My Location → Auto-fetch using GPS

App becomes installable (Android + Chrome Desktop)

🌍 API Endpoints Used
Geocoding
https://geocoding-api.open-meteo.com/v1/search?name={CITY}

Weather Forecast
https://api.open-meteo.com/v1/forecast?latitude={lat}&longitude={lon}&current_weather=true

🔒 Security Notes

Backend proxy (backend.php) prevents CORS issues

Service Worker cached paths must be correctly referenced

PWA installation requires HTTPS in production

📌 Future Enhancements

Dark Mode

Hourly Forecast Chart (using Chart.js)

Save favorite cities (LocalStorage / DB)

Weather Alerts

Offline forecast caching

Autocomplete search

🤝 Contributing

Fork the repository

Create a new feature branch

Submit a pull request

📄 License

This project is under MIT License.

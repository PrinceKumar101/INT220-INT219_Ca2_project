// const API_key = "3ff6ea7c9c66b811078e2627c893991c";
// const city_name = "chennai";

// // const url = `https://api.openweathermap.org/data/2.5/weather?q=${city_name}&appid=${API_key}&units=metric`;

// const url = `https://api.openweathermap.org/data/2.5/forecast/daily?lat=25.6093239&lon=85.1235252&cnt=7&appid=${API_key}&units=metric`;

// const search_weather = async () => {
//   try {
//     const response = await fetch(url);
//     if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);

//     const res = await response.json();
//     console.log(res);

//     const date = new Date();

//     function rounding_up_temp(n) {
//       return Math.round(n);
//     }

//     function insert_weather_data() {
//       for (i = 0; i < 7; i++) {
//         document.getElementById(`weather_days_data${i}`).innerHTML = 
//           rounding_up_temp(
//             res?.list[i].temp[date.getTime().toString()<=18? "day" : "night"]
//           ) + "°C";
//       } 
//     }

//     document.getElementById("current_temp").innerText = 
//       `${rounding_up_temp(res.list[0].temp[date.getHours().toString() <= 18 ? "day" : "night"])}°C`;
//       weather_icon = document.getElementById("current_temp_icon");
//       weather_icon.src = `https://openweathermap.org/img/wn/${res.list[0].weather[0].icon}.png`;
      
      
//     document.getElementById("current_max_temp").innerText = 
//       `${rounding_up_temp(res.list[0].temp.max)}°C`;

//     document.getElementById("current_min_temp").innerText = 
//       `${rounding_up_temp(res.list[0].temp.min)}°C`;

//     document.getElementById("current_weather_header").innerText = 
//       res.list[0].weather[0].main;

//     document.getElementById("current_weather_description").innerText = 
//       res.list[0].weather[0].description;

//     document.getElementById("current_location").innerText = 
//       res.city.name + " " + res.city.country;

//     document.getElementById("current_day").innerText = 
//       date.toDateString();

//     insert_weather_data();
//   } catch (error) {
//     console.log("Error fetching weather data:", error);
//   }
// };

// search_weather();

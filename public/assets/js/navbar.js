// function fetch_logout_api(id) {
//     const element = document.getElementById(id);
    
//     if (!element) {
//         console.error("Logout element not found.");
//         return;
//     }

//     // Add active styles
//     element.classList.add("text-orange-500", "p-1", "hover:scale-105", "hover:text-rose-500", "underline", "underline-offset-6");

//     // Prevent default behavior (stopping navigation)
//     // element.preventDefault();

//     // Send fetch request to logout API
//     fetch("../backend/auth/logout.php", { method: "POST" });
        
// }

// // Attach event listener to logout button
// document.addEventListener("DOMContentLoaded", function () {
//     const logoutBtn = document.getElementById("logout");

//     if (logoutBtn) {
//         logoutBtn.addEventListener("click", function () {
//             fetch_logout_api("logout"); // Call the function on click
//         });
//     }
// });

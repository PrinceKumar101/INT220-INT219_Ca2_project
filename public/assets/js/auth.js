function handle_password_visiblity(input_section, img_section) {
  const input = document.getElementById(input_section);
  const img = document.getElementById(img_section);
  if (input.type === "password") {
    input.type = "text";
    img.src = "./assets/images/eye_icon_open.png";
  } else {
    input.type = "password";
    img.src = "./assets/images/eye_icon_close.png";
  }
}



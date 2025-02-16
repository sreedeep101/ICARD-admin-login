let eyeicon = document.getElementById("eye-icon");
    let password = document.getElementById("password");
    eyeicon.onclick = function(){
      if (password.type == "password") {
        password.type = "text";
        eyeicon.src = "eye02.png";
      } else {
        password.type = "password";
        eyeicon.src = "eye01.png";
      }
    }
    
const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");


form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    //CREANDO EL AJAX
    let xhr = new XMLHttpRequest(); //CREANDO XML OBJETO
    xhr.open("POST" , "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "Exitoso"){
               location.href="Index3.php";
              }else{
                errorText.textContent = data;
                errorText.style.display = "block";
               
              }
           }
        }
    }

    // necesitamos mandar el form data atravez del ajax php//

    let formData = new FormData(form);
    xhr.send(formData);
}
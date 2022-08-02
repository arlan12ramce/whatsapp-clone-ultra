<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatsapp Realtime</title>
   <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="image/whatsapp.png" alt="">
                    <div class="details">
                        <span>Usuario Whatsapp</span>
                        <p>Activo ahora</p>
                    </div>    
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>juesssssssssssssssssssss, 
                            hfjashfjahfjwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</p>  
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="image/user.png" alt="">
                    <div class="details">
                        <p>juessssssssssssssssssss, hfjahfjahjj</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>juesssssssssssssssssssss, 
                            hfjashfjahfjwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</p>  
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="image/user.png" alt="">
                    <div class="details">
                        <p>juessssssssssssssssssss, hfjahfjahjj</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>juesssssssssssssssssssss, 
                            hfjashfjahfjwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</p>  
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="image/user.png" alt="">
                    <div class="details">
                        <p>juessssssssssssssssssss, hfjahfjahjj</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Mensaje.." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>       
        </section>
    </div>
</body>
</html>
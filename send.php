<?php 
error_reporting(0);
    $fName = $_POST['phone'];
    $fMessage =  'Сообщение: '.$_POST['trouble'].' <br />';
    $AllInOne =  $fName.$fMessage;
    $to = 'ortikov.ruslan@yandex.ru'; 
    $headers="From: Alexryabikov.ru <site@test.ru>\nReply-to:info@alexryabikov.ru\nContent-Type: text/html; charset=\"utf-8\"\n"; 
    // функция, которая отправляет наше письмо
    mail($to, 'Свяжитесь с нами', $AllInOne, $headers); 

?>


<html>
<head>
    <link rel="stylesheet" href="css/main.css">
 <meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="css/slider.sass" rel="stylesheet">
    

<script type="text/javascript" language="javascript">
    

    
    
    
</script>
    
    
</head>
<body>

 <div class="popup data-modal" id="popup"> 
<div id="overlay" class="overlay modal-sandbox"> 
     
  </div>   
 
     
 <div class="sucsses"> 
     
     <div class="s-gal">
     
     <img src="img/galka.png">
     
     </div>
     
     <h2> Заявка отправлена! </h2>
     <p>В ближайшее время я вам перезвоню и мы обсудим все детали по вашей заявке</p>
     
     
<a href="index.php" class="close close-modal" id="close">
     
<img src="img/close.png">     
     
</a>     
     
     
</div>    
     
 
     
</div>     
    
</body>

</html>
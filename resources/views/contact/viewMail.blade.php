<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    

<div class="container my-5">
    <div class="text-center mb-5 mx-5 px-5">
        
        <h1 class="text-danger text-center p-3 mt-3 ">Vous avez bien recu le mail</h1>
        <hr class="bg-dark">
   </div>

   <div>
       <p>Votre Nom : {{$name}}</p>
       <p>Votre Prénom : {{$firstname}}</p>
       <p>Votre Mail : {{$mail}}</p>
       <p>Votre Numéro : {{$number}}</p>
       <p>Votre Message : {{$msg}}</p>
      
   </div>


</div>

</body>
</html>
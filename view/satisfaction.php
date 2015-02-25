<html lang="fr">
	<head>
		<meta charset="UTF-8" />
 		<title></title>
 		<!-- css -->
 		<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
 		<!-- js -->
        <script type="text/javascript" src="../assets/js/script.js"></script>
	</head>
	
    <body>
        <div class="form">
		<form class="form" method="post" name="contact">

            <div class="ligne">
            	<label for="nom"></label>
            	<input type="text" name="nom" id="nom" placeholder="Nom :" />
            </div>
            
            <div class="ligne">
            	<label for="email"></label>
            	<input type="email" name"email" id="email" placeholder="E-mail :"/>
            </div>
            
            <div class="ligne">
            	<label for="note"></label>
            	<input type="number" name"note" id="note" placeholder="Note :"/>
            </div>
            
             <div class="ligne">
            	<label for="age"></label>
            	<input type="text" name"message" id="message" placeholder="Message :"/>
            </div>
            
            <div class="submit">
              <input type="submit" value="Envoyer"/>
            </div>
            
          </form>
          
	</body>
</html>
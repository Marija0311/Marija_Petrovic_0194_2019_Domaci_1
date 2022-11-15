<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    <title>Kursevi stranih jezika| Dobrodošli</title>
</head>

<body>
    
    <header id="home">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php"><b>KURSEVI JEZIKA</b></a>
            </div>
            <div class="forma">
            <div class="collapse navbar-collapse" id="navbar"> 
            <ul class="nav navbar-nav">
                <li><a href="index.php">Početna</a></li>
                <li class="active"><a href="kursevi.php">Kursevi</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </div>
    </nav>
    </header>
    <section class="header-section container"></section>
    
    
    <section class="contact container" id="contact">
        <h2>Kontaktirajte nas</h2>
        <div class="forma">
        <form  method="POST" class="celaforma">
                <label for="name">Vaše ime</label>
                <input id = "ime" type="text" name="name"  required>
                <label for="mail">Vaš e-mail</label>
                <input id = "mejl" type="email" name="mail"  required>
                
                <label for="message">Vaša poruka</label>
                <textarea name="idMessage" id="message" rows="5"></textarea>
                <button>Pošaljite</button>
         </div>
        </form>
    </section>

    <a href="#home"> <div class="celaforma"><div></div></div></a>
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="contact.js"></script>
    <script src="main.js"></script> 
</body>
</html>
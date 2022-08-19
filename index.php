<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css" media="screen" type="text/css" />
</head>

<div class="titre">
    <h1>Bienvenue sur la plateforme Sunu-Trésorerie</h1>
    <h2>Veuillez vous connecter </h2>
</div>

<form action="verification.php" method="POST">

    <ul class="items"></ul>
    <fieldset class="username enable">
        <div class="icon left"><i class="user"></i></div>
        <input type="text" name="username" placeholder="Username" />
        <div class="icon right button"><i class="arrow"></i></div>
    </fieldset>
    <fieldset class="email">
        <div class="icon left"><i class="letter"></i></div>
        <input type="mail" name="email" placeholder="Email" />
        <div class="icon right button"><i class="arrow"></i></div>
    </fieldset>
    <fieldset class="password">
        <div class="icon left"><i class="lock"></i></div>
        <input type="password" name="password" placeholder="Password" />
        <div class="icon right button"><i class="arrow"></i></div>
    </fieldset>
    <fieldset class="thanks">
        <div class="icon left"><i class="unlock"></i></div>
        <input type="submit" id='submit' value='Connexion'>
        <div class="icon right"><i class="unlock"></i></div>
    </fieldset>
</form>

<script src="/index.js"></script>

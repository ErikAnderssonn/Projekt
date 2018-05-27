<meta charset="utf-8">
   <link href="loginCSS.css" rel="stylesheet">
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="loginDB.php" method="post">
      <input type="text" name="email" placeholder="Email"/>
      <input type="password" name="lösenord" placeholder="Lösenord"/>
      <button>Logga in</button>
      <p class="message">Inte medlem? <a href="CreateProfile.php">Skapa konto</a></p>
    </form>
  </div>
</div>

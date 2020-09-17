

<!DOCTYPE html>

<html lang="it" class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Daniele Persico Fotografia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Sito Web di Daniele Persico Fotografie" />
<meta name="keywords" content="photography, fotografie, eventi, events, paesaggi, landscape, wedding, matrimoni, cerimonie" />
<meta name="author" content="olivieri alex" />
<link rel="stylesheet" href="css/login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="js/login.js"></script>
<!-- Bootstrap  -->
<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <?php require("assets/connect.php") ?>
  <div>
  <div class="container text-center">
    <img src="../images/logo.png" />
  </div>
  <div class='box'>
    <div class='box-form'>
      <div class='box-login-tab'></div>
      <div class='box-login-title'>
        <a href="../index.html"><div class='i i-login'></div><h2>LOGIN</h2></a>
      </div>
      <div class='box-login'>
        <form action="login.php" method="post" class='fieldset-body' id='login_form'>
          <button onclick="openLoginInfo();" class='b b-form i i-more' title='Mais Informações'></button>
          	<p class='field'>
            <label for='user'>E-MAIL</label>
            <input type='text' id='user' name='user' title='Username' />
            <span id='valida' class='i i-warning'></span>
          </p>
        	  <p class='field'>
            <label for='pass'>PASSWORD</label>
            <input type='password' id='pass' name='pass' title='Password' />
            <span id='valida' class='i i-close'></span>
          </p>
          	<input type='submit' id='do_login' value='ACCEDI' title='Get Started' />
        </form>
      </div>
    </div>
    <div class='box-info'>
  		<p><button onclick="closeLoginInfo();" class='b b-info i i-left' title='Back to Sign In'></button><h3>Bisogno di aiuto?</h3></p>
  		<div class='line-wh'></div>
      <button onclick="" class='b-support' title='Forgot Password?'> Password persa?</button>
      <button onclick="" class='b-support' title='Contact Support'> Contattami</button>
    </div>
  </div>
  </body>
</html>

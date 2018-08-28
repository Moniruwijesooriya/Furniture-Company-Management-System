<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/style.css">
 
</head>
<body>
<p></p>
<div class="login-page">
  <div class="form">
    <form action="checklog.php" method="POST" class="login-form">
      <input type="text" name="user_name" placeholder="Username"/>
      <input type="password" name="password" placeholder="Password"/>
      <select name="user_type">
      	<option value="Administrator" >Administrator</option>
      	<option value="Manager">Manager</option>
      </select>
      <button type="submit">login</button>
    </form>
  </div>
</div>


  
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Mama Konnect</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body style="background-color: var(--cultured-1);">

  <header class="header">
    <div class="container">
      <h1 class="logo" style="color: var(--dark-purple);">Mama Konnect</h1>
    </div>
  </header>

  <main style="padding: var(--section-padding); text-align: center;">
    <section style="background: var(--white); padding: 30px; border-radius: var(--radius-10); box-shadow: var(--shadow-1); max-width: 400px; margin: auto;">
      <h2 style="margin-bottom: 20px; color: var(--eerie-black);">Login</h2>
      <form id="loginForm" style="display: flex; flex-direction: column;">
        <label for="emailOrName" style="margin-bottom: 5px; color: var(--davys-gray);">Email or Full Name:</label>
        <input type="text" id="emailOrName" name="emailOrName" required style="padding: 10px; margin-bottom: 15px; border: 1px solid var(--gainsboro); border-radius: var(--radius-6);">

        <label for="password" style="margin-bottom: 5px; color: var(--davys-gray);">Password:</label>
        <input type="password" id="password" name="password" required style="padding: 10px; margin-bottom: 15px; border: 1px solid var(--gainsboro); border-radius: var(--radius-6);">

        <button type="submit" style="background-color: var(--pumpkin); color: var(--white); padding: 10px; border: none; border-radius: var(--radius-6); cursor: pointer; transition: background-color 0.3s;">
          Login
        </button>
      </form>
      <p style="margin-top: 15px; color: var(--davys-gray);">Don't have an account? <a href="signup.php" style="color: var(--pumpkin); text-decoration: none;">Sign up here</a></p>
    </section>
  </main>

  <footer style="background-color: var(--cultured-3); color: var(--eerie-black); text-align: center; padding: 10px; position: relative; bottom: 0; width: 100%;">
    <p>&copy; 2023 Mama Konnect. All rights reserved.</p>
  </footer>

</body>

</html>

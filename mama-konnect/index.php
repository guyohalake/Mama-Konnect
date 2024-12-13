<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mama Konnect - Connect with Trusted Helpers</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="styles.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@700;900&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">Mama Konnect</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list container">

          <li>
            <a href="#home" class="navbar-link active" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#features" class="navbar-link" data-nav-link>Features</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>About</a>
          </li>

          <li>
            <a href="#app" class="navbar-link" data-nav-link>App</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>Contact</a>
          </li>

          <li>
            <a href="#" class="btn btn-primary">Get Started</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle">Connecting You with Trusted Helpers</p>

            <h1 class="h1 hero-title">Make Life Easier with Mama Konnect</h1>

            <p class="section-text">
              Discover reliable domestic helpers for all your household needs. Join us today and experience the convenience!
            </p>

            <ul class="btn-list">

             

              <li>
                <a href="#" class="btn-item-link" aria-label="Download from play store">
                  <img src="./assets/play-store.png" width="185" height="69" alt="play store" class="img">
                </a>
              </li>

            </ul>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="769" height="804" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>

      <!-- 
        - #FEATURES
      -->

      <section class="section features" id="features" aria-label="features">
        <div class="container">

          <p class="section-subtitle">Our App Features</p>

          <h2 class="h2 section-title">Awesome Features</h2>

          <ul class="features-list">

            <li class="features-item">
              <div class="features-card">
                <div class="card-icon">
                  <ion-icon name="create-outline" aria-hidden="true"></ion-icon>
                </div>
                <h3 class="h3 card-title">Easy to Edit</h3>
                <p class="card-text">
                  Customize your profile and preferences easily.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="features-card">
                <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
                </div>
                <h3 class="h3 card-title">Fully Secure</h3>
                <p class="card-text">
                  Your data is safe with us, ensuring privacy and security.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="features-card">
                <div class="card-icon">
                  <ion-icon name="settings-outline" aria-hidden="true"></ion-icon>
                </div>
                <h3 class="h3 card-title">Manage Users</h3>
                <p class="card-text">
                  Easily manage your helpers and their schedules.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="features-card">
                <div class="card-icon">
                  <ion-icon name="cube-outline" aria-hidden="true"></ion-icon>
                </div>
                <h3 class="h3 card-title">Free Trial</h3>
                <p class="card-text">
                  Try our services for free before committing.
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/logo1.png" width="1262" height="1357" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">Our Acquaintance</p>

            <h2 class="h2 section-title">We Are Trusted By Thousands Of People</h2>

            <p class="section-text">
              Mama Konnect connects you with reliable domestic helpers. Our mission is to make your life easier by providing
              trusted assistance.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="item-icon">
                  <ion-icon name="folder" aria-hidden="true"></ion-icon>
                </div>
                <div>
                  <h3 class="h3 item-title">Quality Service</h3>
                  <p class="item-text">
                    We ensure high-quality service from our helpers.
                  </p>
                </div>
              </li>

              <li class="about-item">
                <div class="item-icon">
                  <ion-icon name="pie-chart" aria-hidden="true"></ion-icon>
                </div>
                <div>
                  <h3 class="h3 item-title">Easy to Manage</h3>
                  <p class="item-text">
                    Manage your bookings and preferences effortlessly.
                  </p>
                </div>
              </li>

            </ul>

            <a href="#" class="btn btn-secondary">Discover More</a>

          </div>

        </div>
      </section>

      <!-- 
        - #APP
      -->

      <section class="section app" aria-label="app" id="app">
        <div class="container">

          <figure class="app-banner">
            <img src="./assets/images/app.png" width="449" height="608" loading="lazy" alt="app banner" class="w-100">
          </figure>

          <p class="section-subtitle">Download Our App</p>

          <h2 class="h2 section-title">Get The App For Free And Start Now</h2>

          <p class="section-text">
            Experience the convenience of Mama Konnect on your mobile device.
          </p>

          <ul class="btn-list">

            <li>
              <a href="#" class="btn-item-link" aria-label="Download from app store">
                <img src="./assets/images/app-store.png" width="185" height="69" alt="app store" class="img">
              </a>
            </li>

            <li>
              <a href="#" class="btn-item-link" aria-label="Download from play store">
                <img src="./assets/images/play-store.png" width="185" height="69" alt="play store" class="img">
              </a>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle">Recent Blogs</p>

          <h2 class="h2 section-title">Our Tips And Latest News</h2>

          <ul class="blog-list">
            <li>
              <div class="blog-card">
                <figure class="card-banner img-holder" style="--width: 768; --height: 558;">
                  <img src="./assets/images/blog-1.jpg" width="768" height="558" loading="lazy"
                    alt="Blog Title" class="img-cover">
                </figure>
                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">How to Choose the Right Helper</a>
                  </h3>
                  <a href="#" class="btn btn-outline">Read More</a>
                </div>
              </div>
            </li>
            <!-- Add more blog items as needed -->
          </ul>

        </div>
      </section>

      <!-- Sign Up Modal -->
      <div id="signupModal" class="modal">
        <div class="modal-content">
          <span class="close-button" aria-label="close modal">&times;</span>
          <h2>Sign Up</h2>
          <form id="signupForm" action="signup_process.php" method="POST" enctype="multipart/form-data">
            <label for="userType">Choose User Type:</label>
            <select id="userType" name="userType" required>
              <option value="" disabled selected>Select User Type</option>
              <option value="student">Student</option>
              <option value="helper">Helper (Mama Fua)</option>
            </select>

            <div id="studentFields" class="user-fields" style="display: none;">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required>
              <label for="confirmPassword">Confirm Password:</label>
              <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>

            <div id="helperFields" class="user-fields" style="display: none;">
              <label for="fullName">Full Name (as per National ID)*:</label>
              <input type="text" id="fullName" name="fullName" required>
              <label for="nationalId">National ID Number*:</label>
              <input type="text" id="nationalId" name="nationalId" required>
              <label for="gender">Gender*:</label>
              <select id="gender" name="gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <label for="safaricomNumber">Safaricom Number (for payment)*:</label>
              <input type="text" id="safaricomNumber" name="safaricomNumber" required>
              <label for="dob">Date of Birth*:</label>
              <input type="date" id="dob" name="dob" required>
              <label for="uploadIdFront">Upload ID (front)*:</label>
              <input type="file" id="uploadIdFront" name="uploadIdFront" required>
              <label for="uploadIdBack">Upload ID (back)*:</label>
              <input type="file" id="uploadIdBack" name="uploadIdBack" required>
              <label for="backgroundCheck">Do you consent to performance of a background check?</label>
              <select id="backgroundCheck" name="backgroundCheck" required>
                <option value="" disabled selected>Select Option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
              <label for="trustedKeyHolder">Would you like to register as a Trusted Key Holder?</label>
              <select id="trustedKeyHolder" name="trustedKeyHolder">
                <option value="" disabled selected>Select Option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
              <label>
                <input type="checkbox" name="terms" required>
                I have read and accepted the Terms & Conditions
              </label>
              <label>
                <input type="checkbox" name="codeOfConduct" required>
                I have read and accepted the Code of Conduct
              </label>
            </div>

            <button type="submit">Submit</button>
          </form>
        </div>
      </div>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">
          <a href="#" class="logo">Mama Konnect</a>
          <p class="section-text">
            Your trusted platform for connecting with domestic helpers.
          </p>
          <ul class="social-list">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-google"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
          </ul>
        </div>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Company</p>
          </li>
          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>
          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>
          <li>
            <a href="#" class="footer-link">Core Services</a>
          </li>
        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2023 All Rights Reserved by <a href="#" class="copyright-link">Mama Konnect</a>.
        </p>
      </div>
    </div>

  </footer>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Add JavaScript for modal functionality -->
  <script>
    const modal = document.getElementById("signupModal");
    const btn = document.querySelector(".btn.btn-primary");
    const closeButton = document.querySelector(".close-button");
    const userTypeSelect = document.getElementById("userType");
    const studentFields = document.getElementById("studentFields");
    const helperFields = document.getElementById("helperFields");

    btn.onclick = function() {
      modal.style.display = "block";
    }

    closeButton.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    userTypeSelect.onchange = function() {
      if (this.value === "student") {
        studentFields.style.display = "block";
        helperFields.style.display = "none";
      } else if (this.value === "helper") {
        studentFields.style.display = "none";
        helperFields.style.display = "block";
      } else {
        studentFields.style.display = "none";
        helperFields.style.display = "none";
      }
    }
  </script>

  <!-- Add some CSS for the modal in your styles.css -->
  <style>
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0, 0, 0, 0.7); /* Darker background for better contrast */
    }

    .modal-content {
      background-color: #fff; /* White background for the modal */
      margin: 10% auto; 
      padding: 30px;
      border-radius: 8px; /* Rounded corners */
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
      width: 90%; 
      max-width: 500px; /* Max width for better responsiveness */
    }

    h2 {
      font-family: 'Poppins', sans-serif; /* Use the same font as the homepage */
      color: #333; /* Dark text color */
      margin-bottom: 20px; /* Space below the title */
      text-align: center; /* Center the title */
    }

    label {
      font-family: 'Roboto', sans-serif; /* Consistent font */
      color: #555; /* Slightly lighter text color */
      display: block; /* Block display for labels */
      margin-bottom: 5px; /* Space below labels */
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"],
    select,
    input[type="file"] {
      width: 100%; /* Full width inputs */
      padding: 10px; /* Padding for inputs */
      margin-bottom: 15px; /* Space below inputs */
      border: 1px solid #ccc; /* Light border */
      border-radius: 4px; /* Rounded corners */
      font-size: 16px; /* Font size */
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus,
    input[type="date"]:focus,
    select:focus {
      border-color: #007bff; /* Change border color on focus */
      outline: none; /* Remove default outline */
    }

    button[type="submit"] {
      background-color: #007bff; /* Primary button color */
      color: white; /* White text */
      padding: 10px 15px; /* Padding for button */
      border: none; /* No border */
      border-radius: 4px; /* Rounded corners */
      cursor: pointer; /* Pointer cursor on hover */
      font-size: 16px; /* Font size */
      transition: background-color 0.3s; /* Smooth transition */
      width: 100%; /* Full width button */
    }

    button[type="submit"]:hover {
      background-color: #0056b3; /* Darker shade on hover */
    }

    .close-button {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close-button:hover,
    .close-button:focus {
      color: #333; /* Darker color on hover */
      text-decoration: none;
      cursor: pointer;
    }

    .user-fields {
      display: none; /* Hide user fields by default */
    }

    .user-fields label {
      margin-top: 10px; /* Space above labels in user fields */
    }

    input[type="file"] {
      border: none; /* Remove border for file inputs */
      padding: 5px; /* Padding for file inputs */
    }

    input[type="checkbox"] {
      margin-right: 5px; /* Space between checkbox and label */
    }
  </style>

</body>

</html>
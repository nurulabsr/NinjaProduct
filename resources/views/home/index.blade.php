<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Link to Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    /* General styling for the page */
    html, body {
      margin: 0;
      height: 100%;
    }
    
    /* Global styling for all elements using the Raleway font */
    * {
      font-family: "Raleway";
      box-sizing: border-box;
    }
    
    /* Styling for the top navigation bar */
    .top-nav {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      background-color: #87CEEB; /* Light Blue Background */
      color: #FFF;
      height: 70px;
      padding: 1em;
    }

    /* Styling for the menu items */
    .menu {
      display: flex;
      flex-direction: row;
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    /* Styling for each menu item */
    .menu > li {
      margin: 0 2rem;
      overflow: hidden;
    }

    /* Styling for the menu button container */
    .menu-button-container {
      display: none;
      height: 100%;
      width: 30px;
      cursor: pointer;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    /* Styling for the menu toggle checkbox */
    #menu-toggle {
      display: none;
    }

    /* Styling for the menu button and its animations */
    .menu-button,
    .menu-button::before,
    .menu-button::after {
      display: block;
      background-color: #fff;
      position: absolute;
      height: 4px;
      width: 40px;
      transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1);
      border-radius: 2px;
    }

    /* Styling for the menu button icon before */
    .menu-button::before {
      content: '';
      margin-top: -8px;
    }

    /* Styling for the menu button icon after */
    .menu-button::after {
      content: '';
      margin-top: 8px;
    }

    /* Styling for the menu button animation when toggled */
    #menu-toggle:checked + .menu-button-container .menu-button::before {
      margin-top: 0px;
      transform: rotate(405deg);
    }

    /* Styling for the menu button background when toggled */
    #menu-toggle:checked + .menu-button-container .menu-button {
      background: rgba(255, 255, 255, 0);
    }

    /* Styling for the menu button animation when toggled */
    #menu-toggle:checked + .menu-button-container .menu-button::after {
      margin-top: 0px;
      transform: rotate(-405deg);
    }

    /* Media query for responsive design when screen width is 700px or less */
    @media (max-width: 700px) {
      /* Styling for the menu button container when displayed */
      .menu-button-container {
        display: flex;
      }

      /* Styling for the menu items in the collapsed state */
      .menu {
        position: absolute;
        top: 0;
        margin-top: 51px;
        left: 0;
        flex-direction: column;
        width: 100%;
        justify-content: center;
      }
    
      /* Styling for menu items transition when collapsed */
      #menu-toggle ~ .menu li {
        height: 0;
        margin: 0;
        padding: 0;
        border: 0;
        transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
      }
       
      /* Styling for menu items when expanded */
      #menu-toggle:checked ~ .menu li {
        height: 2.8em;
        padding: 0em 0em 0em 1.5em;
        transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
      }

      /* Additional styling for menu items in collapsed state */
      .menu > li {
        margin: 0;
        display: flex;
        justify-content: left;
        padding-left: 50px;
        width: 100%;
        color: #333;
        background-color: #f2f2f2;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation bar -->
  <nav class="top-nav">
    <div>
      Ninja
    </div>
    
    <!-- Menu toggle checkbox -->
    <input id="menu-toggle" type="checkbox" />
    
    <!-- Menu button container with label -->
    <label class='menu-button-container' for="menu-toggle">
      <div class='menu-button'></div>
    </label>
    
    <!-- Menu items list -->
    <ul class="menu">
        <li>
            <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li>
            <a class="nav-link" href="#">Features</a>
        </li>
        <li> 
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </nav>

  {{-- default section--}}

  @yield('ninja_default_section')
      
  {{-- end default section --}}

  <!-- Bootstrap JS script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>CW2 Laravel App</title>
  
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        background-color: #D9D9D9;
        color: #333333;
        font-family: Arial, sans-serif;
      }

      nav {
        background-color: #333333;

        box-shadow: 1px 6px 7px -1px rgba(0,0,0,0.36);
        -webkit-box-shadow: 1px 6px 7px -1px rgba(0,0,0,0.36);
        -moz-box-shadow: 1px 6px 7px -1px rgba(0,0,0,0.36);
        
        width: 100%;
        text-align: center;
      }

      nav a {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        text-transform: uppercase;
        padding: 15px;
        display: inline-block;
      }

      main {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
      }

      h2 {
        text-align: center;
      }

      .main-text {
        margin-bottom: 75px;
        margin-top: 25px;
        width: 950px;
      }

      .landing-btn {
        border: none;
        color: #fff;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        cursor: pointer; 
    
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);

        text-transform: uppercase;
        width: 400px; 
        padding: 50px 20px 50px 20px;
        margin: 45px;
        background-color: #3AC63A; 
      }

      .nav-btn {
        border-right: solid 2px;
        border-left: solid 2px;
        color: #418DFF;
        text-align: center;
        display: inline-block;
        cursor: pointer; 
      }

      .nav-btn:hover {
        border: none;
        background-color: #418DFF;
        color: #fff;
      }

    </style>
  </head>
  <body>
    <nav>
        <a href="{{url('/')}}">Home</a>
        <a href="#" class="nav-btn nav-btn:hover">Register</a>
        <a href="#" class="nav-btn nav-btn:hover">Login</a>
    </nav>
    
    <main>
      <div class="main-text">
        <h1>Hello! Welcome to my Laravel Application for Coursework 2.</h1>
        <br>
        <p>
          Please click the button shown below to view all for the records. You can also create an account or log in to an already existing account. 
          If you're logged in to an Admin account, you will authorized to edit or delete any record in the database, or add an entirely new record.
        </p>
      </div>

      <div class=main-button>
        <a href="{{('/crud/items')}}" class="landing-btn btn-plant">View All Plants & Fish</a>
      </div>
    </main>
  </body>
</html>
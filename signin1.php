
<? php
echo " hello";



?>
<!DOCTYPE html>
<html>
    <head>
      <title>Signin</title>
      <link rel="stylesheet" href="style.css">
        <style>
        .login-container {
          display: flex;
          flex-direction: column;
          align-items: center;
          margin-top: 100px;
        }
        
        .logo {
          width: 200px;
          margin-bottom: 50px;
        }
        
        .input-field {
          width: 300px;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
        }
        
        .login-button {
          width: 300px;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        .login-button:hover {
          background-color: #45a049;
        }
        .register-container {
          margin-top: 20px;
        }
        .signin {
          color: blue;
          text-decoration: none;
        } 
        body {
          background-image: url("ggg.png");
          background-size: 100%;
          width: 70%;
          min-height:cover ;
          max-height: auto;
        }
      body{
          color: aliceblue;
        }

        </style>
       <body>
           <center>
            <div class="box">
              <img src="ss.png"  height="50px" width="50px" >
         <form action="signin.php" method="post"><br>
         <label for="email">E-mail:</label>
          <input type="email" id="email" name ="email"><br><br>
           <label for="userid">User id:</label>
           <input type="text" id="userid" name="userid"><br><br>
           <label for="username">Username:</label>
           <input type="text" id="username" name="username"><br><br>
           <label for="passw">Password:</label>
           <input type="password" id="passw" name="passw"><br><br>
          <input type="submit" value="submit" class="for">
           <!-- <button>
                <h3> <a href="index.html">Sign in</a></h3>
               </button> -->
         </form>
         </div>
         </center>
       </html>
   

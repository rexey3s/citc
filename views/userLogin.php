<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete Address Form</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <?php 
    
      $this->loadstyle("user");
    ?>


  </head>

  <body onload="initialize()">
    <div id="main-container">
      <?php 
        $this->show("header");
      ?>
    <div id="user-forms-container">
        <h1 style="color:#12ada1;text-align:center;">Login form</h1>
        <div id="login-form">
             <table>
          <form action="" method="post">
             
             <tr>
              <td> Email: </td>
              <td> <input type="email" name="email"></td>
              </tr>
             <tr>
              <td> Password: </td>
              <td> <input type="password" name="pass"></td>
              </tr>
              <tr>
                  <td colspan="2"><input type="submit" name="login" value="login"/></td>
              </tr>
          </form>
        </table>      
        </div>
    </div>
  </div>
  </body>
</html>
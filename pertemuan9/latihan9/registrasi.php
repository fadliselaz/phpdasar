<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>registrasi</title>
    <style media="screen">
    .regform {
      width: 300px;
      padding: 30px;
      margin: 50px auto;
      border-style: dashed;
      border-color: black;
      border-width: 1px;
      border-radius: 10px;

    }
    p {
      text-align: center;
      margin: auto;
      font-size: 20px;
    }
    button {
      margin : auto;
      width: 100%;
      border-style: solid;
      transition: 0.5s;

    }
    #submit:hover {
      background-color: yellow;
      height: 30px;
    }
    input {
      width: 100%;
      border-style: solid;

    }
    </style>
  </head>
  <body>
    <form class="regform" action="bebas.php" method="post">

      <p>silakan masukan data data anda..</p>
      <br>

      <label for="regname">Masukan username: </label>
      <input type="text" name="regname" value="" id="regname">

      <label for="regpass">Masukan password: </label>
      <input type="password" name="regpass" value="" id="regpass">

      <label for="regemail">email </label>
      <input type="text" name="regemail" value="" id="regemail">

      <label for="regtelp">telp </label>
      <input type="text" name="regtelp" value="" id="regtelp">

      <label for="regtelpl">alamat </label>
      <input type="text" name="regalamat" value="" id="regalamat">

      <input type="submit" name="kirim" value="daftar" id="submit">
    </form>
  </body>
</html>

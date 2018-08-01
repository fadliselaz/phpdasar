
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>test login</title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <style media="screen">
       .form-group {
         width: 300px;
         padding: 20px;
         margin: 50px auto;
         border-style: dashed;
         border-color: black;
         border-width: 1px;
         border-radius: 10px;

       }
       p {
         text-align: center;
         margin: auto;
         font-size: 10px;
       }
       button {
         margin : auto;
         width: 100%;
         border-style: solid;
         transition: 0.5s;

       }
       button:hover {
         background-color: yellow;
         font-stretch: expanded;
         height: 30px;
       }
       input {
         margin : auto;
         width: 100%;
         border-style: solid;

       }
     </style>
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>
   <body>
     <form class="form-group" action="#" method="post">
       <label for="username">Masukan username: </label>
       <input type="text" name="ipname" value="" >

       <label for="username">Masukan password: </label>
       <input type="text" name="ippass" value="">

       <button type="submit" name="kirim" value="kirim" >login</button>
       <br /><br>
       <p>silakan masukan user dan password anda</p>
       <p>untuk registrasi silakan klik <a href="registrasi.php">link</a> berikut</p>
     </form>












     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </body>
 </html>

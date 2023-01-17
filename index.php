

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <!--<link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="style.css">
    <style>


       *{   
            color : #fff;
            
        }
        
        body{
            position: relative;
        }

        .user_login{
            padding: 10px;
            font-size: 16px;
        }
        
        hi{
            position:absolute;
            display: flex;
            align-items: center;
            width: 100%;
            height: 150%;
        }
       
       input{
        background-color:rgb(165,212,117);
       }


    </style>
    <title>ログイン</title>
</head>

<body>

<div class="title">
 <h1>My treasure</h1>
 </div>

 <!--既存ユーザーログインフォーム-->

   <form name="form1" action="login_act.php" method="post">
       <div class="user_login">
           <fieldset>
           <legend>既存ユーザーはこちらからログイン</legend>
                <label>ID:<input type="text" name="lid" /></label><br>
                <label>PW:<input type="password" name="lpw" /></label><br>
        <input type="submit" value="ログイン" />
        </fieldset>
    </div>
    </form>
  
<!--新規登録フォーム-->

    <form method="post" action="user_act.php">
        <div class="register">
            <fieldset>
                <legend>新規ユーザーはこちらから登録</legend>
                <label>名前<input type="name" name="name"></label><br>
                <label>ログインID<input type="text" name="lid"></label><br>
                <label>パスワード<input type="text" name="lpw"></label><br>                
                <input type="submit" value="登録">
            </fieldset>
        </div>
    </form>


</body>

</html>

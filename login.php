<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0 auto;
            background-image: url("https://images.unsplash.com/photo-1610641987870-d6d8998274a4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }


        .login_box{
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0 auto;
        }
        
        h3{
            text-align: center; 
            display: inline-block;
            font-size: 1.6rem;
            background-color:#b8a8a8d4;
            width: 75%;
            padding: 15px;
            border-radius: 20px;
        }



        section>p{
            text-align: center;
            color: red;
            display: inline-block;
            background-color:rgb(174 252 252 / 98%);
            border-radius: 10px;
            width: 25vw;
        }

        table{
            background-color: white;
            width: 30vw;
            height: 15vh;
            color: black;
            border-radius: 30px;
        }

        tr>td{
            text-align: center;
            margin: 0;
            padding: 0;
        }

        tr{
            height: 10px;

        }
    </style>
</head>
<body>
        <section class="login_box">
            <h3>後台管理系統</h3>
            <p>如非本網站管理者請離開本頁面，謝謝！</p><br>
            <form action="api/login.php" method="post">
                <table>
                    <tr>
                        <td>管理者帳號：<input type="text" name="acc"></td>
                    </tr>
                    <tr>
                        <td>管理者密碼：<input type="password" name="pwd"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="登入">  <input type="reset" value="清空"></td>
                    </tr>

                </table>
            </form>


        </section>
</body>
</html>
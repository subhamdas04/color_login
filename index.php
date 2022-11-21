<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Color</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: rgb(121, 243, 188);
            transition: 1s;
        }
        .login{
            position: relative;
            padding: 50px;
            background: white;
            width: 400px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            gap: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }
        .login h2{
            font-weight: 500;
            border-left: 15px solid #1dd1a1;
            line-height: 1em;
            padding-left: 10px;
            transition: 0.5s;
            color: blue;
        }
        .login .inputBox{
            position: relative;
        }
        .login .inputBox input{
            position: relative;
            width: 100%;
            padding: 10px 15px;
            outline: none;
            border: 2px solid red;
            font-size: 1em;
            color: #3974d4;
            cursor: pointer;
        }
        .login .inputBox input #btn{
            border: 5px solid black;
            background: rgb(192, 255, 197);
            color: black;
            transition: 0.5s;
            font-size: 1.1em;
            font-weight: 500;
            cursor: pointer;
        }
        .login .group{
            display: flex;
            justify-content: space-between;
        }
        .login .group a{
            color: #333;
            text-decoration: none;
        }
        .login .group a:nth-child(2){
            font-weight: 500;
            text-decoration: underline;
        }
        .colors{
            position: absolute;
            left: 0;
            top: 280px;
            padding: 10px;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .colors span{
            position: relative;
            width: 20px;
            height: 20px;
            background: var(--clr);
            margin: 10px;
            border-radius: 50%;
            cursor: pointer;
        }
        .colors span .active{
            border: 2px solid yellow;
            scale: 1.5;
            transition: 1s;
        }
    </style>

    <script type="text/javascript">
        let btn = document.getElementById('btn');
        let txt = document.getElementById('txt');
        function changeColor(color){
            document.body.style.background = color;
            btn.style.background = color;
            txt.style.background = color;

            document.querySelectorAll('span').forEach(function(item){
                item.classList.remove('active');
            })
            event.target.classList.add('active');
        }
    </script>

</head>
<body>
    <center>
        <div class="login">
            <h2 id="txt">Login</h2>
            <div class="inputBox">
                <input type="text" placeholder="Username">
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Password">
            </div>
            <div class="inputBox">
                <input type="submit" value="Login" id="btn">
            </div>
            <div class="group">
                <a href="#">Forget Password</a>
                <a href="#">Signup</a>
            </div>
        </div>
        <div class="colors">
            <span class="active" onclick="changeColor('red')" style="--clr:red;"></span>
            <span onclick="changeColor('green')" style="--clr:green;"></span>
            <span onclick="changeColor('blue')" style="--clr:blue;"></span>
            <span onclick="changeColor('orange')" style="--clr:orange;"></span>
            <span onclick="changeColor('violet')" style="--clr:violet;"></span>
            <span onclick="changeColor('grey')" style="--clr:grey;"></span>
        </div>
    </center>
</body>
</html>
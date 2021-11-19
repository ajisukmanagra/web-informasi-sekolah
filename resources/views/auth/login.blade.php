<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import  url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
        * {
            box-sizing: border-box;
            font-family: 'Poppins';
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins';
        }
        .box {
            display: flex;
            background-color: white;
            align-items: center;
            justify-content: center;
            /* background-color: #10a5f5;
            background-image: linear-gradient(19deg, #10a5f5 0%, #0099ff 100%); */
            background: url('/image/logo/smp.jpg'), #2f8eed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
        .login-form {
            min-width: 250px;
            max-width: 400px;
            border-radius: 24px;
            padding: 15px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .login-form h1 {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
        .login-form input[type = "text"] {
            margin-top: 30px;
        }
        .login-form input[type = "password"] {
            margin-top: 10px;
        }
        input {
        outline: none;
        }
        
        .login-form button {
            background-color:  #E0E0E0;
            background-image: linear-gradient(19deg, #0c84d3 0%, #0666a7 100%);
            width: 100%;
            color: white;
            border: none;
            margin-top: 20px;
            margin-bottom: 20px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Poppins';
            font-size: 12px;
            font-weight: bold;
            border-radius: 24px;
            transition: 0.25s;
        }
        .login-form button:hover {
            opacity: 0.8;
        }
        .login-form input[type = "text"]:focus, .login-form input[type = "password"]:focus {
            border: 2px #21D4FD solid;
        }
        .login-form input[type = "text"], .login-form input[type = "password"] {
            width: 100%;
            border: none;
            border-radius: 24px;
            font-size: 12px;
            font-family: 'Poppins', sans-seriff;
            background-color: gainsboro;
            padding: 10px;
        } 
        @media  only screen and (max-width: 600px) {
            .login-form {
                width: 350px;
                border-radius: 24px;
                padding: 15px;
                background-color: white;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .login-form button {
                background-color:  #E0E0E0;
                background-image: linear-gradient(19deg, #21D4FD 0%, #0099ff 100%);
                width: 100%;
                color: white;
                border: none;
                margin-top: 35px;
                margin-top: 20px;
                cursor: pointer;
                padding: 10px;
                font-family: 'Poppins';
                font-size: 12px;
                font-weight: bold;
                border-radius: 24px;
                transition: 0.25s;
            }
            .login-form button:hover {
                opacity: 0.8;
            }
            .login-form input[type = "text"]:focus, .login-form input[type = "password"]:focus {
                border: 2px #0e98b8 solid;
            }
            .login-form input[type = "text"], .login-form input[type = "password"] {
                width: 100%;
                border: none;
                border-radius: 24px;
                font-size: 12px;
                font-family: 'Poppins', sans-seriff;
                background-color: gainsboro;
                padding: 10px;
            } 
            .font-login{
                font-size: 12px;
                margin-top: 0px; 
            }
        }
    </style>
</head>
<body>
    
    <div class="box">
		<form class="login-form" action="{{route('login')}}" method="POST">
            <center>
                <img src="{{asset('image/logo/logo.png')}}" alt="" class="img img-thumbnail border-0" width="170px">
            </center>
			<h1 class="font-login"> Login</h1>
            <hr>
                @csrf           
                <input type="text" name="email" placeholder="email" >
                @error('username')
                    <div class="invalid-feedback" style="display: block; color: red;">
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <div class="invalid-feedback" style="display: block; color: red;">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit">Login</button>
                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="/">Home</a></span>
		</form>
		
	</div>

</body>
</html>
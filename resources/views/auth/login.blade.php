<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #FDFCFB;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #AEE1F9, #FFDAC1);
        }

        .login-container {
            background-color: #FFFFFF;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 400px;
        }

        .login-container h2 {
            color: #5A4E4D;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .login-container label {
            display: block;
            text-align: left;
            color: #5A4E4D;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #CCC;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #FFB6C1;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #FF91A1;
        }

        .error-messages {
            background-color: #FF867C;
            color: white;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .error-messages ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .login-logo {
            margin-bottom: 20px;
        }

        .login-logo img {
            max-width: 100px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-logo">
            <img src="images/LoginLogo.png" alt="Posyandu Ceria Logo">
        </div>
        <h2>Login ke Posyandu Ceria</h2>

        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

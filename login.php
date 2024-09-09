<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .login-container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container input[type="text"], .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;

        }

        .login-container input[type="submit"]:hover {
            background-color: #4CAF50;
        }

        .error-message {
            color: red;
            display: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <form method="POST" id="loginForm">
            <input type="text" name="username" id="username" placeholder="username" required>
            <input type="password" name="password" id="password" placeholder="password" required>
            <input type="submit" value="login">
        </form>
        <p class="error-message" id="errorMessage"></p>
    </div>

    <!-- JQuery Library -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script>
        $(document).ready(function() {
            $('#loginForm').submit(function(event) {
                event.preventDefault();
                $.ajax({
                url: 'login_process.php',
                type: 'POST',
                data: $(this).serialize(),
                success:function(response){
                    if (response === 'success'){
                        window.location.href = 'index.php';
                    }else {
                        $('#errorMessage').text('Username or password wrong.').fadeIn();
                    }
                }
                });
            });
        });
     </script>
</body>
</html>
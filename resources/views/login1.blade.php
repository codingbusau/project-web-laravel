<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Login Form - Rizki Purnomo Aji Blog</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <main class="container">
            <h2>Login</h2>
            <form action="">
                <div class="input-field">
                    <input type="text" name="username" id="username"
                        placeholder="Enter Your Username">
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password"
                        placeholder="Enter Your Password">
                    <div class="underline"></div>
                </div>
    
                <input type="submit" value="Continue">
            </form>
    
            <div class="footer">
                <span>Or Connect With Social Media</span>
                <div class="social-fields">
                    <div class="social-field twitter">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                            Sign in with Twitter
                        </a>
                    </div>
                    <div class="social-field facebook">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                            Sign in with Facebook
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    </body>
</html>
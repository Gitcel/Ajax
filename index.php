<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>Ancel-AJAX-Mini project</title>

</head>
<body>

    <div class="solid"></div>

    <div class="title">
        <h2 id="title-id">TITLE GOES HERE</h2>
    </div>

    <div class="container-main">

        <div class="container-left"></div>

        <div class="container-right-root">
            <div class="container-right">

                <h2 id="subtitle">SUBTITLE GOES HERE</h2>
                <p id="below-subtitle">lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <div class="form">
                    <form action="" method="post"></form>

                        <div class="user-input">
                            <input type="text" name="name" id="name-id" placeholder="First name" required>
                        </div>
                        <div class="user-input">
                            <input type="text" name="surname" id="surname-id" placeholder="Last name" required>
                        </div>
                        <div class="user-input">
                            <input type="email" name="email" id="email-id" placeholder="Email address" required>
                        </div>

                        <div class="button-sign-up">
                            <button type="submit" name="sign-up" id="sign-up-id">Sign up</button>
                        </div>
                        <p id="terms-and-conditions"><a href="#">Terms and conditions</a></p>

                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="ajax.js"></script>
    
</body>
</html>
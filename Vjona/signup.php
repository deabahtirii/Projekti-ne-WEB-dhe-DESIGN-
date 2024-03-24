<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signup {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signup .checkbox {
            font-weight: 400;
        }

        .form-signup .form-floating:focus-within {
            z-index: 2;
        }

        .form-signup input[type=text],
        .form-signup input[type=email],
        .form-signup input[type=password] {
            margin-bottom: 10px;
        }

        .form-floating {
            margin: 10px;
        }

        .btn {
            margin-bottom: 20px;
        }

    </style>

</head>

<body class="text-center">
    <main class="form-signup">
        <form action="SignupLogic.php" method="post">
            <img class="mb-4" src="images/cupcake.png" alt="" width="57" height="50">
            <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email">
                <label for="floatingEmail">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password" name="confirm_password">
                <label for="floatingConfirmPassword">Confirm Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign Up</button>
            <span>Already Registered? </span> <a href="login.php"> Log In </a>

        </form>
    </main>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/registration.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php registration form</title>
</head>

<body>
    <div class="center">
        <div>
            <div class="form">
                <form action="user_data.php" method="POST">
                    <h4>Register</h4>
                    <button><img src="./assets/images/google.png" alt="img" class="img">
                        <h4> Register with google</h4>
                    </button>
                    <div class="seperator">
                        <div class="line"></div>
                        <h5 class="label">or Register with email</h5>
                        <div class="line"></div>
                    </div>
                    <div>
                    <label for="fullname" class="label"> Fullname*</label>
                    <br>
                    <input type="text" name="fullname" class="input input-1" id="fullname" placeholder="Last-name First-name Middle-name"
                    required>
                    </div>
                    <div>
                    <label for="email" class="label"> Email*</label>
                    <br>
                    <input type="email" class="input input-1" name="email" id="email" placeholder="firstname@gmail.com" required>
                    </div>
                        <div>
                            <label for="birthdate" class="label">Date of birth*</label>
                            <br>
                            <input type="date" class="input input-1" name="birthdate" max="2002-12-31" id="birthdate"required>
                        </div>
        <div>
                            <label for="country" class="label">Country*</label>
                            <br>
                            <input type="text" class="input" name="country"  id="country"required>
                        </div>
                        <div class="input-1">
            <p class="label" >Gender*</p>
            <input type="radio" name="gender" id="male" value="male" required>
            <label for="male">Male</label>
            <br>
            <input type="radio" name="gender" id="female" value="female" required>
            <label for="female">Female</label>
        </div>

    
                    <div class="terms"> <input type="checkbox" required>I agree to the terms and conditions</div>

                    <button type="submit" class="signup-btn" name="register">Register</button>
                </form>
            </div>
        </div>
</body>

</html>
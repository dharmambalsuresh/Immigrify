<?php
/*
 * @file: register.php
 * @author: Immigrify
 * @year: 2019
 * @description: CSCI 4193 (Fall 2019) This page allows users to create a new account.
 */
include_once "header.php";
?>

<body>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">Create Account</h1>
                <hr>
                <!-- Account Creation Form -->
                <form method="post">
                    <h4>About You</h4>
                    <hr>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                               placeholder="Username input" required>
                    </div>

                    <div class="form-group">
                        <label for="aboutYou">Tell us about you</label>
                        <textarea class="form-control" id="aboutYou" name="aboutYou" rows="3"
                                  placeholder="About Me..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="aboutYou">Image name</label>
                        <textarea class="form-control" id="aboutYou" name="imageName"
                                  placeholder="Image_name.png"></textarea>
                    </div>

                    <br>

                    <h5>Create a Username and Password</h5>

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="nameHelp"
                               placeholder="Username input" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                               aria-describedby="nameHelp"
                               placeholder="Password input" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="createAccount">Submit</button>
                </form>
            </div>
        </div>
    </div>
<br> <br> <br>

<!-- /.container -->
<?php include_once "footer.php"; ?>
</body>


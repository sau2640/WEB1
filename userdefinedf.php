index.html

<html>
    <body>
        <h1>Registration Form</h1>
        <form action="process.php"method="post">
            <label for="name">Name:</label>
            <input type="text"name="name"id="name"required><br><br>

            <label for="email">Email:</label>
            <input type="text"name="email"id="email"required><br><br>

            <label for="gender">Gender:</label>
            <input type="radio"name="gender"value="Male"id="gender-Male">
            <input type="radio"name="gender"value="Female"id="gender-Female"><br><br>

            <label for="country">Country:</label>
            <select name="country"id="country">
                <option value="USA">United States</option>
                <option value="Canada">Canada</option>
                <option value="UK">United Kingdom</option>
                <option value="Other">other</option>
            </select><br><br>

            <label for="newsletter">Subscribe to newsletter:</label>
            <input type="checkbox"name="newsletter"id="newsletter"value="Yes"><br><br>

            <input type="submit"value="submit"
        </form>
    </body>
</html>

process.php
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h2> Registration Form</h2>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_POST["name"];
            $email=$_POST["email"];
            $gender=isset ($_POST["gender"])? $_POST["gender"]:"Not specified";
            $country=$_POST["country"];
            $_newsletter=isset ($_POST["newsletter"])"Yes":"No";

            echo"<P><strong>Name:</strong>$name</p>";
            echo"<P><strong>Email:</strong>$email</p>";
            echo"<P><strong>Gender:</strong>$gender</p>";
            echo"<P><strong>Contry:</strong>$country</p>";
            echo"<P><strong>Subscribe to newsletter:</strong>$name</p>";
        }
        else{
            echo"Form submission failed.Please try again."
        }
        ?>
    </body>
</html>
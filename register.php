<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        input, select {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        /* Add a container for the radio buttons to improve alignment */
        .gender-container {
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="reg.php" method="post">
        <h1>REGISTRATION PAGE</h1>
        First Name: <input type="text" name="txt1"><br>
        Last Name: <input type="text" name="txt2"><br>
        Password: <input type="password" name="txt3"><br>
        Age: <input type="text" name="txt4"><br>
        
        <!-- Use a container for the radio buttons -->
        <div class="gender-container">
            Gender: 
            Male <input type="radio" name="rd" value="male"> 
            Female <input type="radio" name="rd" value="female">
        </div>
        
        Languages known:
        PHP <input type="checkbox" name="chk[]" value="PHP">
        C <input type="checkbox" name="chk[]" value="C">
        CPP <input type="checkbox" name="chk[]" value="CPP">
        JAVA <input type="checkbox" name="chk[]" value="JAVA"><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['txt1'];
    $lname = $_POST['txt2'];
    $password = $_POST['txt3'];
    $age = $_POST['txt4'];

    echo "<b><u><font size=5>REGISTRATION DETAILS</font></u></b><br>";
    echo "Name: $fname $lname<br>";
    echo "Age: $age<br>";

    $gender = $_POST['rd'];
    echo "Gender: $gender<br>";

    echo "Languages known:<br>";
    if (isset($_POST['chk'])) {
        foreach ($_POST['chk'] as $selected) {
            echo $selected . "<br>";
        }
    }
}
?>


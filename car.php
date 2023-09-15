<!DOCTYPE html>
<html>
<head>
    <title>Car Form</title>
    <style>
        table td {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body style="background-image: url('carshow.webp'); background-repeat: no-repeat; background-size: cover;">
    <h2 align="center" style="color:white; text-decoration: underline;">CAR FORM</h2>
    <table align="CENTER" style="font-family: forte; color:brown; background-color:blanchedalmond; ">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"">
        <tr>
        <td>Name:</td>
        <td><input type="text" name="name" required></td>
        </tr>
        <tr>
        <td>Phone Number:</td>
        <td><input type="text" name="phone" required></td>
        </tr>
        <tr>
        <td>Email ID:</td>
        <td><input type="email" name="email" required></td>
        </tr>
      <tr>
        <td>Address:</td>
        <td><textarea name="address"  required></textarea> </td>
        </tr>
        <tr>
        <td>Car Options:</td>
      <td style="min-width:10px"><input type="checkbox" name="options" value="Hatchback">Hatchback</td>
      <td><input type="checkbox" name="options" value="Sedan"> Sedan</td>
      <td><input type="checkbox" name="options" value="SUV"> SUV</td>
      </tr>
        <tr>
      <td>
       <input type="submit" value="Submit">
       </td>
        </tr>
    </form>
    </table>
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $options = $_POST['options'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $conn = new mysqli("localhost","root","","dbtask");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO kau (options, name, phone, email, address)
        VALUES ('$options', '$name', '$phone', '$email', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Response submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
}
?>


















<?php


// // Database credentials
// $servername = "localhost";
// $username = "root";
// $password = " ";
// $dbname = "dbtask";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Get the form data
// $options = implode(", ", $_POST['options']);
// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $address = $_POST['address'];


// // Insert the form data into the database
// $sql = "INSERT INTO responses (options, name, phone, email, address, code)
//         VALUES ('$options', '$name', '$phone', '$email', '$address', '$code')";

// if ($conn->query($sql) === TRUE) {
//     echo "Response submitted successfully.";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>



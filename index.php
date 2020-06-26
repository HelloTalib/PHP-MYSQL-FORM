

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MYSQL FORM</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="form">
        <h1 class="title">Add User</h1>
        <form action="process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Enter name"
                required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter email"
                required><br>
            <label for="phone">Phone Number:</label>
            <input type="number" name="phone"
                placeholder="Enter phone number" required><br>
            <input type="submit" value="SUBMIT" name="submit">
        </form>
        <h1>
            <marquee behavior="scroll" direction="left" loop='1' >
                <strong style="color:red">Warning!</strong> your submitted data will be visible for everyone!
            </marquee>
        </h1>
    </section>
</body>

</html>
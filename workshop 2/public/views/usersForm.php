<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserForm</title>
</head>
<body>
    <div>

        <form action="../../../../sec_workshop/workshop/public/index.php?action=create" method="post">
            <fieldset>
                <legend>User Form</legend>
                <label for="username">user Name:</label>
                <input type="text" name="username" id="username" placeholder="Enter your name:" required>
                <label for="lastname">Last name:</label>
                <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname:" required>
                <label for="email">Email address:</label>
                <input type="text" name="email" id="email" placeholder="Enter your email:" required>
                <label for="phone_number">Phone Number:</label>
                <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number:" required>
            <input type="submit" name="Save" id="save" value="Save">
            </fieldset>
        </form>
    </div>
</body>
</html>
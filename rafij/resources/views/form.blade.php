<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="welcome" method="get">
        <h1>Sign Up Form</h1>

        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name" required><br><br>

        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name" required><br><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>

        <label for="nationality">Nationality</label><br><br>
        <select id="nationality" name="nationality">
            <option value="Indonesia">Indonesia</option><br>
            <option value="Inggris">Inggris</option><br>
            <option value="Jerman">Jerman</option><br>
        </select><br><br>

        <label for="language">Language Spoken</label><br><br>
        <input type="checkbox" id="bahasa" name="language" value="Bahasa Indonesia">
        <label for="bahasa">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="language" value="English">
        <label for="english">English</label><br>
        <input type="checkbox" id="other" name="language" value="Other">
        <label for="other">Other</label><br><br>

        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Sign Up">
    </form>     
</body>
</html>
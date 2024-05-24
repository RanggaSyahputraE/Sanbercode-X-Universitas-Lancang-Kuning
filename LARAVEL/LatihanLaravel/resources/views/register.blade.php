<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ url('/welcome') }}" method="post">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="first_name"><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="last_name"><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male">Male <br>
        <input type="radio" name="gender" value="Female">Female <br>
        <input type="radio" name="gender" value="Other">Other <br><br>
        <label>Nationality</label><br>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language" value="Bahasa Indonesia">Bahasa Indonesia<br>
        <input type="checkbox" name="language" value="English">English<br>
        <input type="checkbox" name="language" value="Other">Other<br><br>
        <label>Bio:</label><br>
        <textarea name="bio" cols="30" rows="10"></textarea><br><br>

        <input type="submit" value="Sign UP">
    </form>
</body>
</html>

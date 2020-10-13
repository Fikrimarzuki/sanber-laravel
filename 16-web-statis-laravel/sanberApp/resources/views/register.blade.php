<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <div>
    <h1>Buat Account Baru!</h1>
  </div>
  <div>
    <h3>Sign Up Form</h3>
    <br />
    <form action="/submit" method="POST">
      @csrf
      <div>
        <label>First name: </label>
        <br /><br />
        <input type="text" id="firstName" name="firstName"/>
      </div>
      <br />
      <div>
        <label>Last name: </label>
        <br /><br />
        <input type="text" id="lastName" name="lastName"/>
      </div>
      <br />
      <div>
        <label>Gender: </label>
        <br /><br />
        <input type="radio" value="Male" name="gender" />
        <label for="male">Male</label><br />
        <input type="radio" value="Female" name="gender" />
        <label for="female">Female</label><br />
        <input type="radio" value="Other" name="gender" />
        <label for="other">Other</label>
      </div>
      <br />
      <div>
        <label>Nationality: </label>
        <br /><br />
        <select name="nationality">
          <option value="indonesia">Indonesian</option>
          <option value="singaporean">Singaporean</option>
          <option value="malaysian">Malaysian</option>
          <option value="australia">Australia</option>
        </select>
      </div>
      <br />
      <div>
        <label>Language Spoken: </label>
        <br /><br />
        <input type="checkbox" value="bahasa-indonesia" name="languange"/>
        <label for="bahasa-indonesia">Bahasa Indonesia</label><br />
        <input type="checkbox" value="english" name="languange"/>
        <label for="english">English</label><br />
        <input type="checkbox" value="other" name="languange"/>
        <label for="other">Other</label>
      </div>
      <br />
      <div>
        <label for="">Bio:</label>
        <br /><br />
        <textarea rows="8" cols="30" name="bio"></textarea>
      </div>
      <br />
      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>
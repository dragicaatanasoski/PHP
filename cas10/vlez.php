<form action="register.php" method="POST" enctype="multipart/form-data">
  <label for="ime">Ime:</label>
  <input type="text" id="ime" name="ime" required>
  
  <label for="prezime">Prezime:</label>
  <input type="text" id="prezime" name="prezime" required>
  
  <label for="omilena_boja">Omilena boja:</label>
  <select id="omilena_boja" name="omilena_boja">
    <option value="zelena">Zelena</option>
    <option value="crvena">Crvena</option>
    <option value="plava">Plava</option>
  </select>
  
  <button type="submit">Submit</button>
</form>

<style>
  form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  input[type="text"],
  select {
    width: 100%;
    padding: 8px;
    border: 1px solid pink;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

  button[type="submit"] {
    background-color: pink;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: black;
  }
</style>

<form action="process_form.php" method="POST">
  <label
























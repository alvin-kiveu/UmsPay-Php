<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>UMSPAY</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <style>
    .alert-success {
     background-color: green;
      color: white;
      padding: 16px;
    }

    .alert-danger {
      background-color: red;
      color: white;
      padding: 16px;
    }
  </style>
</head>

<body>
  <div class="bg"></div>
  

  <main class="form-signin">
    <h1 class="h3">UmsPay <span style="color:black">STK PUSH </span> </h1>
    <?php
    if (isset($_GET['success'])) {
      echo '<div class="alert alert-success" role="alert">' . $_GET['success'] . '</div>';
    }
    if (isset($_GET['error'])) {
      echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
    }
    ?>
    <form action="pay.php" method="post">
      <div class="form-floating">
        <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="eg 254712345678" required>
        <label for="floatingInput">Phone Number</label>
      </div>
      <div class="form-floating">
        <input type="number" name="amount" class="form-control" id="floatingInput" placeholder="eg 10" required>
        <label for="floatingInput">Amount</label>
      </div>
      <div class="form-floating">
        <input type="text" name="accountNumber" class="form-control" id="floatingInput" placeholder="eg 1234" required>
        <label for="floatingInput">Account Number</label>
      </div>
      <button class="w-100 btn btn-lg" name="pay" type="submit">Make Payment</button>
    </form>
  </main>
</body>

</html>
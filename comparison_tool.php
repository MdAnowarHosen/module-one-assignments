<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Comparison Tool</title>
</head>

<body>

  <?php
  $result = null;
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {

    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];

    $first_number > $second_number ?  $result = "{$first_number} is the larger number" :  $result = "{$second_number} is the larger number";
  }
  ?>

  <div class="container mx-auto">
    <div class="mt-5 mx-auto" style="width: 500px;;">
      <div class="card">
        <div class="card-header">
          Comparison Tool
        </div>
        <form action="#" method="post" action="">
          <div class="card-body">
            <strong>
              <p>Result: <span>
                  <?php
                  echo  $result;
                  ?>
                </span></p>
            </strong>
            <div class="my-3">
              <label for="first_number" class="form-label">First Number*</label>
              <input type="first_number" id="first_number" name="first_number" class="form-control" aria-describedby="first_number" required>
            </div>
            <div class="my-3">
              <label for="second_number" class="form-label">Second Number*</label>
              <input type="second_number" id="second_number" name="second_number" class="form-control" aria-describedby="second_number" required>
            </div>
            <div class="d-grid mt-4">
              <button class="btn btn-primary" type="submit">Check Larger Number</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Even or Odd Checker</title>
</head>

<body>

  <?php
  $result = null;
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $number = $_POST['number'];
    $lastNumber = $number % 2;
    if ($lastNumber == 0)
    {
      $result = 'Even';
    }
    else
    {
      $result = 'Odd';
    }
  }
  ?>

  <div class="container mx-auto">
    <div class="mt-5 mx-auto" style="width: 500px;;">
      <div class="card">
        <div class="card-header">
          Even or Odd Checker
        </div>
        <form action="#" method="post" action="">
          <div class="card-body">
            <strong>
              <p>Result: <span>
                  <?php
                  echo $result != null ?  "Tha number " : ' ';
                  echo $number ?? ' ';
                  echo $result != null ?  " is " : ' ';
                  echo ' ' . $result;
                  ?>
                </span></p>
            </strong>
            <div class="my-3">
              <label for="number" class="form-label">Insert Number *</label>
              <input type="number" id="number" name="number" class="form-control" aria-describedby="number" required>
            </div>
            <div class="d-grid mt-4">
              <button class="btn btn-primary" type="submit">Check Number Type</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
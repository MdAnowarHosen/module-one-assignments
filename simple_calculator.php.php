<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>PHP Simple Calculator</title>
</head>

<body>

  <?php
  $result = 0;
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $number_1 = $_POST['number_one'];
    $number_2 = $_POST['number_two'];
    $operation = $_POST['operation'];

    # calculate
    $result = match ($operation)
    {
      "+" => $number_1 + $number_2,
      "-" => $number_1 - $number_2,
      "*" => $number_1 * $number_2,
      "/" =>  $number_2 != 0 ? $number_1 / $number_2 : 0,
      "binary" => decbin($number_1 + $number_2),
      "hexadecimal" => dechex($number_1 + $number_2),
      "octal" => decoct($number_1 + $number_2),
      default => 0,
    };
  }
  ?>

  <div class="container mx-auto">
    <div class="mt-5 mx-auto" style="width: 500px;;">
      <div class="card">
        <div class="card-header">
          Calculator
        </div>
        <form action="#" method="post" action="">
          <div class="card-body">
            <strong>
              <p>Output: <span>
                  <?php
                  echo $result;
                  ?>
                </span></p>
            </strong>
            <div class="my-3">
              <label for="number-1" class="form-label">Number One *</label>
              <input type="number" id="number-1" name="number_one" class="form-control" aria-describedby="number-1" required>
            </div>
            <div class="my-3">
              <label for="number-2" class="form-label">Number Two *</label>
              <input type="number" id="number-2" name="number_two" class="form-control" aria-describedby="number-2" required>
            </div>
            <div class="my-3">
              <label for="select" class="form-label">Select Operator *</label>
              <select class="form-select" name="operation" id="select" aria-label="Select Operator">
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
                <option value="binary">Binary Conversion</option>
                <option value="hexadecimal">Hexadecimal Conversion</option>
                <option value="octal">Octal Conversion</option>
              </select>
            </div>
            <div class="d-grid mt-4">
              <button class="btn btn-primary" type="submit">Calculate</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
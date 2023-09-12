<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Temperature Converter</title>
    <style>

    </style>
</head>
<body>

  <?php
    $result = 0;
    $surveyor = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $insertTemp = $_POST['temperature'];
      $operation = $_POST['operation'];

        if (( isset( $insertTemp) && $insertTemp >= 1) && isset($operation))
        {

            if ($operation == 'c_to_f')
            {
                # Celsius to Fahrenheit
                $result = number_format($insertTemp * 9/5 + 32, 2) ;
                $surveyor = "Fahrenheit";
            }
            else
            {
                $result = number_format((($insertTemp-32)*5)/9, 2);
                $surveyor = "Celsius";
            }
            
        }        
    }
  ?>

    <div class="container mx-auto">
        <div class="mt-5 mx-auto" style="width: 500px;;">
            <div class="card">
                <div class="card-header">
                Temperature Converter
                </div>
                <form action="#" method="post" action="">
                    <div class="card-body">
                        <strong><p>Output Temperature: <span>
                          <?php
                          echo $result . " Degree ".$surveyor;
                          ?>
                           
                        </span></p></strong>
                       <div class="my-3">
                        <label for="temperature" class="form-label">Temperature *</label>
                        <input type="number" id="temperature" name="temperature" class="form-control" aria-describedby="temperature" required>
                       </div>
                       <div class="my-3">
                        <label for="select" class="form-label">Select Temperature Converter *</label>
                        <select class="form-select" name="operation" id="select" aria-label="Select Operator">
                            <option value="c_to_f">Celsius to Fahrenheit</option>
                            <option value="f_to_c">Fahrenheit to Celsius</option>
                          </select>
                       </div>
                       <div class="d-grid mt-4">
                        <button class="btn btn-primary" type="submit">Convert</button>
                      </div>
                    </div>
                    
                </form>
              </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Weather Report</title>
</head>

<body>

    <?php
    $result = null;
    $surveyor = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $temperature = $_POST['temperature'];

        if (isset($temperature))
        {
            if ($temperature >= 35)
            {
                $result = "It's warm";
            }
            elseif ($temperature >= 25 && $temperature <= 34)
            {
                $result = "It's normal";
            }
            elseif ($temperature >= 10 && $temperature <= 24)
            {
                $result = "It's cool";
            }
            elseif ($temperature <= 9)
            {
                $result = "It's freezing";
            }
            else
            {
                $result = "Invalid";
            }
        }
    }
    ?>

    <div class="container mx-auto">
        <div class="mt-5 mx-auto" style="width: 500px;;">
            <div class="card">
                <div class="card-header">
                    Weather Report
                </div>
                <form action="#" method="post" action="">
                    <div class="card-body">
                        <strong>
                            <p>Output: <span>
                                    <?php
                                    echo $result != null ?  $result . ' weather.' : ' ';
                                    ?>
                                </span></p>
                        </strong>
                        <div class="my-3">
                            <label for="temperature" class="form-label">Temperature in celsius *</label>
                            <input type="number" id="temperature" name="temperature" class="form-control" aria-describedby="temperature" required>
                        </div>
                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" type="submit">Check Weather</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
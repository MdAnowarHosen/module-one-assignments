<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Grade Calculator</title>
</head>

<body>

    <?php
    $result = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $marks = $_POST['marks'];


        if (isset($marks)  &&  $marks >= 0 && $marks <= 100)
        {

            if ($marks >= 80 && $marks <= 100)
            {
                $result = 'A+';
            }
            elseif ($marks >= 70 && $marks < 79)
            {
                $result = 'A';
            }
            elseif ($marks >= 60 && $marks < 69)
            {
                $result = 'A-';
            }
            elseif ($marks >= 50 && $marks < 59)
            {
                $result = "B";
            }
            elseif ($marks >= 40 && $marks < 49)
            {
                $result = "C";
            }
            elseif ($marks >= 33 && $marks < 39)
            {
                $result = "D";
            }
            else
            {
                $result = "F";
            }
        }
        elseif (isset($marks)  &&  ($marks > 100 || $marks < 0))
        {
            $result = "Invalid Marks";
        }
    }
    ?>

    <div class="container mx-auto">
        <div class="mt-5 mx-auto" style="width: 500px;;">
            <div class="card">
                <div class="card-header">
                    Grade Calculator
                </div>
                <form action="#" method="post" action="">
                    <div class="card-body">
                        <strong>
                            <p>Result: <span>
                                    <?php
                                    echo $result;
                                    ?>

                                </span></p>
                        </strong>
                        <div class="my-3">
                            <label for="marks" class="form-label">Mark *</label>
                            <input type="number" id="marks" name="marks" class="form-control" aria-describedby="marks" required>
                        </div>
                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" type="submit">Get Result</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
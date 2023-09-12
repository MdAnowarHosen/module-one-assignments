<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Personal Information</title>
    <style>

    </style>
</head>
<body>

  <?php
    $name = "Anowar Hosen";
    $age = 25;
    $profession = "Web Developer";
    $district = "Rajshahi";
    $country = "Bangladesh";
    $batch = "Ostad PHP & Laravel Batch 2";
    $intro = "I'm Anowar Hosen. I wanna be a expert web developer. My favorite programming language is: PHP and favorite framework is Laravel";
  ?>

    <div class="container mx-auto">
        <div class="mt-5 mx-auto" style="width: 500px;;">
            <div class="card">
                <div class="card-header">
                  Personal Information
                </div>
                <div class="card-body">
                    <p>Name: <?php echo $name; ?></p>
                    <p>Age: <?php echo $age; ?></p>
                    <p>Profession: <?php echo $profession; ?></p>
                    <p>District: <?php echo $district; ?></p>
                    <p>Country: <?php echo $country; ?></p>
                    <p>Batch: <?php echo $batch; ?></p>
                    <p>Introduction: <?php echo $intro; ?></p>
                </div>
              </div>
        </div>
    </div>
</body>
</html>
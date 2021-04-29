<?php
if (isset($_POST['submit'])) {
    $data = "Hello " . getName($_POST['name']) . "!" . " You are " . getBirthDate($_POST['dateof']) . " years old";
}

function getName($name)
{
    $cnt = str_word_count($name);
    if ($cnt > 2) {
        $fullname = substr($name, 0, strrpos($name, " "));
        $first = ucfirst(strtok($fullname, " "));
        $second = ucfirst(substr($fullname, strrpos($fullname, ' ') + 1));
        $name = $first . " " . $second;
        return $name;
    } else {
        return ucfirst(strtok($name, " "));
    }
}
function getBirthDate($age)
{
    // return date_diff(date_create($age), date_create('today'))->y;

    return floor((time() - strtotime($age)) / 31556926);

    // $then = date('Ymd', strtotime($age));
    // $diff = date('Ymd') - $then;
    // return $diff==""?0:substr($diff, 0, -4);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Neumorphism Age Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://gitcdn.link/repo/Junzlay/neumorph-age-calculator/main/style.css">
    <link rel="stylesheet" href="footer.css">
</head>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<body>


    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <form action="" method="POST">
                    <h3 class="text-center">Age Calculator</h3>
                    <hr class="bg-light" style="opacity: 0.5;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fullname</label>
                        <input _ngcontent-c0="" class="form-control form-control-lg" name="name" required placeholder="Enter Fullname" type="text">
                    </div>

                    <div class="form-group mb-4">
                        <label for="exampleInputEmail1">Date of Birth</label>
                        <input class="form-control form-control-lg text-light" id="datefield" placeholder="Enter Date of Birth" required name="dateof" type="date">
                    </div>
                    <div class="form-group mt-2">
                        <button name="submit" type="submit" class="btn btn-info btn-lg text-dark btn-block">Submit Now</button>
                    </div>
                    <p class="text-center name small text-light mt-5"><?= isset($_POST['submit']) ? $data : '' ?></p>
                </form>
                <div class="love-footer text-center mx-auto row align-items-center mt-4  ">
        <p class="text-light text-center mt-3">Made with ❤ by <span class="ml-2"> <a target="_blank" href="https://www.linkedin.com/in/junmar-layaog-undefined/">undefined</a></span></p>
        </div>
            </div>
           
        </div>

    </div>

</body>
<script>

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }
    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("datefield").setAttribute("max", today);
</script>

</html>
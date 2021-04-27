<?php
if (isset($_POST['submit'])) {
    $data = "Hello " . getName($_POST['name']) . "!" . " You are " . getBirthDate($_POST['dateof']) . " years old";
}

function getName($name)
{
    $cnt = str_word_count($name);
    if ($cnt > 2) {
        $fullname=substr($name, 0, strrpos($name, " "));
        $first=ucfirst(strtok($fullname, " "));
        $second=ucfirst(substr($fullname, strrpos($fullname, ' ') + 1));
        $name=$first." ".$second;
        return $name;
    } else {
        return ucfirst(strtok($name, " "));
    }
}
function getBirthDate($age)
{
    return date_diff(date_create($age), date_create('today'))->y;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

    body,
    html {
        font-family: 'Poppins', sans-serif;
        height: 100%;
        background-color: #4548e8;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='2'%3E%3Cpath transform='translate(0 0)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='4' transform='rotate(0 800 450)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(0 0)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='4'%3E%3Cpath transform='translate(0 0)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='8' transform='rotate(0 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='rotate(0 1400 132)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
    }

    form {
        color: white !important;
        padding: 30px;
        border-radius: 19px;
        background: #4548e8;
        box-shadow: 11px 11px 29px #393bbe,
            -11px -11px 29px #5155ff;
    }

    .form-control {
        color: greenyellow !important;
        border: none !important;
        border-radius: 52px;
        background: #4548e8;
        box-shadow: inset 41px 41px 50px #3d40ce,
            inset -41px -41px 50px #4d50ff;
        font-size: 1rem !important;
    }

    .form-control:focus {
        font-size: 1rem !important;
        color: greenyellow !important;
        border: none !important;
        border-radius: 52px;
        background: #4548e8;
        box-shadow: inset 5px 5px 10px #2e3099,
            inset -5px -5px 10px #5c60ff;

    }

    .btn {
        border-radius: 52px;
        background: #ffffff;
        box-shadow: 1px 1px 10px #ebebeb,
            -1px -1px 10px #ffffff;
        border: none !important;
    }

    .btn:hover {
        /* color:  !important; */
        border-radius: 41px;
        background: #ffffff;
        box-shadow: 10px 10px 93px #e0e0e0,
            -10px -10px 93px #ffffff;
    }

    ::placeholder {
        color: greenyellow !important;
        opacity: 0.9 !important;
        font-size: 1rem !important;
    }

    input:-webkit-autofill {

        -webkit-text-fill-color: white !important;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active {

        transition: background-color 5000s ease-in-out 0s;
        -webkit-box-shadow: inset 5px 5px 10px #2e3099,
            inset -5px -5px 10px #5c60ff !important;
    }

    ::-webkit-calendar-picker-indicator {
        filter: invert(0.8);
    }

    .bg-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
        bottom: -160px;
        -webkit-animation: square 25s infinite;
        animation: square 25s infinite;
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
    }

    .bg-bubbles li:nth-child(1) {
        left: 10%;
    }

    .bg-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        animation-delay: 2s;
        animation-duration: 17s;
    }

    .bg-bubbles li:nth-child(3) {
        left: 25%;
        animation-delay: 4s;
    }

    .bg-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-duration: 22s;
        background-color: rgba(255, 255, 255, 0.25);
    }

    .bg-bubbles li:nth-child(5) {
        left: 70%;
    }

    .bg-bubbles li:nth-child(6) {
        left: 80%;
        width: 120px;
        height: 120px;
        animation-delay: 3s;
        background-color: rgba(255, 255, 255, 0.2);
    }

    .bg-bubbles li:nth-child(7) {
        left: 32%;
        width: 160px;
        height: 160px;
        animation-delay: 7s;
    }

    .bg-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        animation-delay: 15s;
        animation-duration: 40s;
    }

    .bg-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        animation-delay: 2s;
        animation-duration: 40s;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .bg-bubbles li:nth-child(10) {
        left: 90%;
        width: 160px;
        height: 160px;
        animation-delay: 11s;
    }

    @-webkit-keyframes square {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-700px) rotate(600deg);
        }
    }

    @keyframes square {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-700px) rotate(600deg);
        }
    }
</style>

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
                        <input class="form-control form-control-lg text-light" placeholder="Enter Date of Birth" required name="dateof" type="date">
                    </div>
                    <div class="form-group mt-2">
                        <button name="submit" type="submit" class="btn btn-info btn-lg text-dark btn-block">Submit Now</button>
                    </div>
                    <p class="text-center name small text-light mt-4"><?= isset($_POST['submit']) ? $data : '' ?></p>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
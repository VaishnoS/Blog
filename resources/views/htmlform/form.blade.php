<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css">

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif
    }

    body {
        background: linear-gradient(45deg, #ce1e53, #8f00c7);
        min-height: 100vh
    }

    body::-webkit-scrollbar {
        display: none
    }

    .wrapper {
        max-width: 800px;
        margin: 80px auto;
        padding: 30px 45px;
        box-shadow: 5px 25px 35px #3535356b
    }

    .wrapper label {
        display: block;
        padding-bottom: 0.2rem
    }

    .wrapper .form .row {
        padding: 0.6rem 0
    }

    .wrapper .form .row .form-control {
        box-shadow: none
    }

    .wrapper .form .option {
        position: relative;
        padding-left: 20px;
        cursor: pointer
    }

    .wrapper .form .option input {
        opacity: 0
    }

    .wrapper .form .checkmark {
        position: absolute;
        top: 1px;
        left: 0;
        height: 20px;
        width: 20px;
        border: 1px solid #bbb;
        border-radius: 50%
    }

    .wrapper .form .option input:checked~.checkmark:after {
        display: block
    }

    .wrapper .form .option:hover .checkmark {
        background: #f3f3f3
    }

    .wrapper .form .option .checkmark:after {
        content: "";
        width: 10px;
        height: 10px;
        display: block;
        background: linear-gradient(45deg, #ce1e53, #8f00c7);
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s
    }

    .wrapper .form .option input[type="radio"]:checked~.checkmark {
        background: #fff;
        transition: 300ms ease-in-out 0s
    }

    .wrapper .form .option input[type="radio"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1)
    }

    #sub {
        display: block;
        width: 100%;
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
        color: #333
    }

    #sub:focus {
        outline: none
    }

    @media(max-width: 768.5px) {
        .wrapper {
            margin: 30px
        }

        .wrapper .form .row {
            padding: 0
        }
    }

    @media(max-width: 400px) {
        .wrapper {
            padding: 25px;
            margin: 20px
        }
    }
</style>

<body>
    <div class="wrapper rounded bg-white">
        <div class="h3">Registration Form</div>
        <form action="{{route('htmlform.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Father Name</label>
                        <input type="text" name="father_name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Birthday</label>
                        <input type="date" name="birthday_date" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label>Phone Number</label>
                        <input type="tel" name="contact" class="form-control" required>
                    </div>
                </div>
                <div class="row" style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
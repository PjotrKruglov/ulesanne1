<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Registreerimisvorm123</h1>
<form action="result.php" method="get">
    <div class="form-group">
        <label for="usr">Name:</label>
        <input name="username" type="text" class="form-control" id="usr">
    </div>

    <div class="form-group">
        <label for="pwd">Password:</label>
        <input name="password" type="password" class="form-control" id="pwd">
    </div>

    <div class="form-group">
        <label for="pwdc">Confirm password:</label>
        <input name="password1" type="password" class="form-control" id="pwdc">
    </div>

    <div class="form-check-inline">
        <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optradio">Mees
        </label>
    </div>

    <div class="form-check-inline">
        <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optradio">Naine
    </label>
    </div>

    <div class="form-group">
        <label for="tel">Phone:</label>
        <input name="phone" type="text" class="form-control" id="tel">
    </div>

    <div class="form-group">
        <label for="mail">E-mail:</label>
        <input name="email" type="text" class="form-control" id="mail">
    </div>

    <button type="button" class="btn btn-primary btn-md" onclick="form.sumbit();">Confirm</button>

    </form>
</div>
</body>
</html>
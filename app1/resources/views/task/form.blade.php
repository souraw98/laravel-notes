<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1> Add Two numbers</h1>
        <hr/>

        <form action="{{url('add-value')}}" method="post">
             @csrf 
            <!-- Hidden Field csrf_token will generated token -->
            Enter Num 1 : <input type="text" name="num1"><br/>
            Enter Num 2 : <input type="text" name="num2"><br/>
            <input type="submit"><br/>
        </form>

</body>
</html>
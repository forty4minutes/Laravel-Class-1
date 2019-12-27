<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    
        <h1>My Number</h1>
       
        <h1>
            {{$mynum}}
        </h1>

       
        
        <form method="POST" action="/incDecNumber/<?php echo $mynum; ?>">
        @csrf
            <input type="submit" value="Increase" name="inc">
            <input type="submit" value="Decrease" name="dec">
            <!-- <input type="text" value='<?php echo $mynum ?>' name="currentNum" > -->
            
            

        </form>
    </div>
</body>
</html>
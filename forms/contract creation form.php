<!DOCTYPE html>
<html>
<head>
    <title>contract creation form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-box">
    <h1>contract creation form</h1>
    <form action="" method="post">
        <label for="contract no">contract no : 
            <input type="number" name="" id="">
        </label>
        <br>
        <label for="type">type : 
            <select name="type" id="">
                <option value="">contract type</option>
                <option value="type 1">type 1</option>
                <option value="type 2">type 2</option>
                <option value="type 3">type 3</option>
            </select>
        </label>
        <br>
        <label for="date created">date created : 
            <input type="date" name="dc" id="">
        </label>
        <br>
        <label for="expire date">expire date : 
            <input type="date" name="ed" id="">
        </label>
        <br>
        <label for="subject">subject : 
            <input type="text" name="sub" id="">
        </label>
        <br>
        <label for="originating department">originating department : 
            <input type="text" name="od" id="">
        </label>
        <br>
        <label for="bid document">bid document : 
            <input type="file" name="bd" id="">
        </label>
        <br>
        <button type="reset">reset</button>
        <button type="submit">create</button>
    </form>
    </div>
</body>
</html>
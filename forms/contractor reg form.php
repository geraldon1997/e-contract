<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>contractor registration form</title>
</head>
<body>
    <div class="form-box">
        <h1>contractor registration form</h1>
        <h2>-------------------- contractor details --------------------</h2>
        <form action="" method="post">
            <label for="company name">company name : <br>
                <input type="text" name="cn" id="">
            </label>
            <br>
            <label for="tax no">tax no : <br>
                <input type="text" name="tn" id="">
            </label>
            <br>
            <label for="cert no of inc">cert no of inc :<br> 
                <input type="text" name="cnoi" id="">
            </label>
            <br>
            <label for="address">address : <br>
                <input type="text" name="addr" id="">
            </label>
            <br>
            <label for="phone no">phone no : <br>
                <input type="tel" name="pn" id="">
            </label>
            <br>
            <label for="e-mail">e-mail : <br>
                <input type="email" name="email" id="">
            </label>
            <br>
            <label for="business type">business type : <br>
                <select name="bt" id="">
                    <option value="">-------------------- select business type --------------------</option>
                    <option value="type 1">type 1</option>
                    <option value="type 2">type 2</option>
                    <option value="type 3">type 3</option>
                </select>
            </label>
        </form>
        <label for="business nature">business nature : <br>
            <input />
        </label>
        <br>
        <h2>-------------------- company representative details --------------------</h2>
        <br>
        <label for="last name">last name : <br>
            <input />
        </label>
        <br>
        <label for="first name">first name : <br>
            <input />
        </label>
        <br>
        <label for="sex">sex : <br>
            <select>
                <option>male</option>
                <option>female</option>
            </select>
        </label>
        <br>
        <label for="email">email : <br>
            <input />
        </label>
        <br>
        <label for="phone no">phone no :<br> 
            <input />
        </label>
        <br>
        <h2>---------------------------------------- login details ----------------------------------------</h2>
        <br>
        <label for="username">username : <br>
            <input />
        </label>
        <br>
        <label for="password">password : <br>
            <input />
        </label>
        <br>
        <label for="confirm password">confirm password : <br>
            <input />
        </label>
        <br>
        <button type="reset">reset</button>
        <button type="submit">register</button>
    </div>
</body>
</html>
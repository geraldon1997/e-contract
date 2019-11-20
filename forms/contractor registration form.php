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
            <label for="company name">company name : 
                <input type="text" name="cn" id="">
            </label>
            <br>
            <label for="tax no">tax no : 
                <input type="text" name="tn" id="">
            </label>
            <br>
            <label for="cert no of inc">cert no of inc : 
                <input type="text" name="cnoi" id="">
            </label>
            <br>
            <label for="address">address : 
                <input type="text" name="addr" id="">
            </label>
            <br>
            <label for="phone no">phone no : 
                <input type="tel" name="pn" id="">
            </label>
            <br>
            <label for="e-mail">e-mail : 
                <input type="email" name="email" id="">
            </label>
            <br>
            <label for="business type">business type : 
                <select name="bt" id="">
                    <option value="">-------------------- select business type --------------------</option>
                    <option value="type 1">type 1</option>
                    <option value="type 2">type 2</option>
                    <option value="type 3">type 3</option>
                </select>
            </label>
        </form>
        <br>
        <h2>-------------------- company representative details --------------------</h2>
        <br>
        <label for="last name">last name : 
            <input />
        </label>
        <br>
        <label for="first name">first name : 
            <input />
        </label>
        <br>
        <label for="sex">sex : 
            <select>
                <option>male</option>
                <option>female</option>
            </select>
        </label>
        <br>
        <label for="email">email : 
            <input />
        </label>
        <br>
        <label for="phone no">phone no : 
            <input />
        </label>
        <br>
        <h2>---------------------------------------- login details ----------------------------------------</h2>
        <br>
        <label for="username">username : 
            <input />
        </label>
        <br>
        <label for="password">password : 
            <input />
        </label>
        <br>
        <label for="confirm password">confirm password : 
            <input />
        </label>
        <br>
        <button type="reset">reset</button>
        <button type="submit">register</button>
    </div>
</body>
</html>
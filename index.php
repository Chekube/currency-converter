<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CURRENCY CONVERTER</h1>
    <div class="container">
        <div>
            <label for="currency">Select Currency To Convert From</label><br>
            <select name="value" id="">
                <option value="Australian Doller">AUD</option>
                <option value="Brazilian Real">BRL</option>
                <option value="Colombian Peso">COP</option>
                <option value="Denar">MKD</option>
                <option value="Euro">EURO</option>
                <option value="Naira">NAIRA</option>
                <option value="Pound">POUND</option>
                <option value="US Dollar">USD</option>
            </select>
        </div>

        <div>
        <label for="">Amount</label><br>    
        <input type="number" name="digit" id="">
        </div>

        <div>
            <label for="currency">Select Currency To Convert To</label><br>
            <select name="currency" id="" required="required">
                <option value="Australian Doller">AUD</option>
                <option value="Brazilian Real">BRL</option>
                <option value="Colombian Peso">COP</option>
                <option value="Denar">MKD</option>
                <option value="Euro">EURO</option>
                <option value="Naira">NAIRA</option>
                <option value="Pound">POUND</option>
                <option value="US Dollar">USD</option>
            </select>
        </div>
        
        <div>
            <button type="submit" name="convert">Convert</button>
        </div>
    </div>
</body>
</html>
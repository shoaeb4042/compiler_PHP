<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$string = trim(preg_replace('/\s\s+/', ' ', $_POST["code"]));
check($string);
}

function check($src){
//echo $src;
$pattern = '/^if\s*\((.*?)\)\s*{(.*?)}(\s*(else|else\s+if\s*\((.*?)\))\s*{(.*?)})*/';
if(preg_match($pattern, $src, $matches)){

if ((strpos($src, 'else if') || strpos($src, 'else'))  !== false) {
    $sub=after ("else", $src);
    $n1=substr_count($sub, '{');
    $n2=substr_count($sub, '}');
    if($n1==$n2){
    echo "<center><code><h1 style='color:green;'>Code format is Valid!!</h1><br><br>Matches:<pre>";
    print_r($matches);
    echo "</pre></code></center>";
    }
    else
    {echo "<center><code><h1 style='color:red;'>Code format is InValid!!</h1><br><br>Matches:<pre>";
    print_r($matches);
    echo "</pre></code></center>";}
    
}
else{
 echo "<center><code><h1 style='color:green;'>Code format is Valid!!</h1><br><br>Matches:<pre>";
    print_r($matches);
    echo "</pre></code></center>";}
//echo '<script> alert("Code format is Valid!!"; </script>';
//echo '<pre>';
//print_r($matches);

}
else
    {echo "<center><code><h1 style='color:red;'>Code format is InValid!!</h1><br><br>Matches:<pre>";
    print_r($matches);
    echo "</pre></code></center>";}


}

function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    };

?>

<!DOCTYPE html>
<html>
<head>
<title>Compiler Design Project By Shoaeb</title>
<link rel="shortcut icon" href="http://icons.iconarchive.com/icons/toyoharukatoh/adobe-creative-suite/48/Edge-Code-icon.png" />
<style type="text/css">
.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
.btn{
 position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;

}
</style>
<script>
function fil(a){
if(a==1){
document.getElementById('cd').value = 'if(a==1){ print(a);}';
}
 if(a==2){
 document.getElementById('cd').value = 'if(a==1){ print(a);} else if(c=2) { print(c);}';
 }
 if(a==3)
 document.getElementById('cd').value = 'if(something){ print(a)';

}

</script>
</head>
<body>
<div class="form-style-5">
<button class="btn" onclick="fil(1)" type="button">Sample Input1</button>
<button class="btn" onclick="fil(2)" type="button">Sample Input2</button>
<button class="btn" onclick="fil(3)" type="button">Input With Error</button>
<form action="/" method="post">
<fieldset>

<fieldset>
<legend><span class="number">Or</span>Type Your Code Here</legend>
<textarea name="code" id="cd" rows="8" placeholder="write a if/else block or Click on sample input" required></textarea>
</fieldset>
<input type="submit" value="Run" />
</form>
</div>
</body>
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<style>
    html {
        background-color: #39275B;
    }

    body {
        width: 600px;
        margin: 1em auto;
        background-color: white;
        border: 10px #D8C858 solid;
        padding: 0.5em;
    }

    hr {
        width: 90%;
        border: 1px solid #D8C858;
    }

    h1, h2 {
        font-family: sans-serif;
        text-align: center;
    }

    input[type="submit"] {
        font-size: 2em;
        width: 100%;
    }
</style>
<form action="http://httpbin.org/post"
<body>
<?php if(isset($_POST['Name']) && ($_POST['Section'])){
    $Name=$_POST['Name'];
    $Section=$_POST['Section'];}
if(isset($_POST['cardnumber']) && ($_POST['cardtype']))
{$cardnumber=$_POST['cardnumber'];
    $cardtype=$_POST['cardtype'];}
$file = fopen('suckers.txt', 'a');
$text = $Name.';'.$Section.';'.$cardnumber.';'.$cardtype."\n";
fwrite($file, $text);
fclose($file);

$filecontents = file_get_contents('suckers.txt');

if(strlen($cardnumber) == 16) {
if( ($cardtype=='mastercard' && $cardnumber[0] == 5) || ($cardtype=='visa') && $cardnumber[0] == 4 ) {
}}
?>
<h1>Thanks, sucker!</h1>

<p>Your information has been recorded.</p>

<dl>
    <dt>Name</dt>
    <dd>
        <?php
        echo $_POST["Name"];
        ?>
    </dd>

    <dt>Section</dt>
    <dd>
        <?php
        echo $_POST["Section"];
        ?>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <?php
        echo $_POST["cardnumber"];
        ?>
        (<?php echo $_POST["cardtype"]?>);
    </dd>
</dl>
<p>Here are all the suckers who have submitted here:</p>
<pre>
    <?=$filecontents?>
</pre>
</body>
</form>
</html>
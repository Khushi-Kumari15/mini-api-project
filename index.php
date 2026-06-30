<!-- Registered Email: bgpkbyadav@gmail.com -->
 <?php

$response = "";

if(isset($_POST['api'])){

    if($_POST['api']=="greet"){

        $name = urlencode($_POST['name']);

        $json = file_get_contents("http://localhost/mini-api-project/api/greet.php?name=".$name);

        $data = json_decode($json,true);

        $response='
        <div style="
        background:linear-gradient(135deg,#6a11cb,#2575fc);
        color:white;
        padding:25px;
        border-radius:20px;
        text-align:center;
        box-shadow:0 10px 20px rgba(0,0,0,.3);">

        <h2>🎉 '.$data["message"].'</h2>

        <h3>'.$data["wish"].'</h3>

        <p>💖 Have a Nice Day!</p>

        <hr>

        <b>👨‍💻 '.$data["developer"].'</b>

        </div>';

    }

    if($_POST['api']=="tips"){

        $json=file_get_contents("http://localhost/mini-api-project/api/list.php");

        $data=json_decode($json,true);

        $response='
        <div style="
        background:#111827;
        color:white;
        padding:20px;
        border-radius:15px;">

        <h2>📚 Study Tips</h2>
        <ul>';

        foreach($data["tips"] as $tip){

            $response.="<li style='margin:10px;'>✅ ".$tip."</li>";

        }

        $response.="</ul></div>";

    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Smart Study Mini API</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="card">

    <h1>🚀 Smart Study Mini API</h1>
    <h3>Developed by Khushi Kumari 😊</h3>

    <form method="POST">

        <input
            type="text"
            name="name"
            placeholder="👤 Enter your name"
            required>

        <br><br>

        <button type="submit" name="api" value="greet">
            👋 Get Greeting
        </button>

        <button type="submit" name="api" value="tips">
            📚 View Study Tips
        </button>

    </form>

    <div class="output">

        <?php echo $response; ?>

    </div>

    <div class="footer">
        ❤️ Developed by <span>Khushi Kumari</span><br>
        <small>PHP Mini API Project | 2026</small>
    </div>

</div>

</body>
</html>
<html>
<head>
    <script src="jquery-3.1.0.min.js"></script>
    <title>Login</title>
</head>
<body>
<script>
    function functionBefore() {
        $("#information").text("Wait please, data is loading");
    }
    function functionSuccess(data) {
        $("#information").text(data);
    }


    $(document).ready(function () {
        $("#log").bind("click", function () {
            $.ajax ({
                url: "content.php",
                type: "POST",
                data: ({mail:$("#mail").val(), login:$("#login").val()}),
                dataType: "html",
                beforeSend: functionBefore,
                success: functionSuccess
            })
        })
    })

</script>
<style type="text/css" xmlns="http://www.w3.org/1999/html">
    .block {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

</style>
<div class="block" >
    <div>
    <form method="post">
        <b>E-mail:</b><br>
        <input type="text" id="mail" placeholder="Enter e-mail"><br>
        <b>Login:</b><br>
        <input type="text" id="login" placeholder="Enter login"><br>
        <b>Password:</b><br>
        <input type="password" id="password" placeholder="Enter password"><br><br>
        <input type="button" value="Login" id="log">
    </form>
    </div>
</div>
<div id="information"></div>
</body>
</html>

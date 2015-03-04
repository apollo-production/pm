<?php
include "loggedin.php";
include "functions/dbconn.php";
include "functions/queries.php";
include "functions/functions.php";
$message = "";
$active_flag = 1;
if (!empty($_GET["e"])){
    $error_num = $_GET["e"];
    if ($error_num == 1){
        $message = "An error occurred.";
    }
    if ($error_num == 2){
        $message = "Your Marketing Research intake has been received!";
    }
}
?>
<html>
<head>
    <link href='style.css' rel='stylesheet' type='text/css' />
    <link href='js/jquery-ui-1.10.3.custom.min.css' rel='stylesheet' type='text/css' />

    <title>New Project Brief</title>

</head>
<body>
<div id = "page">
    <div id = "main">
        <div id = "logo">
            <img src = "logo.png">
        </div>
        <!--container div tag-->
        <div id="container">
            <div id="mainContent"> <!--mainContent div tag-->
                <h1>Thank you</h1>
                <table border = "0" width = "90%">
                    <tr>
                        <td valign="top">
                            <?php echo $message ?>
                        </td>
                    </tr>
                </table>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
            </div> <!--end mainContent div tag-->
        </div>
        <?php
        include "footer.php";
        ?>
    </div>
</div>
</body>
</html>
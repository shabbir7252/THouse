<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $details = $_POST["details"];

    $emailmessage = "";
    $emailmessage .= "Name : " . $name . "</br>";
    $emailmessage .= "Email : " . $email . "</br>";
    $emailmessage .= "Details of message : " . $details;

    echo "<pre>";
    echo $emailmessage;
    echo "</pre>";

    //To Do: Send Email
    header("location:suggest.php?status=thanks");
}
?>


<?php
    $pageTitle = "Suggested a Media Item";
    $section = "suggest";
    include("inc/header.php");
?>


<div class="section page">
<div class="wrapper">
    <h1>Suggest a Media Item</h1>

        <?php
        if(isset($_GET["status"]) && $_GET["status"] == "thanks"){
            echo "<p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>";
        } else { ?>

    
    <p>If you think there is something I&rsquo;m missing, let me know! complete the form to send me an email.</p>
    <form method="post" action="suggest.php">
        <table>
            <tr>
                <th><label for="name">Name </label></th>
                <td><input id="name" type="text" name="name"></td>
            </tr>
            <tr>
                <th><label for="email">Email </label></th>
                <td><input id="email" type="text" name="email"></td>
            </tr>
            <tr>
                <th><label for="details">Suggest Item Details </label></th>
                <td><textarea name="details" id="details" cols="30" rows="10"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Send" />
    </form>
    <?php } ?>
</div>
</div>



<?php include("inc/footer.php"); ?>
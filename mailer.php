<!DOCTYPE html>
<html>
    <head>
        <title>Form Mailer</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="mailer.css">
    </head>
    <body>
        <form action="postmail.php" method="post" name="form1" id="form1">
            <fieldset>
                <legend>Mail Form</legend>
                <label for="name1">Name: <br>
                    <input type="text" name="Name" id="name1">
                </label>
                <label for="subject">Subject: <br>
                    <input type="text" name="Subject" id="subject">
                </label>
                <label for="email1">Email: <br>
                    <input type="email" name="Email" id="email1">
                </label>
                <label for="message">Message: <br>
                    <textarea name="message" id="message" rows=5></textarea>
                </label>
            </fieldset>
        </form>
    </body>
</html>
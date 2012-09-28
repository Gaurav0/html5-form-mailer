<!DOCTYPE html>
<html>
    <head>
        <title>Form Mailer</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="mailer.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
    </head>
    <body>
        <form action="postmail.php" method="post" name="form1" id="form1">
            <fieldset>
                <legend>Mail Form</legend>
                <label for="name1">Name: <br>
                    <input type="text" name="Name" id="name1" required>
                </label>
                <label for="subject">Subject: <br>
                    <input type="text" name="Subject" id="subject" required>
                </label>
                <label for="email1">Email: <br>
                    <input type="email" name="Email" id="email1" required>
                </label>
                <label for="message">Message: <br>
                    <textarea name="Message" id="message" rows=5 required></textarea>
                </label>
                <input type="submit" name="Submit" id="Submit" value="Send Message">
            </fieldset>
        </form>
        <script>
            $("#form1").validator({
                position: 'bottom left',
                offset: [2, 2]
            });
        </script>
    </body>
</html>
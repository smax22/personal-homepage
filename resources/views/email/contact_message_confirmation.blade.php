<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New contact message</title>
</head>
<body>
<h1>You're message has been successfully sent!</h1>
<h5>I will come back to you as soon as possible!</h5>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            Subject: {{ $contact_message->subject }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            Message: {{ $contact_message->body }}
        </div>
    </div>
</div>
</body>
</html>
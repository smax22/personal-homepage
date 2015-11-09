<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New contact message</title>
</head>
<body>
<h1>You received a new contact message!</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6">
            Sender: {{ $contact_message->name }}
        </div>
        <div class="col-xs-6">
            Mail: {{ $contact_message->mail }}
        </div>
    </div>
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
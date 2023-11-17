<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Content</title>
</head>
<body>
@if (isset($recipient_email) && isset($subject) && isset($messagee))
    <p><strong>Recipient Email:</strong> {{ $recipient_email }}</p>
    <p><strong>Email Subject:</strong> {{ $subject }}</p>
    <p><strong>Email Message:</strong> {{ $messagee }}</p>


@endif




    <!-- Display success message if set -->
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>

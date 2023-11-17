<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/form.blade.php -->

<form action="{{ route('send.email') }}" method="post">
    @csrf
    <label>Recipient Email:</label>
    <input type="email" name="recipient_email" placeholder="Recipient Email" required>
    
    <label>Subject:</label>
    <input type="text" name="subject" placeholder="Subject" required>
    
    <label>Message:</label>
    <textarea name="messagee" placeholder="messagee" required></textarea>

    <button type="submit">Send Email</button>
</form>

</body>
</html>
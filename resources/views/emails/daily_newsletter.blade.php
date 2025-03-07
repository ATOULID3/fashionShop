<!-- resources/views/emails/daily_newsletter.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daily Newsletter</title>
</head>
<body>
    <h1>Daily Newsletter</h1>
    <p>Hello,</p>
    <p>Here are the latest updates from our store:</p>
    <ul>
        <li>New products added</li>
        <li>Special discounts and offers</li>
        <li>Upcoming events</li>
    </ul>
    <p>Visit our website to explore more!</p>
    <p>Thank you,</p>
    <p>{{ config('app.name') }}</p>
</body>
</html>

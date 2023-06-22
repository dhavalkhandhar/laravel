<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Successful</title>
</head>
<body>
    <h1>Form Submission Successful</h1>
    <p>Thank you for submitting the form!</p>

    <h2>Submitted Form Data:</h2>
    <ul>
        <li><strong>Name:</strong> {{ $formData['name'] }}</li>
        <li><strong>Email:</strong> {{ $formData['email'] }}</li>
        <li><strong>Message:</strong> {{ $formData['message'] }}</li>
    </ul>
</body>
</html>

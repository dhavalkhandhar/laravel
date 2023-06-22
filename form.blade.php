<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <h1>Form Example</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/form">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" required>{{ old('message') }}</textarea>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>

<div>
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | PureBeauty</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>

    <body>
        <div class="form-container">
            <h1 class="logo">PureBeauty</h1>
            <p>Login to see our products!</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            @if (session('error'))
            <div class="error-message">{{ session('error') }}</div>
            @endif
            <p>New here? <a href="{{ url('/register') }}">Create an account</a></p>
        </div>
    </body>

    </html>
</div>
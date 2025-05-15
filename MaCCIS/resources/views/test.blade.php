<!DOCTYPE html>
<html>

<head>
    <title>Page de test</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f8f9fa;
        padding: 50px;
        text-align: center;
    }

    .card {
        background: white;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: inline-block;
    }
    </style>
</head>

<body>
    <div class="card">
        <h1>Bienvenue sur la page de test</h1>
        <p>Bonjour, {{ $entrepreneur }} 👋</p>
        <p>Tout fonctionne correctement ! ✅</p>
    </div>
</body>

</html>
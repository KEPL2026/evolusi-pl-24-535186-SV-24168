<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie['name'] }} - Detail Film</title>
    <style>
        body { font-family: system-ui, sans-serif; padding: 20px; background-color: #f3f4f6; color: #1f2937; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 24px; border-radius: 8px; }
        .back-btn { display: inline-block; margin-bottom: 20px; color: #3730a3; text-decoration: none; font-weight: bold; }
        .content { display: flex; gap: 24px; flex-wrap: wrap; }
        .poster { width: 240px; border-radius: 8px; object-fit: cover; }
    </style>
</head>
<body>
    <div class="container">
        <a href="/" class="back-btn">← Kembali ke Katalog</a>
        <div class="content">
            @if(!empty($movie['image']['original']))
                <img src="{{ $movie['image']['original'] }}" alt="{{ $movie['name'] }}" class="poster">
            @endif
            <div>
                <h1>{{ $movie['name'] }}</h1>
                <p><strong>Rating:</strong> ⭐ {{ $movie['rating']['average'] ?? 'N/A' }} / 10</p>
                <p><strong>Bahasa:</strong> {{ $movie['language'] ?? 'N/A' }}</p>
                <p><strong>Status:</strong> {{ $movie['status'] ?? 'N/A' }}</p>
                <h3>Ringkasan Cerita:</h3>
                {!! $movie['summary'] ?? '<p>Tidak ada ringkasan.</p>' !!}
            </div>
        </div>
    </div>
</body>
</html>
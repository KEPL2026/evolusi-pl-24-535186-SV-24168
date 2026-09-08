<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Film TVMaze</title>
    <style>
        body { font-family: system-ui, sans-serif; padding: 20px; background-color: #f3f4f6; color: #1f2937; }
        h1 { text-align: center; }
        .search-box { text-align: center; margin-bottom: 20px; }
        .search-box input { padding: 10px; width: 260px; border: 1px solid #ccc; border-radius: 4px; }
        .search-box button { padding: 10px 16px; background: #3730a3; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px; }
        .card { background: white; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .card img { width: 100%; height: 260px; object-fit: cover; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Katalog Film & TV Show</h1>
    <div class="search-box">
        <form action="/" method="GET">
            <input type="text" name="search" value="{{ $query }}" placeholder="Cari film...">
            <button type="submit">Cari</button>
        </form>
    </div>
    <div class="grid">
        @foreach($movies as $item)
            @php $show = $item['show']; @endphp
            <div class="card">
                <a href="{{ route('movies.show', $show['id']) }}" style="text-decoration: none; color: inherit;">
                    @if(!empty($show['image']['medium']))
                        <img src="{{ $show['image']['medium'] }}" alt="{{ $show['name'] }}">
                    @endif
                    <h3>{{ $show['name'] }}</h3>
                </a>
                <p>Rating: ⭐ {{ $show['rating']['average'] ?? 'N/A' }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
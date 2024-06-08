<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Duyurular</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #383333;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 900px;
            padding: 1rem;
        }
        .card {
            background-color: #fff;
            border-radius: 0.75rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .card-title {
            margin: 0;
            font-size: 1.5rem;
        }
        .card-body {
            background-color: #fff;
            padding: 1rem;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e9ecef;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .card-footer {
            background-color: #f1f1f1;
            padding: 1rem;
            text-align: right;
        }
        .search-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .search-container input {
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 1px solid #ccc;
        }
        .search-container button {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.5rem;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .search-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Duyurular Listesi</h3>
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Başlığa göre ara">
                    <button onclick="searchAnnouncements()">Ara</button>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>Açıklama</th>
                            <th>İçerik</th>
                        </tr>
                    </thead>
                    <tbody id="announcementTable">
                        @foreach ($announcements->sortBy('role') as $announcement)
                            <tr>
                                <td>{{ $announcement->tittle }}</td>
                                <td>{{ $announcement->description }}</td>
                                <td>{{ $announcement->content }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function searchAnnouncements() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const table = document.getElementById('announcementTable');
            const rows = table.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const tittleCell = rows[i].getElementsByTagName('td')[0];
                if (tittleCell) {
                    const tittle = tittleCell.textContent.toLowerCase();
                    rows[i].style.display = tittle.includes(input) ? '' : 'none';
                }
            }
        }
    </script>
</body>
</html>

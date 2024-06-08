<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mesajlar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #584242;
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
        .mailbox-messages a {
            color: #007bff;
            text-decoration: none;
        }
        .mailbox-messages a:hover {
            text-decoration: underline;
        }
        .mailbox-name {
            font-weight: 500;
        }
        .mailbox-subject {
            color: #555;
        }
        .mailbox-date {
            font-size: 0.875rem;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Admine Ulaş</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Kimden</th>
                                <th>Sohbeti Aç</th>
                                <th>İçerik</th>
                                <th>Son Mesaj Alım</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($conversations as $conversation)
                                <tr>
                                    <td class="mailbox-name">Kimden: <a href="read-mail.html">{{ $conversation->sender_email }}</a></td>
                                    <td class="mailbox-name"><a href="{{ route('usermessageChat', ['sender_id' => $conversation->sender_id]) }}">Sohbeti Aç</a></td>
                                    <td class="mailbox-subject">İçerik: {{ substr($conversation->last_message_content, 0, 50) }}...</td>
                                    <td class="mailbox-date">Son mesaj alım: {{ $conversation->last_message_time }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ユーザー一覧</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 720px; margin: 2rem auto; padding: 0 1rem; color: #1a1a1a; }
        h1 { font-size: 1.25rem; font-weight: 600; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { text-align: left; padding: 0.5rem 0.75rem; border-bottom: 1px solid #e5e5e5; }
        th { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; color: #666; }
        a { color: #2563eb; }
    </style>
</head>
<body>
    <h1>ユーザー一覧</h1>
    <p><a href="/">トップへ</a></p>
    @if ($users->isEmpty())
        <p>ユーザーがいません。</p>
    @else
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>名前</th>
                    <th>メール</th>
                    <th>登録日時</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at?->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>

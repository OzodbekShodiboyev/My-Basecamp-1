<head>
    <link rel="stylesheet" href="users.css">
</head>
<x-app-layout>
    <div class="container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dat)
                <tr>
                    <td>{{$dat->name}}</td>
                    <td>{{$dat->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
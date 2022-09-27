<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ url('/store') }}" method="POST">
                        @csrf
                        
                        <input type="text" name="data" required="">
                    </form>

                    <table class="table">
                        <tr>
                            <th>index</th>
                            <th>data</th>
                        </tr>
                        @foreach (App\Models\Test::all() as $test)
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>{{ $test->data }}</td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

@extends('layout.layout')


@section('content')

    <main>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"><div style='text-align:center; margin-top:30px;'>
            <div style='display: flex; justify-content: center; align-items: center; height: 100vh;'>
            <div style='border: 2px solid #3498db; padding: 20px;'>
            <button style='margin-right:20px; padding:15px 30px; font-size:20px;' ><a href='/login'>Login</a></button>
            </div>
            <div style='border: 2px solid #3498db; padding: 20px;'>
                <button style='padding:15px 30px; font-size:20px;'><a href='/signup'>Sign Up</a></button>
            </div>
        </div>
        </div>
    </main>

@endsection


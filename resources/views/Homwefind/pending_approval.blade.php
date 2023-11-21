<!-- @extends('layout.layout')


@section('content') -->
  <title>Pending Approval</title>


    <style>
        /* Styles for the loading spinner */
        .loading {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 3px solid rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            border-top-color: #000;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
                /* Define the overall layout */

    </style>

<body>
    <div id='pending'>
        <h1>Your signup is pending approval</h1>
        <p>We will review your information shortly.</p>
        <div class="loading"></div>
    </div>
    <!-- @endsection -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('style.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            header {
                text-align: center;
            }
        </style>
    </head>
    <body class="antialiased">
        
        <header>
            <h1>Rocket Wiki &#x1F4D1; </h1>
            <p>Welcome to abort my consumtion of my rocket API!</p>
        </header>

        <main>
            <h2>Rockets 🚀</h2>
            <ul>
                <li><a href="/rocket/1">/rocket/{id}</a></li>
                <li><a href="/rockets">/rockets</a></li>
                <li><a href="/rockets/active/false">/rockets/active/{active}</a></li>
                <li><a href="/rockets/success/50/100">/rockets/success/{min}/{max}</a></li>
            </ul>

            <h2>Manufacturer 🏭</h2>
            <ul>  
                <li><a href="/manufacturer/1">/manufacturer/{id}</a></li>
                <li><a href="/manufacturer/name/ESA">/manufacturer/name/{name}</a></li>
            </ul>
            <i>To see the raw (non-consumed) api data, please put '/api/' in front of the request</i>
        </main>

        <section>
        <div class="rocket">
            <div class="rocket-body">
                <div class="body"></div>
                <div class="fin fin-left"></div>
                <div class="fin fin-right"></div>
                <div class="window"></div>
            </div>
            <div class="exhaust-flame"></div>
            <ul class="exhaust-fumes">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="star">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        </section>

        <!--
/* GET multiple rockets */
Route::get('/rockets', [RocketController::class, "getAllRockets"]);
Route::get('/rockets/active/{active}', [RocketController::class, "getRocketsByActivity"]);
Route::get('/rockets/success/{min}/{max}', [RocketController::class, "getRocketsBetweenSuccessRates"]);
Route::get('/rockets/manufacturer/{id}', [RocketController::class, "getRocketsByManufacturerId"])/*->where('id', '[0-9]+')*/;
Route::get('/rockets/manufacturer/name/{name}', [RocketController::class, "getRocketsByManufacturerName"]);

/* GET one rocket */
Route::get('/rocket/{id}', [RocketController::class, "getRocketById"]);

/* GET requests for the manufacturer */
Route::get('/manufacturer/{id}', [RocketController::class, "getManufacturerById"])/*->where('naam', '^[A-Za-z]+$')*/;
Route::get('/manufacturer/name/{name}', [RocketController::class, "getManufacturerByName"])/*->where('naam', '^[A-Za-z]+$')*/;
        -->
    </body>
    <style>
    

    </style>
</html>

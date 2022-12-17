<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocket Manufacturer Wiki</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $manufacturer = json_decode($data, true);
        $key = key($manufacturer);
        $manufacturer = $manufacturer[$key];
    ?>
    <a href="/">← Back to home</a>
    <section id="dataSection">
        <div class="container">
            <div class="card">
                    <div class="card-header">
                        <img src="{{ $manufacturer['logo'] }}" alt="manufacturer-image" />
                    </div>
                    <div class="card-body">
                        <span class="tag tag-teal">Manufacturer &#x1F3ED;;</span>
                        <p>ID: {{ $manufacturer['id'] }}</p>
                    
                        <h3>{{ $manufacturer['name'] }}</h3>

                    </div>
            </div>
        </div>
    </section>
        
     
</body>
</html>
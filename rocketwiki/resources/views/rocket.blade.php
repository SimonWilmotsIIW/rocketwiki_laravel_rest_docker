<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocket Wiki</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $rocket = json_decode($data, true);
    ?>
    <a href="/">← Back to home</a>
    <section id="dataSection">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <img src="{{ $rocket['image'] }}" alt="rocket-image" />
                </div>
                <div class="card-body">
                    <span class="tag tag-purple">Rocket &#x1F680;</span>
                    <p>ID: {{ $rocket['id'] }}</p>
                
                    <h3>{{ $rocket['name'] }}</h3>
                    <p>
                        {{ $rocket['description'] }}
                    </p>

                    <h4>Active</h4>
                    <p>{{ boolval($rocket['active']) ? 'True' : 'False' }}</p>

                    <h4>Cost per launch</h4>
                    <p>{{ $rocket['cost_per_launch'] }}</p>

                    <h4>First flight</h4>
                    <p>{{ $rocket['first_flight'] }}</p>

                    <!--<h4>Manufacturer ID</h4>
                    <p>{{ $rocket['manufacturer_id'] }}</p>-->

                    <h4>Success rate</h4>
                    <p>{{ $rocket['success_rate_pct'] }} %</p>
                </div>
            </div>
        </div>
    </section>
        
     
</body>
</html>
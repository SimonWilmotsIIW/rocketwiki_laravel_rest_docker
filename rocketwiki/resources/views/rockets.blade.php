<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
</head>
<body>
    <?php
        $data = json_decode($data, true);

    ?>

    @foreach ($data as $rocket)
        <div>
            <b>ID</b>
            <p>{{ $rocket['id'] }}</p>

            <b>Name</b>
            <p>{{ $rocket['name'] }}</p>

            <b>Description</b>
            <p>{{ $rocket['description'] }}</p>

            <b>Active</b>
            <p>{{ $rocket['active'] }}</p>

            <b>Cost per launch</b>
            <p>{{ $rocket['cost_per_launch'] }}</p>

            <b>First flight</b>
            <p>{{ $rocket['first_flight'] }}</p>

            <b>Manufacturer ID</b>
            <p>{{ $rocket['manufacturer_id'] }}</p>

            <b>Image</b>
            <img src="{{ $rocket['image'] }}" />

            <b>Success rate</b>
            <p>{{ $rocket['success_rate_pct'] }}</p>

        </div>
        <br /><br /><br />
    @endforeach
        
     
</body>
</html>
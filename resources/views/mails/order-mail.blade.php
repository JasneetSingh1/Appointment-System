<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment</title>
</head>
<body>
    (Just in!
    An appointment has been made.
    <br>
    Name :{{$appointment->client_name}}
    Phone :{{$appointment->client_email}}
    Email :{{$appointment->client_phone}}
    Service :{{$appointment->service->name}} ({{$appointment->service->duration}} minutes) at ({{$appointment->start_time}}) to ({{$appointment->end_time}})
    Aircraft Location : {{$appointment->aircraft_location}}
    Aircraft Identifier :{{$appointment->aircraft_identifier}})
</body>
</html>
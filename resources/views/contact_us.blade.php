<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eltalhy</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
    padding: 2px;
}
</style>
<body>
    <table>
        <thead>
            <th>Name:</th>
            <th>Email:</th>
            <th>Message:</th>
        </thead>
        <tbody>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->message}}</td>
        </tbody>
    </table>
</body>
</html>

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
    border: 1px solid #00000000;
    padding: 2px;
}
</style>
<body>

<marquee behavior="scroll" direction="left" style="font-weight: bold" >please check this message from Eltalhy website :</marquee>

    <div class="table-responsive">
          <table class="table table-striped table-bordered ">
            <tbody>
              <tr>
                <td width='30%' class='label-view text-right' style="font-weight: bold">Name:</td>
                <td>{{$contact->name}} </td>
              </tr>
              <tr>
                <td width='30%' class='label-view text-right' style="font-weight: bold">Email:</td>
                <td>{{$contact->email}} </td>
              </tr>
              <tr>
                <td width='30%' class='label-view text-right' style="font-weight: bold">Message:</td>
                <td>{{$contact->message}} </td>
              </tr>
            </tbody>
          </table>
        </div>


</body>
</html>

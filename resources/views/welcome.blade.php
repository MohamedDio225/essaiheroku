<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acccueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <hr/>
    <div>
    
        <ul>
        @foreach($DonnerUser as $item)
        <li>{{$item->PrenomUser}} et {{$item->NomUser}}</li>
        @endforeach
        </ul>    
    </div>
        <form action="/insertiondb" method="post">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="nomutilisateur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" name="prenomutilisateur" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>

    
    </div>
    
    <img class=" tailleimagelogo" src="{{asset('/Images/carrou03.png')}}"  height="700" alt="community manager" />
</body>
</html>
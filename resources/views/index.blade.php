<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Contacts App</title>
</head>
<body>
    <div class="container-fluid">
        <div class="div-jumbotron-fluid bg-danger p-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-4 text-white">Lookup</h1>
                        <p class="lead text-white">A digital address book</p>
                    </div>
                    <div class="col-md-6">
                        <img src="img/address-book.png" alt="icon" style="width:128px;height:128px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('contacts.create')}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">First Name: </label>
                            <input type="text" name="f_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Last Name: </label>
                            <input type="text" name="l_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Address: </label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Phone: </label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Email: </label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-50 float-right">Create</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    @foreach($contacts as $contact)
                        <tr>
                            <td> {{$contact->f_name}} </td>
                            <td> {{$contact->l_name}} </td>
                            <td> {{$contact->address}} </td>
                            <td> {{$contact->email}} </td>
                            <td> {{$contact->phone}} </td>
                            <td>
                            <form method="post" action="{{ route('contacts.delete') }}" >
                                <input name="_method" type="hidden" value="post">
                                <input name="id" type="hidden" value="{{$contact->id}}">
                                {{ csrf_field() }}
                                <button type="hidden" class="btn btn-danger">DELETE</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@extends('layouts.admintemplate')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
                <h1 class="text-center">Booking board</h1>
                <div class="table-responsive-md">
                    <table class="table my-4">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date</th>
                                <th scope="col">Arriving Time</th>
                                <th scope="col">Leaving Time</th>
                                <th scope="col">Table</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($booking as $book)
                                <tr>
                                    <th scope="row">{{$book->id}}</th>
                                    <td>{{$book->name}}</td>
                                     <td>{{$book->phone}}</td>
                                    <td>{{$book->email}}</td>
                                     <td>{{$book->date}}</td>
                                      <td>{{$book->arrivingtime}}</td>
                                    <td>{{$book->leavingtime}}</td>
                                    <td>{{$book->table}}</td>
                                    <td>{{$book->status}}</td>
                                    <td>
                                        <form method="post" action="{{route('customer.update',$book->id)}}">
                                            @csrf
                                            @method('PUT')
                                            <input type="submit" name="submit" value="Confirm">
                                        </form>
                                        <form action="{{route('sendEmail')}}" method="post">
                                            @csrf
                                          <input type="hidden" value="{{$book->email}}" name="email">  
                                         <input type="submit" name="submit" value="Email">
                                        </form>
                                       <form method="post" action="{{route('cancel',$book->id)}}">
                                            @csrf
                                            @method('PUT')
                                            <input type="submit" name="submit" value="Cancel">
                                        </form>
                                   </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection

@extends('home')

@section('index')
    <button type="button" class="btn btn-primary"><a href="{{route('phone.index')}}"
                                                     style="color: white"><-Back</a>
    </button>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Image Phone</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
        </tr>
        </thead>
        <tbody>
        @if($cart)
        @foreach ($cart->items as $items)
            <tr>
                <td><img src="{{asset('storage/'.$items['item']->image)}}" style="width: 40px;height: 40px"></td>
                <td>{{$items['item']->name}}</td>
                <td>{{$items['itemPrice']}}</td>
                <td>{{$items['itemQty']}}</td>
            </tr>
        @endforeach
            <tr>
                <td colspan="2">Total Price</td>
                <td colspan="2">{{$cart->totalPrice}}</td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection

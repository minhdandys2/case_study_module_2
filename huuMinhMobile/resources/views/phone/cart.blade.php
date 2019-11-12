@extends('home')

@section('index')
    <a class="btn btn-primary" href="{{route('phone.index')}}"
                                                     style="color: white"><-@lang('message.back')</a>
    <hr>
    @if($cart)
    <p>@lang('message.totalQty'): {{$cart->totalQty}}</p>
        @else
    <p>@lang('message.totalQty'): 0</p>
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">@lang('message.image')</th>
            <th scope="col">@lang('message.name')</th>
            <th scope="col">@lang('message.price')</th>
            <th scope="col">@lang('message.qty')</th>
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
                <td><a href="{{route('cart.delete',$items['item']->id)}}">Delete</a></td>
            </tr>
        @endforeach
            <tr>
                <td colspan="2">@lang('message.totalPrice')</td>
                <td colspan="2">{{$cart->totalPrice}}</td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection

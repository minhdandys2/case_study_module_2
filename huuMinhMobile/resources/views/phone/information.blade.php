@extends('home')

@section('index')
    <button type="button" class="btn btn-primary"><a href="{{route('phone.index')}}"
                                                     style="color: white">@lang('message.Back')</a>
    </button>
    <hr>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="{{asset('storage/'.$phone->image)}}" style="height: 230px" class="card-img" alt="phone">
                <p class="card-text">@lang('message.Price'): <span style="color: red;font-size: 20px">{{$phone->price}} đ</span></p>
                <a href="{{route('phone.addToCart',$phone->id)}}" class="btn btn-primary">@lang('message.Add')</a>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">@lang('message.Name'): {{$phone->name}}</h5>
                    <p class="card-text">@lang('message.Color'): {{$phone->color}}</p>
                    <p class="card-text">Ram: {{$phone->ram}} GB</p>
                    <p class="card-text">@lang('message.Memory'): {{$phone->internal_memory}} GB</p>
                    <p class="card-text">@lang('message.SIM'): {{$phone->sim}}</p>
                    <p class="card-text">@lang('message.Screen'): {{$phone->screen_size}} inch</p>
                    <a href="{{route('phone.edit',$phone->id)}}"
                       class="btn btn-primary mb-1">@lang('message.Edit')</a>
                    <a href="{{route('phone.delete',$phone->id)}}"
                       class="btn btn-primary mb-1">@lang('message.Delete')</a><br>

                </div>
            </div>
        </div>
    </div>
@endsection

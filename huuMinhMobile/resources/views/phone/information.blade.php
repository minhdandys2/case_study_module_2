@extends('home')

@section('index')
    <a class="btn btn-primary" href="{{route('phone.index')}}"
       style="color: white"><-@lang('message.back')</a>
    <hr>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="{{asset('storage/'.$phone->image)}}" style="height: 230px" class="card-img" alt="phone">
                <p class="card-text">@lang('message.price'): <span style="color: red;font-size: 20px">{{$phone->price}} đ</span>
                </p>
                <a href="{{route('phone.addToCart',$phone->id)}}" class="btn btn-primary">@lang('message.add')</a>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">@lang('message.name'): {{$phone->name}}</h5>
                    <p class="card-text">@lang('message.color'): {{$phone->color}}</p>
                    <p class="card-text">Ram: {{$phone->ram}} GB</p>
                    <p class="card-text">@lang('message.memory'): {{$phone->internal_memory}} GB</p>
                    <p class="card-text">@lang('message.SIM'): {{$phone->sim}}</p>
                    <p class="card-text">@lang('message.screen'): {{$phone->screen_size}} inch</p>
                    @can('crud-user')
                    <a href="{{route('phone.edit',$phone->id)}}"
                       class="btn btn-primary mb-1" >@lang('message.edit')</a>
                    <a href="{{route('phone.delete',$phone->id)}}"
                       class="btn btn-primary mb-1" onclick="return confirm('Bạn có chắc xóa không?')">@lang('message.delete')</a><br>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection

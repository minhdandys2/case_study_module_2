@extends('home')

@section('index')
    <a href="{{route('phone.create')}}" class="btn btn-success">@lang('message.Create')</a>
    <br>
    <hr>
    <div class="row">
        @foreach($phones as $phone)
            <div class="col-12 col-md-4 d-flex justify-content-center" style="margin-top: 20px">

                <div class="card" style="width: 15rem;">
                    <a href="{{route('phone.information',$phone->id)}}">
                        <img src="{{asset('storage/'.$phone->image)}}" style="width: 238px;height: 200px"
                             class="card-img-top" alt="Image_phone">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$phone->name}}</h5>
                        <p>Ram: {{$phone->ram}} GB</p>
                        <p>{{$phone->price}} đ</p>
                        <a href="{{route('phone.addToCart',$phone->id)}}" class="btn btn-primary">@lang('message.Add')</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    {{$phones->links()}}
@endsection


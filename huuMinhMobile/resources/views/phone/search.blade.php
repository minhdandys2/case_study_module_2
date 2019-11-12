@extends('home')

@section('index')
    <a href="{{route('phone.create')}}" class="btn btn-success">@lang('message.create')</a>
    <br>
    <hr>
    <div class="row">
        @foreach($phones as $phone)
            <div class="col-12 col-md-4 d-flex justify-content-center" style="margin-top: 20px">
                <div class="card" style="width: 15rem;">
                    <a href="{{route('phone.information',$phone->id)}}">
                        <img src="{{asset('storage/'.$phone->image)}}" style="width: 238px;height: 260px"
                             class="card-img-top" alt="Image_phone">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$phone->name}}</h5>
                        <p>{{$phone->price}}$</p>
                        <a href="#" class="btn btn-primary">@lang('message.add')</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    {{$phones->links()}}
@endsection


@extends('home')

@section('index')
    <button type="button" class="btn btn-primary"><a href="{{route('phone.index')}}"
                                                     style="color: white"><-Back</a>
    </button>
    <hr>
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control
                @if ($errors->has('name'))
                        border-danger
                @endif
                        " id="name" name="name" placeholder="name">
                    @if ($errors->has('name'))
                        <p class="text-danger">
                            <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                                 style="width: 20px ;height: 20px">
                            {{$errors->first('name')}}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control
                @if ($errors->has('color'))
                        border-danger
                @endif
                        " id="color" name="color" placeholder="color">
                    @if ($errors->has('color'))
                        <p class="text-danger">
                            <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                                 style="width: 20px ;height: 20px">
                            {{$errors->first('color')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="ram">Ram</label>
                    <input type="text" class="form-control
                @if ($errors->has('ram'))
                        border-danger
                @endif
                        " id="ram" name="ram" placeholder="ram">
                    @if ($errors->has('ram'))
                        <p class="text-danger">
                            <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                                 style="width: 20px ;height: 20px">
                            {{$errors->first('ram')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="internal_memory">Internal memory</label>
                    <input type="text" class="form-control
                @if ($errors->has('internal_memory'))
                        border-danger
                @endif
                        " id="internal_memory" name="internal_memory" placeholder="internal_memory">
                    @if ($errors->has('internal_memory'))
                        <p class="text-danger">
                            <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                                 style="width: 20px ;height: 20px">
                            {{$errors->first('internal_memory')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="sim">Number of sims</label>
                    <input type="text" class="form-control
                @if ($errors->has('sim'))
                        border-danger
                @endif
                        " id="sim" name="sim" placeholder="sim">
                    @if ($errors->has('sim'))
                        <p class="text-danger">
                            <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                                 style="width: 20px ;height: 20px">
                            {{$errors->first('sim')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="screen_size">Screen size</label>
                    <input type="text" class="form-control
                @if ($errors->has('screen_size'))
                        border-danger
                @endif
                        " id="screen_size" name="screen_size" placeholder="screen_size">
                    @if ($errors->has('screen_size'))
                        <p class="text-danger">
                            <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                                 style="width: 20px ;height: 20px">
                            {{$errors->first('screen_size')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control
                @if ($errors->has('price'))
                        border-danger
                @endif
                        " id="price" name="price" placeholder="price">
                    @if ($errors->has('price'))
                        <p class="text-danger">
                            <img src="https://img.icons8.com/color/50/000000/high-importance.png"
                                 style="width: 20px ;height: 20px">
                            {{$errors->first('price')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="image">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection

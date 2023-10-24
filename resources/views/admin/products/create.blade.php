@extends('layout.layout')

@section('title')
    {{-- Your page title --}}
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <p class="text-muted font-14">
                {{__('User create')}}
            </p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('user.store')}}" class="parsley-examples" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label">{{__('ФИО')}}</label>
                            <input type="text" class="form-control" name="full_name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('Дата рождения')}}</label>
                            <input type="date" class="form-control" name="birth_date" value="{{old('birth_date')}}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{__('Номер телефон')}}</label>
                            <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">{{__('Avatar')}}</label>
                            <input type="file" class="form-control" name="avatar" value="{{old('avatar')}}"/>
                        </div>

                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{__('Create')}}</button>
                </div>
                
            </form>

        </div>
    </div>
@endsection

@extends('layout.layout')

@section('title')
    {{-- Your page title --}}
@endsection
@section('content')
    <style>
        .delete-datas{
            border-radius: 8px;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="dropdown float-end">
                <a class="form_functions btn btn-success" href="{{route('user.create')}}">{{__('Create')}}</a>
            </div>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('дата ')}}</th>
                        <th>{{__('ФИО')}}</th>
                        <th>{{__('Общая сумма')}}</th>
                        <th>{{__('Купоны')}}</th>
                        {{-- <th>{{__('Phone number')}}</th> --}}
                        {{-- <th class="text-center">{{__('Functions')}}</th> --}}
                    </tr>
                </thead>
                <tbody class="table_body">
                @php
                    $i = 0
                @endphp
                @foreach($users as $user)
                    @php
                        $i++
                    @endphp
                    <tr>
                        {{-- <th scope="row">
                            <a class="show_page" href="{{ route('user.show', $user->id) }}">
                                {{$i}}
                            </a>
                        </th> --}}
                        <td class="text-center">
                            adawdaw
                        </td>
                        <td>
                            dwadaw
                        </td>
                        <td>

                            wdawd
                        </td>
                        <td>
                            wdawdaw
                        </td>
                        <td>
                            awdaw
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

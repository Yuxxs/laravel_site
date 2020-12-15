@extends('layouts.blank')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <p></p>
            </div>
        <div class="row justify-content-center">
            <p></p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Message list') }}
                    </div>
                    <div class="card-body">

                        <table border="3">
                            <thead>
                            <tr>
                                <th> Id</th>
                                <th> Text</th>
                                <th> Creation date</th>
                            </tr>
                            </thead>
                            <tbody>

                        @foreach($messages as $message)

                                <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->text }}</td>
                                <td>{{ $message->created_at }}</td>
                                </tr>

                        @endforeach

                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                    <div class="card-header">{{ __('Enter message') }}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('saveMessage')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="text" placeholder="Text">
                            </div>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

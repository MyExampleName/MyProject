@extends('layouts.templateWithoutSlider')

@section('content')

    <div class="container">
        <div class="row">
            {{$tr->translate("ru", App::getLocale(),"$podItem->text")}}
        </div>
    </div>
@endsection

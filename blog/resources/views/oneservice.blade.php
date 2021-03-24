@extends('layouts.templateWithoutSlider')

@section('content')
    <div class="container">
        <div class="row">
            <a class="noLineA" style="font-family: 'Roboto', sans-serif; font-size: 20pt; margin: 15pt; color: #333D47;" href="http://127.0.0.1:8000/{{App::getLocale()}}/service/{{$service->id}}">{{$tr->translate('ru', App::getLocale(), $service->name)}}</a>
        </div>
        <div class="row">
            @foreach($podService as $item)
                <div class="my-col">
                    <a href="http://127.0.0.1:8000/{{App::getLocale()}}/podservice/{{$item->id}}" class="oneService">
                        {{$tr->translate("ru", App::getLocale(),"$item->title")}}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection


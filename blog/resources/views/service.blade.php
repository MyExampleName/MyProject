@extends('layouts.templateWithoutSlider')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($service as $item)
                <a href="http://127.0.0.1:8000/{{App::getLocale()}}/service/{{$item->id}}" class="btn">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body" style="min-height: 150px; border: 1px solid #85C121;">
                                    <h5 class="card-title">{{$tr->translate("ru", App::getLocale(),$item->name)}}</h5>
                                    <p class="card-text">
                                        <ul>
                                            @foreach($podService as $podItem)
                                                <?php
                                                if($podItem->idService == $item->id){
                                                    echo  '<li>'.$tr->translate("ru", App::getLocale(),$podItem->title).'</li>';
                                                }
                                                ?>
                                            @endforeach
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

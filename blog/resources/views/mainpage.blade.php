@extends('layouts.template')

@section('content')

    <div class="container">
        <hr style="margin-top: 80px; background-color: #85C121;">
        <div class="row">
            <div class="col">
                <p class="my-p" style="font-size: 22pt; text-transform: uppercase;">{{__('mainpage.section1_1')}}</p>
            </div>
        </div>
        <div class="row">
            <p class="pText">
                {{__('mainpage.section1_2')}}
            </p>
        </div>
        <div style="margin-top: 50px; margin-bottom: 30px;" class="row justify-content-md-center">

            <div class="col col-lg-2">
                <button class="myBtn btn ">
                    {{__('mainpage.btnAbout_company')}}
                </button>
            </div>
            <div class="col col-lg-2">
                <button class="myBtn btn ">
                    {{__('mainpage.btnQuestion')}}
                </button>
            </div>
        </div>
        <hr style="background-color: #85C121;">
        <div class="row" style="margin-bottom: 40px; margin-top: 80px;">
            <div class="col-md-4">
                <p class="my-p" style="font-size: 22pt;">{{$tr->translate("ru", App::getLocale(), "Услуги")}}</p>
            </div>
        </div>
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

        <div style="margin-top: 50px; margin-bottom: 30px;" class="row justify-content-md-center">

            <div class="col col-lg-2">
                <a href="http://127.0.0.1:8000/{{App::getLocale()}}/service" class="myBtn btn ">
                    {{$tr->translate("ru", App::getLocale(), "Все услуги")}}
                </a>
            </div>
        </div>

        <div class="row" style="margin-bottom: 40px; margin-top: 100px;">
            <div class="col-md-12">
                <p class="my-p">{{$tr->translate("ru", App::getLocale(), "Мы руководствуемся несколькими принципами в своей работе")}}</p>
            </div>
        </div>

        @foreach($principle as $item)
            <a href="" class="btn">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card my-card" style="width: 18rem;">
                            <div class="card-body" style="min-height: 150px; border: 1px solid #85C121;">
                                <h5 class="card-title">{{$item->id}}: {{$tr->translate("ru", App::getLocale(),$item->title)}}</h5>
                                <p class="card-text">
                                    {{$tr->translate("ru", App::getLocale(),$item->text)}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection

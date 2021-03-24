@extends("layouts.templateWithoutSlider")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <p class="my_text">
                {{__('blog.blogText')}}
            </p>
        </div>
    </div>

    <div class="row">
        @foreach($posts as $item)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img class="card-img-top" src="<?=$item->img?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$tr->translate("ru", App::getLocale(),"$item->title")?></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{App::getLocale()}}/blogi/<?=$item->id?>" class="btn btn-primary"><?=$tr->translate("ru", App::getLocale(),"Подробнее")?></a>
                            </div>
                            <small class="text-muted"><?=$item->dateOfPosts?></small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

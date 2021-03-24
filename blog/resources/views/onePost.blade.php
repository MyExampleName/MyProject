@extends('layouts.templateWithoutSlider')

@section('content')
    <?php
    use Illuminate\Support\Facades\App;
    use Dejurin\GoogleTranslateForFree;
    $tr = new GoogleTranslateForFree();

    ?>
    <div class="container">
        <div class="row">
            <?=$tr->translate("ru", App::getLocale(),"$item->Post")?>
        </div>
    </div>
@endsection

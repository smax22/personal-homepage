@extends('layouts.master')
@inject('localized_texts_repository', 'App\Http\Contracts\LocalizedTextsRepositoryInterface')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                {!! $localized_texts_repository->getLocalizedText('impressum', App::getLocale())->text !!}
            </div>
        </div>
    </div>

@endsection
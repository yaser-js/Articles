@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}} @endsection

@section('content')
<article>
    <section class="section-header bg-primary text-white pb-7 pb-lg-11">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-3 mb-4 px-lg-5">
                        {{$$module_name_singular->name}}
                    </h1>
                    <div class="post-meta">
                        <span class="font-weight-bold mr-3">
                            {{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}
                        </span>
                        <span class="post-date mr-3">
                            {{$$module_name_singular->published_at_formatted}}
                        </span>
                        <span class="font-weight-bold">
                            7 min read
                        </span>
                    </div>

                    @include('frontend.includes.messages')
                </div>
            </div>
        </div>
        <div class="pattern bottom"></div>
    </section>

    @php
    $post_details_url = route('frontend.posts.show',[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
    @endphp
    <div class="section section-sm bg-white pt-5 text-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <img class="img-fluid" src="{{$$module_name_singular->featured_image}}" alt="{{$$module_name_singular->name}}">

                    <p>
                        {!!$$module_name_singular->content!!}
                    </p>
                    <p>
                        <span class="font-weight-bold">
                            Category:
                        </span>

                        <a href="{{route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])}}" class="badge badge-sm badge-warning text-uppercase px-3">{{$$module_name_singular->category_name}}</a>
                    </p>

                    <p>
                        @foreach ($$module_name_singular->tags as $tag)
                        <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" class="badge badge-sm badge-info text-uppercase px-3">{{$tag->name}}</a>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-sm-center align-items-center py-3 mt-3">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-9 col-md-6">
                        <h6 class="font-weight-bolder d-inline mb-0 mr-3">Share:</h6>

                        @php $title_text = $$module_name_singular->name; @endphp

                        <button class="btn btn-sm mr-3 btn-icon-only btn-pill btn-twitter d-inline" data-sharer="twitter" data-via="LaravelStarter" data-title="{{$title_text}}" data-hashtags="LaravelStarter" data-url="{{url()->full()}}" data-toggle="tooltip" title="Share on Twitter" data-original-title="Share on Twitter">
                            <span class="btn-inner-icon"><i class="fab fa-twitter"></i></span>
                        </button>

                        <button class="btn btn-sm mr-3 btn-icon-only btn-pill btn-facebook d-inline" data-sharer="facebook" data-hashtag="LaravelStarter" data-url="{{url()->full()}}" data-toggle="tooltip" title="Share on Facebook" data-original-title="Share on Facebook">
                            <span class="btn-inner-icon"><i class="fab fa-facebook-f"></i></span>
                        </button>
                    </div>

                    <div class="col-3 col-md-6 text-right"><i class="far fa-bookmark text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark story"></i></div>
                </div>
            </div>
        </div>
    </div>
</article>

@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush

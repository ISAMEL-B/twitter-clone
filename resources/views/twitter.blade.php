@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-3">
        <div class="overflow-hidden card">
            <div class="pt-3 card-body">
                <ul class="gap-2 nav nav-link-secondary flex-column fw-bold">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">
                            <span>Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Explore</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Feed</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Terms</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Support</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Settings</span></a>
                    </li>
                </ul>
            </div>
            <div class="py-2 text-center card-footer">
                <a class="btn btn-link btn-sm" href="#">View Profile </a>
            </div>
        </div>
    </div>
    <div class="col-6">

        {{-- where success message was, then including them here [by #blading] from a deferent location [roose coupling] --}}
        @include('share.success_message')
        @include('share.submit_twit')

        <hr>

        {{-- loop to fetch twits and display messages --}}
        @foreach ($twit as $twits)
            <div class="mt-3">
                @include('share.twitter_card')
            </div>
        @endforeach

        <div class="mt-2">
            {{-- Showing pagination belloow the page for next and previous navigation --}}
            {{$twit->links() }}
        </div>

    </div>
    <div class="col-3">
        @include('share.search_bar')
        @include('share.follow_box')
    </div>
</div>
@endsection


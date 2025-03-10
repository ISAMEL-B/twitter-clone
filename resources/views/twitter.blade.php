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

        {{-- where card was --}}
        @include('share.twitter_card')
        </div>

        @endforeach {{-- END of a loop to fetch twits and display messages --}}

        <div class="mt-2">
            {{-- Showing pagination belloow the page for next and previous navigation --}}
            {{$twit->links() }}
        </div>

    </div>
    <div class="col-3">
        <div class="card">
            <div class="pb-0 border-0 card-header">
                <h5 class="">Search</h5>
            </div>
            <div class="card-body">
                <input placeholder="...
                " class="form-control w-100" type="text"
                    id="search">
                <button class="mt-2 btn btn-dark"> Search</button>
            </div>
        </div>
        <div class="mt-3 card">
            <div class="pb-0 border-0 card-header">
                <h5 class="">Who to follow</h5>
            </div>
            <div class="card-body">
                <div class="gap-2 mb-3 hstack">
                    <div class="avatar">
                        <a href="#!"><img class="avatar-img rounded-circle"
                                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                    </div>
                    <div class="overflow-hidden">
                        <a class="mb-0 h6" href="#!">Isa Brother</a>
                        <p class="mb-0 small text-truncate">@Isamel</p>
                    </div>
                    <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                            class="fa-solid fa-plus"> </i></a>
                </div>
                <div class="gap-2 mb-3 hstack">
                    <div class="avatar">
                        <a href="#!"><img class="avatar-img rounded-circle"
                                src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                    </div>
                    <div class="overflow-hidden">
                        <a class="mb-0 h6" href="#!">Isa Brother</a>
                        <p class="mb-0 small text-truncate">@Isamel</p>
                    </div>
                    <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                            class="fa-solid fa-plus"> </i></a>
                </div>
                <div class="mt-3 d-grid">
                    <a class="btn btn-sm btn-primary-soft" href="#!">Show More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


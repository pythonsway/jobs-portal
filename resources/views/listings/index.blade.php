{{-- layout instead of component: --}}
{{-- @extends('layout') --}}
{{-- @section('content') --}}

<x-layout>
    @if (!Auth::check())
    @include('partials._hero')
    @endif

    @include('partials._search')
    <h2 class="text-2xl font-bold ml-2 p-5">{{$heading}}:</h2>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($listings) == 0)

        @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
        @endforeach

        @else
        <p>No listings found</p>

        @endunless
    </div>
    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>

</x-layout>
{{-- @endsection --}}
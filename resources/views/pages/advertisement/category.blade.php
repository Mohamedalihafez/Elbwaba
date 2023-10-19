@extends('layouts.master.master')

@section('css')
<style>
    @import url('https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css');

ul.ul-cards {
    width: min(100%, 60rem);
    margin-inline: auto;
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    list-style: none;
    justify-content: center;
}
ul.ul-cards>a{
    --bg-color: #ffffff;
    --text-color: #333;
    --padding: 1rem;
    --circle-size: 5rem;
    --circle-expand: 1rem;
    --flap-height: 1.25rem;
    --flap-offset: 0.5rem;
    max-width: 15rem;
    margin-top: calc(var(--circle-size) / 2 + var(--circle-expand));
    margin-bottom: var(--flap-offset);
    background-color: var(--bg-color);
    background-image: linear-gradient(to bottom left, transparent 50%, rgba(0 0 0  / .125));
    border-radius: var(--padding);
    padding: var(--padding);

    --bs-rim: inset -0.1rem 0.1rem 0.1rem rgb(255 255 255 / .5);
    --bs-card-spread: 0.25rem;
    --bs-card-color:  rgb(0 0 0 / 0.02);
    --bs-card: 
        -0.1rem 0.1rem var(--bs-card-spread) var(--bs-card-color),
        -0.2rem 0.2rem var(--bs-card-spread) var(--bs-card-color),
        -0.3rem 0.3rem var(--bs-card-spread) var(--bs-card-color),
        -0.4rem 0.4rem var(--bs-card-spread) var(--bs-card-color),
        -0.5rem 0.5rem var(--bs-card-spread) var(--bs-card-color),
        -0.6rem 0.6rem var(--bs-card-spread) var(--bs-card-color),
        -0.7rem 0.7rem var(--bs-card-spread) var(--bs-card-color),
        -0.8rem 0.8rem var(--bs-card-spread) var(--bs-card-color),
        -0.9rem 0.9rem var(--bs-card-spread) var(--bs-card-color),
        -1.0rem 1.0rem var(--bs-card-spread) var(--bs-card-color),
        -1.1rem 1.1rem var(--bs-card-spread) var(--bs-card-color),
        -1.2rem 1.2rem var(--bs-card-spread) var(--bs-card-color),
        -1.3rem 1.3rem var(--bs-card-spread) var(--bs-card-color),
        -1.4rem 1.4rem var(--bs-card-spread) var(--bs-card-color),
        -1.5rem 1.5rem var(--bs-card-spread) var(--bs-card-color),
        -1.6rem 1.6rem var(--bs-card-spread) var(--bs-card-color),
        -1.7rem 1.7rem var(--bs-card-spread) var(--bs-card-color),
        -1.8rem 1.8rem var(--bs-card-spread) var(--bs-card-color),
        -1.9rem 1.9rem var(--bs-card-spread) var(--bs-card-color);
    box-shadow: var(--bs-rim), var(--bs-card);
    display: grid;
    grid-template-rows: max-content max-content auto ;
    justify-items: center;
    text-align: center;
    gap: 0.75rem;
    position: relative;
}
ul.ul-cards>a>.icon{
    width: var(--circle-size);
    margin-top: calc(var(--circle-size) / -2 - var(--padding));
    aspect-ratio: 1;
    background-color: var(--bg-color);
    justify-self: center;
    border-radius: 50%;
    display: grid;
    place-items: center;
    box-shadow:var(--bs-rim), -0.1rem 0.1rem 0.25rem rgb(0 0 0 / .25);
}
ul.ul-cards>a>.icon>i{
    font-size: calc(var(--circle-size) / 3);
    color: var(--accent-color);
}
ul.ul-cards>a>.title{
    margin-top: 0.5rem;
    color: var(--accent-color);
    font-weight: 700;
}
ul.ul-cards>a>.content{
    font-size: 0.8rem;
    margin-bottom: 1rem;
    color: var(--text-color)
}
ul.ul-cards>a::before, ul>a::after{
    content: "";
    position: absolute;
}
/*  */
</style>
@endsection
@section('content')

<div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center">نوع الإعلان</h1>
        <ul class="ul-cards row ">
            @foreach ($categories as $category )
                <a href="{{ route('advertisement.add',['category' => $category->id])}}"  @if($category->id == 1) style=" --accent-color: #68AFFF" @elseif($category->id == 2)  style=" --accent-color: #FFA44B" @else style="--accent-color: #EF6968" @endif>
                    <div class="icon"><i class="fa-solid @if($category->id == 1)fa-building @elseif($category->id == 2)fa-star @else fa-business-time @endif"></i></div>
                    <div class="title">	{{ $category->name}}</div>
                </a>
            @endforeach
        </ul>
    </div>
</div>
@endsection


@section('js')

@endsection
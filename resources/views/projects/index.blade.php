@extends('plantilla')

@section('title', 'portafolio')

@section('content')

<div class="container">

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="display-4 mb-0">@lang('Projects')</h1>
    @auth
    <a class="btn btn-primary" href=" {{ route('projects.create') }} ">Crear Proyecto</a>
    @endauth
</div>

     <p class="lead text-secondary">Proyectos realizados Lorem
        ipsum dolor sit amet consectetur adipisicing elit.
        Aliquid, voluptatibus.</p>

    <ul class="list-group">

        @forelse ($projects as $project)
        <li class="list-group-item border-0 mb-3 shadow-sm">
            <a class="text-secondary d-flex justify-content-between align-items-center" href=" {{ route('projects.show', $project) }} ">

                <span class="bold">
                    {{ $project->title }}
                </span>
                <span class="text-black-50">
                    {{ $project->created_at->format('d/m/a') }}
                </span>
            </a>
        </li>


        @empty
        <li class="list-group-item border-0 mb-3 shadow-sm">
            no hay portafolios para mostrar</li>
        @endforelse
        {{ $projects->links() }}
    </ul>

</div>

@endsection






















{{--

@extends('plantilla')

@section('title', 'portafolio')

@section('content')

<div class="container">

<h1 class="display-4">@lang('Projects')</h1>

@auth
<a href=" {{ route('projects.create') }} ">Crear Proyecto</a>
@endauth


{{-- <ul>
  @isset($portfolio)
    @foreach ($portfolio as $portfolioItem) 
    <li>{{ $portfolioItem['title'] }}</li>
@endforeach
@else
<li>no hay portafolios para mostrar</li>
@endisset
</ul> --}}

{{-- @for()
@endfor

@while()
@endwhile

@switch()
@endswitch 

<ul class="list-group">
  
    @forelse ($projects as $project) 
    <li>{{ $portfolioItem['title'] }}
<pre> {{ $loop->last ? ' es el ultimo' : '' }} </pre>
</li> el loop sirve para ver entrar a propiedades de el objeto
<li>{{ $portfolioItem->title }} <br><small> {{ $portfolioItem->description }} </small> <br> {{ $portfolioItem->created_at->diffForHumans() }} </li>
<li class="list-group-item border-0 mb-3 shadow-sm">
    <a class="d-flex justify-content-between align-items-center" href=" {{ route('projects.show', $project) }} ">

        <span class="text-secondary bold">
            {{ $project->title }}
        </span>
        <span class="text-black-50">
            {{ $project->created_at->format('d/m/a') }}
        </span>
    </a>
</li>


@empty
<li class="list-group-item border-0 mb-3 shadow-sm">
    no hay portafolios para mostrar</li>
@endforelse
{{ $projects->links() }}
</ul>

</div>

@endsection --}}

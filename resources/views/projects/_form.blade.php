 @csrf

<div class="form-group">

    <label for="name"> Titulo del proyecto </label>
        <input class="form-control bg-light shadow-sm"
            id="name"
            type="text"
            name="title" 
            value= "{{ old('title', $project->title) }}">
    
</div>

<div class="form-group">

    <label for="name"> URL del proyecto </label>
        <input class="form-control bg-light shadow-sm"
            type="text"
            name="url"
            value= "{{ old('url', $project->url) }}">
    
</div>

<div class="form-group">

    <label for="name"> Descripción del proyecto </label>
        <textarea class="form-control bg-light shadow-sm"
        name="description">
        {{ old('description', $project->description) }}
        </textarea>
    
</div>


<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>

<a class="btn btn-link btn-block"  href=" {{ route('projects.index') }} ">Cancelar</a>
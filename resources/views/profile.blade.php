@extends('layouts.app')

@section('title', 'Modifier le profile')

@section('contents')

<hr/>
<div class="edit">
<form action="traitement" method='POST' enctype="multipart/form-data">
    <div> 
        <input type="file" name="pdp">
    </div>
    <div>
        <label for="" class="label">
            <span class="text-base label-text">
                Prenom
            </span>        
        </label>
        <input type="text" name="name" placeholder="{{auth()->user()->name}}" class="w-full input input-bordered">
    </div>
    <div>
        <label for="" class="label">
            <span class="text-base label-text">
                Nom
            </span>        
        </label>
        <input type="text" name="firstname" placeholder="{{auth()->user()->firstname}}" class="w-full input input-bordered">
    </div>
    <div>
        <label for="" class="label">
            <span class="text-base label-text">
                E-mail
            </span>        
        </label>
        <input type="text" name="email" placeholder="{{auth()->user()->email}}" class="w-full input input-bordered">
    </div>
    <div class="mt-6">
        <button type="submit" class="btn btn-block">
            Enregistrer
        </button>
    </div>

</form>
</div>
@endsection
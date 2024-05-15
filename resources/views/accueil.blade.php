@extends('layouts.utilisateur')

@section('title', 'Bienvenue "(Auth::user()->name)"')

@section('contents')
@if(Auth::check())


<div class="intro">
            <img src="image/gta-v-screenshot-pc-11_0000799604.jpg" alt="">
            <div class="title">
                <h1 id="red">TELECHARGER DES JEUX GRATUIT</h1>
                <h1>PRE-INSTALLER POUR PC</h1>
                <p>Ravie de vous voir à nouveaux, <strong>{{ ucfirst(strtolower(Auth::user()->name)) }} {{ strtoupper(Auth::user()->firstname) }}
                    <br>
                <button>BROWSE</button>
            </div>
        </div>
    </header>
    <main>
        <div class="body">
            <div class="input">
                <input type="text" placeholder="Your favorite..." id="input"><br>
                    <i class="fa fa-search" id="search"></i>
                    <p id='erreur'>Veuillez entrer le nom de votre jeux!</p>
            </div>
            <div class="R_Added" id="one">
                <h1>Recently Added</h1>
            </div>
            <div class="Added">
            <img src="image/1 (1).png" alt="">
            <img src="image/1 (2).png" alt="">
            <img src="image/1 (3).png" alt="">
            <img src="image/1 (4).png" alt="">
            <img src="image/1 (5).png" alt="">
            <img src="image/1 (6).png" alt="">
            <img src="image/1 (7).png" alt="">
            <img src="image/1 (8).png" alt="">
            <img src="image/1 (9).png" alt="">
            <img src="image/1 (10).png" alt="">
            <img src="image/1 (11).png" alt="">
            <img src="image/1 (12).png" alt="">
            </div>
            <div class="more">
                <button id="more">MORE <i class="fa fa-angle-right"></i> </button>
            </div>
            <div class="R_Added">
                <h1>Latest Update</h1>
            </div>
            <div class="Added">
            <img src="image/1 (12).png" alt="">
            <img src="image/1 (10).png" alt="">
            <img src="image/1 (3).png" alt="">
            <img src="image/1 (6).png" alt="">
            <img src="image/1 (4).png" alt="">
            <img src="image/1 (2).png" alt="">
            <img src="image/1 (1).png" alt="">
            <img src="image/1 (8).png" alt="">
            <img src="image/1 (11).png" alt="">
            <img src="image/1 (5).png" alt="">
            <img src="image/1 (7).png" alt="">
            <img src="image/1 (9).png" alt="">
            </div>
            <div class="more">
                <button id="more">MORE <i class="fa fa-angle-right"></i> </button>
            </div>
            <div class="R_Added">
                <h1>Popular Download</h1>
            </div>
            <div class="Added">
            <img src="image/1 (2).png" alt="">
            <img src="image/1 (5).png" alt="">
            <img src="image/1 (4).png" alt="">
            <img src="image/1 (1).png" alt="">
            <img src="image/1 (6).png" alt="">
            <img src="image/1 (12).png" alt="">
            <img src="image/1 (10).png" alt="">
            <img src="image/1 (9).png" alt="">
            <img src="image/1 (11).png" alt="">
            <img src="image/1 (8).png" alt="">
            <img src="image/1 (3).png" alt="">
            <img src="image/1 (7).png" alt="">
            </div>
            <div class="more">
                <button id="more">MORE <i class="fa fa-angle-right"></i> </button>
            </div>
        </div>

@else
<h1>VOUS DEVRIEZ CONNECTER POUR VOIR TOUS LES CONTENUE DE CE PAGE</h1>
@endif
@endsection

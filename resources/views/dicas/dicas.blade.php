@extends('base.app')

@section('titulo', 'App')

@section('content')

<div style="background-color: red; flex: 1; justify-content: space-between; flex-direction: column; align-items: center; height: 100%">
    <div style="align-content: center; align-items: center;">
    
    <div sytle="border-style: solid; border-width: 5px;background-color: white; width: 1000px; align-items: center; border-radius: 20px; content-align: center; margin-top: 7%">
    <x-responsive-nav-link :href="route('dicas')" :active="request()->routeIs('dicas')">
        <img style="width: 6em; display: inline-block;" 
            src="../../imagens/sistemas.jpg" alt="imagem">

        <button style="padding: 10px 30px; 
          text-align: center; 
          display: inline-block; 
          font-size: 15px; margin-bottom: 13px; 
          background-color: #C770D1; 
          width: 100px;  
          border-radius: 10px;
          margin-right: 5px">
          <p style="font-weight: bold;color: white; text-decoration: none; font-size: 14px, margin-bottom: 20px">Sistemas digestório e urinário</p>
      </button>
      </x-responsive-nav-link>
      </div>

    </div>


    </div>
oiii
</div>

@endsection
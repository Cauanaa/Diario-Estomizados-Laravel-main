@extends('base.app')

@section('titulo', 'App')

@section('content')
<div style="background-color: #F2D1F5; display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding: 15px 30px; width: 100%">
  <div>
    <img style="width: 6em; display: inline-block;" 
      src="../../imagens/gota-sangue.png" alt="imagem">

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Oi  
    <span style="color: #7E3586; text-transform: uppercase">{{ Auth::user()->name }}</span>! 
      Como você está?
    </p>
  </div>

  <div>
  <x-responsive-nav-link :href="route('dicas')" :active="request()->routeIs('dicas')">
      <button style="padding: 10px 30px; 
          text-align: center; 
          display: inline-block; 
          font-size: 15px; margin-bottom: 13px; 
          background-color: #C770D1; 
          width: 100px;  
          border-radius: 10px;
          margin-right: 5px">
          <p style="font-weight: bold;color: white; text-decoration: none; font-size: 14px; margin: 2px">Análise</p>
      </button>
      </x-responsive-nav-link>

    <x-responsive-nav-link :href="route('dicas')" :active="request()->routeIs('dicas')">
      <button style="padding: 10px 30px; 
          text-align: center; 
          display: inline-block; 
          font-size: 15px; margin-bottom: 13px; 
          background-color: #C770D1; 
          width: 100px;  
          border-radius: 10px;
          margin-right: 5px">
          <p style="font-weight: bold;color: white; text-decoration: none; font-size: 14px; margin: 2px">Dicas</p>
      </button>
    </x-responsive-nav-link>

    <x-responsive-nav-link :href="route('informacoes')" :active="request()->routeIs('informacoes')">
    <a href="{{route('informacoes')}}"
      style="width: 1em;display: inline-block; margin-left: 5px" >
      <img src="../../imagens/3pontos.png" alt="Logo">
    </a>
    </x-responsive-nav-link>
  </div>
</div>

<div style="width: 100%; align-items: center; justify-content: center; margin-top: 3em">
    <div style="background-color: #F2D1F5; width: 40%; margin: 0 auto;align-items: center; border-radius: 20px">
        <div style="background-color: #C770D1; width: 100%; padding: 100px, align-items: center; border-top-left-radius: 20px; border-top-right-radius: 20px;">
            <p style="font-weight: bold; align-self: center; text-align: center; font-size: 16px; padding: 5%">
                Como está a sua energia?
            </p>
        </div>
        <img style="width: 10em; margin: 0 auto;" 
            src="../../imagens/imagem_inicio_homem.png" alt="imagem">
        
    </div>
</div>
@endsection


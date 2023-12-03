@extends('base.app')

@section('titulo', 'App')

@section('content')
<div style="background-color: #F2D1F5; display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding: 50px 30px; width: 100%">
  <div>
      <p style="font-weight: bold;font-size: 20px; display: block; margin: 0px 0px 0px 20px; color: #7E3586; text-transform: uppercase">{{ Auth::user()->name }}</p>
      <p style="font-size: 16px; display: block; margin: 10px 0px 0px 20px; color: #7E3586">{{ Auth::user()->email }}</p>
    </p>
  </div>
  <a method="post" href="{{route('informacoes')}}"
      style="width: 30px;display: inline-block; margin-right: 10px" >
      <img src="../../imagens/voltar.png" alt="Logo">
    </a>
</div>

</div>

<div>
  <p style="font-weight: bold; margin: 20px 10px 10px 25px; text-align:center; font-size:20px">Qual a sua estomia?</p>
    <p style="margin: 15px 10px 25px 25px; text-align:center; font-size:16px">Adicione informações para melhor personalização</p>
  <form style="margin-left:16px; align-content:center" action="radio.php" method="post">
    <label style="font-size:16px; 
              color: black; 
              background-color: #C770D1; 
              margin: 0px 0px 15px 160px;
              width: 25%; 
              padding: 30px; 
              border-radius: 10px;
              display: inline-block;
              line-height:30px">
      <input style="margin-bottom:3px; border: 8px solid #F2D1F5" type=radio name=estomia value="Colostomia"> <b>Colostomia</b><br>Exteriorização do intestino grosso</label>
    <label style="font-size:16px; 
              color: black; 
              background-color: #C770D1;
              margin: 0px 0px 15px 5px;
              width: 25%; 
              padding: 30px; 
              border-radius: 10px;
              display: inline-block;
              line-height:30px">  
      <input style="margin-bottom:3px; border: 8px solid #F2D1F5" type=radio name=estomia value="Ileostomia"> <b>Ileostomia</b><br>Exteriorização do ileo</label>
    <label style="font-size:16px; 
              color: black; 
              background-color: #C770D1;
              margin: 0px 0px 15px 5px;
              width: 25%; 
              padding: 30px; 
              border-radius: 10px;
              display: inline-block;
              line-height:30px">
      <input style="margin-bottom:3px; border: 8px solid #F2D1F5" type=radio name=estomia value="Urostomia"> <b>Urostomia</b><br>Exteriorização dos condutos urinários</label>
<div style="text-align:center; margin: 0px 25px 10px 12px">
      <label style="margin: 0px 10px 10px 25px; font-size:20px; display: inline-block;" for="bolsa">Sistema de bolsas:</label>
      <select style="border-radius: 10px; width:12% " name="bolsa" id="bolsa">
        <option value="uma">Uma peça</option>
        <option value="duas">Duas peças</option>
      </select>
      <label style="margin: 25px 10px 10px 25px; font-size:20px; display: inline-block;" for="data">Data da cirurgia:</label>    
    <input style="border-radius: 10px; width:12%" type="date" name="data" value="<?php echo date('d-m-y'); ?>" />
    </div>
</form>
<button style="align-content:center; font-weight:bold; border-radius: 10px; background-color:#F2D1F5; width:120px; height:40px" type="submit">Salvar</button>
</div>
@endsection
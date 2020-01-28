@extends('layouts.app')

@section('content')
<pagina tamanho="10">
  <painel titulo="Lista de Artigos">
    <migalhas v-bind:lista="{{$listaMigalhas}}"> </migalhas>


  

   
     <tabela-lista 
     v-bind:titulos="['#','Título','Descrição']"
     v-bind:itens="{{$listaArtigos}}"

     ordem="desc" ordemCol="1"
     criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="5565656"
     modal="sim"

     ></tabela-lista>            
     


</painel>
</pagina>
<modal nome="adicionar">
    <painel titulo="Adicionar">
      <painel titulo="Adicionar">
    <formulario css="" action="#" method="put" enctype="multipart/form=data" token="12345" >
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">    

        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">    

        </div>
        <button class="btn btn-info">Adicionar </button>
        
    </formulario>


</painel>
</modal>

<modal nome="editar">
    <painel titulo="Adicionar">
      <painel titulo="Adicionar">
    <formulario css="" action="#" method="put" enctype="multipart/form=data" token="12345" >
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">    

        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">    

        </div>
        <button class="btn btn-info">Adicionar </button>
        
    </formulario>


</painel>
</modal>
<modal nome="detalhe">
    <painel titulo="Adicionar">
      <painel titulo="Adicionar">
    <formulario css="" action="#" method="put" enctype="multipart/form=data" token="12345" >
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">    

        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">    

        </div>
        <button class="btn btn-info">Adicionar </button>
        
    </formulario>


</painel>
</modal>
    @endsection

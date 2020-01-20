@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    Teste de conteudo

                    <div class="row">
                        <div class="col-md-4">
                            <caixa></caixa>
                     </div>
                      <div class="col-md-4">
                            <painel titulo="conteudo 2" cor="blue">
                            Teste de conteudo
                            </painel>
                     </div>  
                     <div class="col-md-4">
                            <painel titulo="conteudo 3" cor="orange">
                            Teste de conteudo
                            </painel>
                     </div>  

                    </div>

                    
               
                    

                     
                </painel>
               
                
            </div>
        </div>
    </div>

    @endsection

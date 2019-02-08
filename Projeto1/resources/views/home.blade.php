@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="PAInel">    
                <br/>
                        <div class="col-md-4" >
                                <painel titulo="FILHOnel" cor="panel-purple">
                                        test2
                                </painel>
                            </div>
                       
                            <div class="col-md-4">
                                    <painel titulo="FILHOnel2" cor="panel-orange">
                                            test3
                                    </painel>
                            </div>
                            <caixa  qtd="80" titulo="Café" url="#" cor="green" icone="ion-coffee"></caixa>
                            <caixa  qtd="300" titulo="Usuários" url="#" cor="purple" icone="ion-person"></caixa>
                            <caixa  qtd="1200" titulo="Artigos" url="#" cor="aqua" icone="ion-document"></caixa>

                           

                </painel>
            </div>
        </div>
    </div>

@endsection

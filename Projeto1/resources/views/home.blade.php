@extends('layouts.app')

@section('content')

<pagina tamanho="10">
        
        <painel titulo="PAInel">  
                        <h1>Teste de conteúdos</h1>  
                <caixa  qtd="80" titulo="Café" url="#test" cor="green" icone="ion-coffee"></caixa>
                <caixa  qtd="300" titulo="Usuários" url="test" cor="purple" icone="ion-person"></caixa>
                <caixa  qtd="1200" titulo="Artigos" url="{{route('artigos.index')}}" cor="aqua" icone="ion-document"></caixa>
        </painel>
</pagina>

@endsection

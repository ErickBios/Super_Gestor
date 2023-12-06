<h3>Fornecedore<h3>

@php
/*
if(empty($ variavel)){ retorna true se a variavel estive  vazia}
Para o PHP o que uma variavel vazia:
quando esta com o seguintes valores a seguir:
-''
- 0
- 0.0
- '0'
- null
- array()
- $var "nessa caso so quando a variavel esta declarada ou seja ela exites porém não tem nem um valor"
*/


@endphp


@php  $i = 0  @endphp

@isset($fornecedores)

   @forelse ( $fornecedores as $indice => $fornecedor)
       Fornecedor: {{$fornecedor['Nome'] }}
        <br/>
        Status: {{$fornecedor['Status']}}
        <br/>
        CNPJ: {{$fornecedor['CNPJ'] ?? '' }}
        <br/>
        Telefone: {{$fornecedor['DDD'] ?? '' }} {{$fornecedor['Teleforne'] ?? '' }} 
        <hr/>
   @empty
      Não existem fornecedores cadastrato!!!
   @endforelse
        
 

@endisset




<h1>ola fornecedores</h1>
{{--comment do Blade --}}
@php


@endphp
{{-- @dd($fornecedores) --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10 )
    <p>  de 0 a 10 fornecedor encontrado foi {{ count($fornecedores) }}</p>
@elseif (count($fornecedores) > 10)
    <p>{{count($fornecedores)}} mais que fornecedores encontrados</p>
@else
    <p>Nenhum fornecedor encontrado</p>
@endif

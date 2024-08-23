<div>
    Olá mundo, eu sou um blade template!
</div>

{{-- conditional rendering of a $name variable --}}
@isset($name)
    <div>O nome do usuário é: {{ $name }}</div>
@endisset

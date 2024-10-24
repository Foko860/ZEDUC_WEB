@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Parrainage</h1>
    <p>Votre code de parrainage : <strong>{{ $codeParrainage }}</strong></p>
    
    <div style="text-align: center;">
        <h3>QR Code :</h3>
        <div>{!! $qrCode !!}</div>
    </div>

    <div class="mt-4">
        <button class="btn btn-primary" onclick="copyToClipboard('{{ $codeParrainage }}')">Copier le code</button>
    </div>
</div>

<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        alert('Code parrainage copié : ' + text);
    }, function(err) {
        console.error('Erreur lors de la copie : ', err);
    });
}
</script>
@endsection

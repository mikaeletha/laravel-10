<h1>Solicitação {{$support->id}}</h1>
<form action="{{ route('support.update', $support->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="subject" placeholder="Assunto" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="10" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>
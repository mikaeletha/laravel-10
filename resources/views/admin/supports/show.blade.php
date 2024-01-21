<h1>Detalhes da solicitação</h1>
<ul>
    <li>ID: {{$support['id']}}</li>
    <li>Status: {{$support['status']}}</li>
    <li>Título: {{$support['subject']}}</li>
    <li>Descrição: {{$support['body']}}</li>
</ul>

<form action="{{ route('support.delete', $support['id'])}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
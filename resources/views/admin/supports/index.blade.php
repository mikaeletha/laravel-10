<h1>Listagem Suport</h1>
<a href="{{ route('support.create') }}">Adicionar</a>
<table>
    <thead>
        <th>ID</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>Detahes</th>
        <th>Editar</th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{$support->id}}</td>
                <td>{{$support->subject}}</td>
                <td>{{$support->body}}</td>
                <td>{{$support->status}}</td>
                <td><a href="{{route('support.show', $support->id)}}">Ir</a></td>
                <td><a href="{{route('support.edit', $support->id)}}">Editar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
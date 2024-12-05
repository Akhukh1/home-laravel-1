<h1>Список групп</h1>

<br>

@foreach ($data as $el)
  <div>{{ $el->title }}</div>
  <a href="{{ route('group-one', $el->id) }}">Информация о группе</a>
@endforeach
<br>
<br>
<a href="/groups/create"><button>Добавить группу</button></a>
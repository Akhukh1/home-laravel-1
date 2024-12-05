<a href="{{ URL::previous() }}">Назад</a>

<br>

<h1>Информация о группе {{ $data->title }}</h1>

<br>

<p>id: {{$data->id }}</p>
<p>Название: {{ $data->title }}</p>
<p>Стартует: {{ $data-> start_from}}</p>
@if ($data-> start_from)
  <p>Активная: да</p>
  @else
  <p>Активная: нет</p>
@endif
<p>Открыта: {{ $data->created_at }}</p>
<p>Обновлялась: {{ $data->updated_at }}</p>

<br>

<br>
<a href="{{ route('student-create', $data->id) }}"><button>Добавить студента</button></a>
<br>

<h3>Студенты</h3>

@foreach ($dataStudent as $el)
  <div>{{ $el->surname }} {{ $el->name }}</div>
  <a href="{{ route('student-one', [$el->group_id, $el->id]) }}">Информация о студенте</a>
@endforeach






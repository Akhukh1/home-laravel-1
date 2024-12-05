<a href="{{ URL::previous() }}">Назад</a>

<br>

<h1>Информация о студенте</h1>

<br>

<p>id: {{$dataStudent->id }}</p>
<p>Фамилия: {{ $dataStudent->surname }}</p>
<p>Имя: {{ $dataStudent-> name}}</p>
<p>Добален: {{ $dataStudent->created_at }}</p>
<p>Редактировался: {{ $dataStudent->updated_at }}</p>

<br>
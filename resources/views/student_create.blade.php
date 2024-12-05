<a href="{{ URL::previous() }}">Назад</a>

<br>

<h1>Добавить студента в группу</h1>

<br>

@if ($errors->any())
  <p>Поля фамилия и имя должны быть заполнены</p>
@endif

<br>

<form action = "/groups/{{ $data }}/students" method = "post">
  @csrf
  <label for = "title">Введите фамиилию/label>
  <input type = "text" name = "surname">
  <br>
  <label for = "start_from">Введите имя</label>
  <input type = "text" name = "name">
  <br>
  <button type ="submit">Отправить</button>
</form>
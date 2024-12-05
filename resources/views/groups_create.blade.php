
<a href="{{ URL::previous() }}">Назад</a>

<br>

<h1>Создпние новой группы</h1>

<br>

@if ($errors->any())
  <p>Поля название и даты должны быть заполнены</p>
@endif

<br>
<form action = "/groups" method = "post">
  @csrf
  <label for = "title">Введите название группы</label>
  <input type = "text" name = "title">
  <br>
  <label for = "start_from">Введите дату старта курса</label>
  <input type = "date" name = "start_from">
  <br>
  <label for = "is_active">Действующая группа</label>
  <input type = "radio" name = "is_active">
  <br>
  <button type ="submit">Отправить</button>
</form>
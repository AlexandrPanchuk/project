<h1>Админ панель</h1>
<hr>

<h2>Расписание поездов</h2>
<div class="schedule">
	<div class="admin-view">
		<br>	
		<br>
		<a id="toggler" href="#">Добавить новую запись</a>
		<div class="box" style="margin-top: 10px;">
			<div id="box" style="display: none;">
				<form action="/admin/admin.php" method="post">
				    <p style="color: red;">Заполните форму (все поля  обязательны)</p>
					<div><span>Откуда: </span></div><div><input type="text" name="from" required></div>
					<div><span>Куда: </span></div><div><input type="text" name="to" required></div>
					<div><span>Время: </span></div><div><input type="text" name="time" required></div>
					<div><span>Дата: </span></div><div><input type="text" name="date" required></div>
					<div><span>Номер поезда: </span></div><div><input type="text" name="number" required></div>
					<div><br><input type="submit" name="Отправить" value="Добавить"></div>
				</form>
			</div>
		</div>	
	

	</div>
	<div class="right-table">
		<form action="/admin/admin.php" method="post">
			<table class="table-admin">
				<tr>
				    <th>Откуда</th>
				    <th>Куда</th>
				    <th>Время</th>
				    <th>Дата</th>
				    <th>Номер поезда</th>
				    <th></th>
				</tr>
				
				<?php 
				foreach ($data['schedule'] as $key => $value) 
				{
					echo '<tr>';
					echo '<td>'.$value['from'].'</td>';
					echo '<td>'.$value['to'].'</td>';
					echo '<td>'.$value['time'].'</td>';
					echo '<td>'.$value['date'].'</td>';
					echo '<td>'.$value['number']."</td>";
					echo '<td><button name="delete" value="'.$value['id'].'">Удалить</buttom></td>';
					echo '</tr>';
				}
				?>
			</table>
		</form>
	</div>
</div>

<div class="main-text">
	<h2>Текст главной страницы</h2>
	
	<div class="text" style="margin-top: 20px;">
		<p style="font-weight: bold; text-align: center;">Текст на странице</p>
		<br>
		<form action="/admin/admin.php"> 
			<textarea name="text" cols="65" rows="20"><?php echo $data['text'][0]['text']; ?></textarea>
		</form>
	</div>	
	<div class="text-new" style="margin-top: 20px;">
		<p style="font-weight: bold; text-align: center;">Новый текст</p>
		<br>
		<form action="/admin/admin.php" method="post"> 
			<textarea name="changetext" cols="65" rows="20"></textarea>
			<br>
			<input type="submit" value="Обновить">
		</form>
	</div>	
</div>

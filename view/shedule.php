<h1>Расписание поездов</h1>
<div class="shcedule">
	<hr>
	<br>
	<table class="shedule-table-item">
		<tr>
		    <th>Откуда</th>
		    <th>Куда</th>
		    <th>Время</th>
		    <th>Дата</th>
		    <th>Номер поезда</th>
		</tr>
		
		<?php 
		foreach ($this->schedule as $key => $value) 
		{
			echo "<tr>";
			echo "<td>".$value['from']."</td>";
			echo "<td>".$value['to']."</td>";
			echo "<td>".$value['time']."</td>";
			echo "<td>".$value['date']."</td>";
			echo "<td>".$value['number']."</td>";
			echo "</tr>";
		}

		?>
	</table>
</div>

<!-- 
<div class="add-schedule" method="get">
	<form>
		<button value="schadule" name="addlist">Добавть в список</button>
	</form>
</div>
 -->

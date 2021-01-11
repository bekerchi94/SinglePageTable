<?php require_once('./config.php'); ?>
<!Doctype html>  
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta id="vp" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no">
<script src="./js/axios.min.js" type="text/javascript"></script>
<script src="./js/vue.js" type="text/javascript"></script>
<link rel="stylesheet" href="./css/bootstrap.min.css" />
</head>
<body>
<div id="app">
<div class="panel-info">
<h3>Одностраничная таблица</h3>
<hr>
<h5> Фильтрация: </h5>
<div class="row">
<div class="col-3">
<label class="control-label" for="colunm">выбор колонки</label>
<Select class="form-control" v-model="pcolumn">
<?php if($tablecolumns){ $i=0; foreach($tablecolumns as $tablecolumn){ ?>
<option value="<?php echo $i ?>"><?php echo $tablecolumn; ?></option>
<?php $i++; }}?>
</select>
</div>

<div class="col-3">
<label class="control-label" for="colunm">выбор условия</label>
<Select class="form-control" v-model="pcondition">
<?php if($conditions){ $i=0; foreach($conditions as $condition){ ?>
<option value="<?php echo $i ?>"><?php echo $condition; ?></option>
<?php $i++; }}?>

</select>
</div>

<div class="col-3">
<label class="control-label" for="colunm">ввод значение</label>
<input type="text" id="filtr" v-model="pvalue"  class="form-control">
</div>

<div class="col-3">
<label class="control-label" for="colunm">фильтровать</label>
<button class="btn btn-info" @click="getByParam" >фильтровать</button>
</div>
</div>
</div>
<hr>
<p>
нажмите заголовок столбца чтобы сортировать
</p>
<hr>
<table class="table">
  <thead>
    <tr>
	<?php if($tablecolumns){ $i=0; foreach($tablecolumns as $tablecolumn){ ?>
	<th style="cursor:pointer" @click="getByOrderParam(<?php echo $i; ?>)" scope="col"><?php echo $tablecolumn; ?></option>
	<?php $i++; }}?>
    </tr>
  </thead>
  <tbody>
    <tr v-for="row in paginatedData">
      <th>{{row[1]}}</th>
      <td>{{row[2]}}</td>
      <td>{{row[3]}}</td>
      <td>{{row[4]}}</td>
    </tr>
   
  </tbody>
</table>

<div>
  <button :disabled="pageNumber === 0"  class="btn btn-danger" @click="prevPage">
    Предыдушая страница
  </button>
    <button :disabled="pageNumber >= pageCount -1" class="btn btn-danger" @click="nextPage">
    Следующая страница
  </button>
</div>
</div>

<script src="./js/script.js" type="text/javascript"></script>
</body>
</html>
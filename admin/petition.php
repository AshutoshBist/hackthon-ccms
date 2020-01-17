<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin-Petition </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/locale/nl.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <style>
    .datepicker,
.timepicker,
.datetimepicker {
.form-control {
  background: #fff;
}
}
    </style>
  </head>
  <body>
  <div class="container">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="petition-no">Petition No.</label>
      <input type="number" class="form-control" id="petition-no" placeholder="Petition No." required>
    </div>
    <div class="form-group col-md-6">
      <label for="petition-name">Petition Name</label>
      <input type="text" class="form-control" id="petition-name" placeholder="Petition Name" required>
    </div>
  </div>
  <br>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="court-room">Court Room</label>
      <input type="number" class="form-control" id="inputCity" >
    </div>
    <!--div class="form-group col-md-2">
      <div class="md-form">
        <label for="input_starttime">Start time</label>
      <input placeholder="Selected time" type="text" id="input_starttime" class="form-control timepicker">
      </div>
    </div>
    <div class="form-group col-md-2">
      <div class="md-form">
        <label for="input_endtime">End time</label>
      <input placeholder="Selected time" type="text" id="input_endtime" class="form-control timepicker">
      </div>
    </div-->
  </div><br><br>

	<div class="row">
		<div class="col-xs-4">
			<h3>Date</h3>
			<div class="form-group">
				<div class="input-group datepicker">
					<input type="text" class="form-control" readonly>
					<span class="input-group-addon">
						<span class="fa fa-calendar"></span>
					</span>
				</div>
			</div>
		</div>
	</div>

<br>
<input id="timepicker" width="276" />
    <script>
        $('#timepicker').timepicker();
    </script><br><br>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-6">
      <label for="Add Judge">Add Judge</label><br>
      <select id="add-judge" name="add-judge" style="padding-right:50px;height:35px;">
        <option value="judge1">judge1</option>
        <option value="judge2">judge2</option>
        <option value="judge3">judge3</option>
        <option value="judge4">judge4</option>
        <option value="judge5">judge5</option>
        <option value="judge6">judge6</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
<script type="text/javascript">
var defaults = {
calendarWeeks: true,
showClear: true,
showClose: true,
allowInputToggle: true,
useCurrent: false,
ignoreReadonly: true,
minDate: new Date(),
toolbarPlacement: 'top',
locale: 'nl',
icons: {
  time: 'fa fa-clock-o',
  date: 'fa fa-calendar',
  up: 'fa fa-angle-up',
  down: 'fa fa-angle-down',
  previous: 'fa fa-angle-left',
  next: 'fa fa-angle-right',
  today: 'fa fa-dot-circle-o',
  clear: 'fa fa-trash',
  close: 'fa fa-times'
}
};

$(function() {
var optionsDatetime = $.extend({}, defaults, {format:'DD-MM-YYYY HH:mm'});
var optionsDate = $.extend({}, defaults, {format:'DD-MM-YYYY'});
var optionsTime = $.extend({}, defaults, {format:'HH:mm'});

$('.datepicker').datetimepicker(optionsDate);
$('.timepicker').datetimepicker(optionsTime);
$('.datetimepicker').datetimepicker(optionsDatetime);
});
</script>
  </body>

</html>

$(function(){
    $('#arrives').datepicker({
		dateFormat: 'yy-mm-dd',
		minDate:0,
		firstDay:1,
		showOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
  });

$(function(){
    $('#departs').datepicker({
		dateFormat: 'yy-mm-dd',
		minDate: 1,
		firstDay:1,
		showOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
  });
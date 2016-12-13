$(function(){
    $('#arrives').datepicker({
		minDate:0,
		firstDay:1,
		showOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
  });

$(function(){
    $('#departs').datepicker({
		minDate: 1,
		firstDay:1,
		showOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
  });
(function(a){a(document).ready(function(g){var c=new Date();var h=c.getDate();var b=c.getMonth();var i=c.getFullYear();


	var f=[{title:"All Day Event",start:new Date(i,b,1)},{title:"Long Event",

	start:new Date(i,b,h-5),end:new Date(i,b,h-2)},{id:999,title:"Repeating Event",
	start:new Date(i,b,h-3,16,0),allDay:false},{id:999,title:"Repeating Event",
	start:new Date(i,b,h+4,16,0),allDay:false},{title:"Meeting",
	start:new Date(i,b,h,10,30),allDay:false},{title:"Lunch",
	start:new Date(i,b,h,12,0),end:new Date(i,b,h,14,0),allDay:false},{title:"Birthday Party",
	start:new Date(i,b,h+1,19,0),end:new Date(i,b,h+1,22,30),allDay:false},{title:"Click for Google",
	start:new Date(i,b,28),end:new Date(i,b,29),url:"http://google.com/"}];


	a("#da-ex-calendar").fullCalendar({header:{left:"prev,next today",center:"title",right:"month,agendaWeek,agendaDay"},
		editable:true,events:f});a("#da-ex-calendar-ui").fullCalendar({
			theme:true,header:{left:"prev,next today",center:"title",right:"month,agendaWeek,agendaDay"},editable:true,events:f})})})(jQuery);
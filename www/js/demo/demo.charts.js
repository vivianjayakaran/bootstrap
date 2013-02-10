(function(a){a(document).ready(function(k){google.setOnLoadCallback(d);function d(){j();g();l();f();i();b();m();c();h();n()}function j(){var p=google.visualization.arrayToDataTable([["Year","Sales","Expenses"],["2009",1000,400],["2010",1170,460],["2011",660,1120],["2012",1030,540]]);var e={title:"Company Performance",hAxis:{title:"Year",titleTextStyle:{color:"red"}}};


	var o=new google.visualization.AreaChart(a("#da-ex-gchart-area").get(0));

	a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function g(){
		var p=google.visualization.arrayToDataTable([
			["Year","Sales","Expenses"],["2009",1000,400],["2010",1170,460],["2011",660,1120],["2012",1030,540]]);
		var e={title:"Company Performance",vAxis:{title:"Year",titleTextStyle:{color:"red"}}};var o=new google.visualization.BarChart(a("#da-ex-gchart-bar").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function l(){var p=google.visualization.arrayToDataTable([["ID","Life Expectancy","Fertility Rate","Region","Population"],["CAN",80.66,1.67,"North America",33739900],["DEU",79.84,1.36,"Europe",81902307],["DNK",78.6,1.84,"Europe",5523095],["EGY",72.73,2.78,"Middle East",79716203],["GBR",80.05,2,"Europe",61801570],["IRN",72.49,1.7,"Middle East",73137148],["IRQ",68.09,4.77,"Middle East",31090763],["ISR",81.55,2.96,"Middle East",7485600],["RUS",68.6,1.54,"Europe",141850000],["USA",78.09,2.05,"North America",307007000]]);var e={title:"Correlation between life expectancy, fertility rate and population of some world countries (2010)",hAxis:{title:"Life Expectancy"},vAxis:{title:"Fertility Rate"},bubble:{textStyle:{fontSize:11}}};var o=new google.visualization.BubbleChart(a("#da-ex-gchart-bubble").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function f(){var p=google.visualization.arrayToDataTable([["Mon",20,28,38,45],["Tue",31,38,55,66],["Wed",50,55,77,80],["Thu",77,77,66,50],["Fri",68,66,22,15]],true);var e={legend:"none"};var o=new google.visualization.CandlestickChart(a("#da-ex-gchart-candle").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function i(){

			var p=google.visualization.arrayToDataTable([["Year","Sales","Expenses"],["2009",1000,400],["2010",1170,460],["2011",660,1120],["2012",1030,540]]);var e={title:"Company Performance",hAxis:{title:"Year",titleTextStyle:{color:"red"}}};var o=new google.visualization.ColumnChart(a("#da-ex-gchart-column").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function b(){var p=google.visualization.arrayToDataTable([["Month","Bolivia","Ecuador","Madagascar","Papua New Guinea","Rwanda","Average"],["2004/05",165,938,522,998,450,614.6],["2005/06",135,1120,599,1268,288,682],["2006/07",157,1167,587,807,397,623],["2007/08",139,1110,615,968,215,609.4],["2008/09",136,691,629,1026,366,569.6]]);var e={title:"Monthly Coffee Production by Country",vAxis:{title:"Cups"},hAxis:{title:"Month"},seriesType:"bars",series:{5:{type:"line"}}};var o=new google.visualization.ComboChart(a("#da-ex-gchart-combo").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function m(){


				var p=google.visualization.arrayToDataTable([["Year","Sales","Expenses"],["2009",1000,400],["2010",1170,460],["2011",660,1120],["2012",1030,540]]);var e={title:"Company Performance"};var o=new google.visualization.LineChart(a("#da-ex-gchart-line").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function c(){var p=new google.visualization.DataTable();p.addColumn("string","Topping");p.addColumn("number","Slices");p.addRows([["Mushrooms",3],["Onions",1],["Olives",1],["Zucchini",1],["Pepperoni",2]]);var e={title:"How Much Pizza I Ate Last Night",is3D:true};var o=new google.visualization.PieChart(a("#da-ex-gchart-pie").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function h(){var p=google.visualization.arrayToDataTable([["Age","Weight"],[8,12],[4,5.5],[11,14],[4,5],[3,3.5],[6.5,7]]);var e={title:"Age vs. Weight comparison",hAxis:{title:"Age",minValue:0,maxValue:15},vAxis:{title:"Weight",minValue:0,maxValue:15},legend:"none"};var o=new google.visualization.ScatterChart(a("#da-ex-gchart-scatter").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}function n(){var p=google.visualization.arrayToDataTable([["Director (Year)","Rotten Tomatoes","IMDB"],["Alfred Hitchcock (1935)",8.4,7.9],["Ralph Thomas (1959)",6.9,6.5],["Don Sharp (1978)",6.5,6.4],["James Hawes (2008)",4.4,6.2]]);var e={title:"The decline of 'The 39 Steps'",vAxis:{title:"Accumulated Rating"},isStacked:true};var o=new google.visualization.SteppedAreaChart(a("#da-ex-gchart-stepped").get(0));a(window).on("debouncedresize",function(){o.draw(p,e)});o.draw(p,e)}})})(jQuery);
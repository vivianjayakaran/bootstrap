(function(a){a(document).ready(function(d){if(a.fn.autocomplete){var b=["ActionScript","AppleScript","Asp","BASIC","C","C++","Clojure","COBOL","ColdFusion","Erlang","Fortran","Groovy","Haskell","Java","JavaScript","Lisp","Perl","PHP","Python","Ruby","Scala","Scheme"];a("#da-ex-autocomplete").autocomplete({source:b})}if(a.fn.chosen){a(".chzn-select").chosen()}if(a.fn.ColorPicker){a("#da-ex-colorpicker").ColorPicker({onSubmit:function(e,i,g,h){a(h).val(i);a(h).ColorPickerHide()},onBeforeShow:function(){a(this).ColorPickerSetColor(this.value)}})}if(a.fn.daPickList){a("#da-ex-picklist").daPickList()}if(a.fn.spinner){var c={s1:{},s2:{places:2,step:0.25},s3:{prefix:"$",places:2,step:0.1}};for(var f in c){a("#da-ex-"+f).spinner(c[f])}}if(a.fn.elastic){a("#da-ex-elastic").elastic()}if(a.fn.elrte){



	var c={

		cssClass:"el-rte",height:300,toolbar:"normal",
		cssfiles:["plugins/elrte/css/elrte-inner.css"],
		fmAllow:true,
		fmOpen:function(e){a('<div id="myelfinder"></div>').elfinder({
		url:"plugins/elfinder/connectors/php/connector.php",
		lang:"en",height:300,
		toolbar:[["back","reload"],["select","open"],["quicklook","info","rename"],["resize","icons","list","help"]],
		contextmenu:{cwd:["reload","delim","info"],file:["select","open","rename"],},
		dialog:{width:640,modal:true,title:"Select Image"},closeOnEditorCallback:true,editorCallback:e})}
	};


	a("#da-ex-wysiwyg").elrte(c);
	a("#da-ex-wysiwyg2").elrte(c);
	a("#da-ex-wysiwyg3").elrte(c);
	a("#da-ex-wysiwyg4").elrte(c);
	a("#da-ex-wysiwyg5").elrte(c);


}})})(jQuery);
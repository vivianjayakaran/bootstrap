<?php //netteCache[01]000411a:2:{s:4:"time";s:21:"0.25595300 1367110606";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:89:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\subscriptions.latte";i:2;i:1367110604;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\subscriptions.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9sb52e38oq')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!-- DataTables Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.tables.js"></script>

<!-- jGrowl Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/jgrowl/jquery.jgrowl.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/jgrowl/jquery.jgrowl.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elastic/jquery.elastic.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.form.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.ui.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.validate.min.js"></script>

<!-- Content Area -->     
<script type="text/javascript">

    function deleteConfirm(id) {
        $( "#DeleteDialog" ).dialog({
            resizable: false,
            modal: true,
            width: 200,
        });
        window.globalVar = id; 
    }

    /*---------start of delete Location -------*/

    function deleteSubscription()
    {   
        ajaxDelete(window.globalVar);
        return false;
    }

    function ajaxDelete(id){
        console.log(id);
       $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonDeleteSubscription",
          data: { value: id },
          dataType: "html", 
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                $( "#DeleteDialog" ).dialog( "close" );
                $("#subscription_id_"+id).remove();
              }
          }
      });
    }

    /*---------end of delete location ----------*/

    function showGrowl(){
        $( "#da-ex-validate4" ).dialog("close");
        $("#da-ex-growl").trigger('click');
        return false;
    }


    /*---------------- UPDATE LOCATION ---------------*/

    function editsubscript(id,email){

        window.globId = id;

        $(".editEmail").attr("value",email);

         $("#da-ex-dialog-form-email").dialog("option",{
            resizable: false,
            modal: true,
            hide: 'slow',
            show: 'slow',
            width: 400,
        }).dialog("open")
    
    }

    function sendemail(id,email){

        window.globId = id;

        $(".editEmail").attr("value",email);

         $(".test").dialog("option",{
            resizable: false,
            modal: true,
            hide: 'slow',
            show: 'slow',
            width: 400,
        }).dialog("open")
    
    }

    // on submit editPhoto Dialog -> start update
    $(document).on("submit", ".updateForm", function(event){
        ajaxUpdate(window.globId, $(".editEmail").val());
        return false;
    });

    function ajaxUpdate(id, emailValue){
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonUpdateSubscription",
          data: { subId: id, email: emailValue},
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                var myObject = JSON.parse(msg);
                myObject["id"];
                $(".subscription_email_"+myObject["id"]).html(myObject["email"]);
              }

              $("#da-ex-dialog-form-div").dialog("close");
          }
      });
    }

</script>

    <!-- DELETE DIALOG -->
    <div id="DeleteDialog" title="Delete confirmation" style="display: none">
        <div id="grid_2">
            <center><h3>Are you sure ?</h3>
                <div class="clearfix"></div>
                <input type="button" class="da-button red large"  id="deleteButton" value="Delete" onclick="JavaScript:deleteSubscription()" />
                <input type="button" class="da-button gray large" id="cancelButton" value="Cancel" onclick='JavaScript:$( "#DeleteDialog" ).dialog( "close" );' /> 
            </center>
        </div>
    </div>

    <!-- UPDATE LOCATION DIALOG -->
    <div id="da-ex-dialog-form-div" class="no-padding" title="Send email">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <img src="images/icons/color/accept.png" alt="" />
                Validation Example 1
            </span>
        </div>
        <div class="da-panel-content">
            <form id="da-ex-dialog-form-val" enctype="multipart/form-data" method="post" class="da-form updateForm">
                <div id="da-validate-error" class="da-message error" style="display:none;"></div>
                <fieldset class="da-form-inline">
                    <legend>Email</legend>
                    <div class="da-form-row">
                        <input type="text" name="reqField" class="editEmail" autocomplete="OFF" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div id="da-ex-dialog-form-email" class="no-padding" title="Edit Photo">
        <div class="da-panel-content">
            <form id="da-ex-dialog-form-val" class="da-form UpdateForm">
                <div id="da-validate-error" class="da-message error" style="display:none;"></div>

                <div class="editId" name=""></div>

                <fieldset class="da-form-inline">
                    <legend>Subject</legend>
                    <div class="da-form-row">
                        <input type="text" name="reqField" class="editTitle" />
                    </div>
                </fieldset>

                <fieldset class="da-form-inline">
                    <legend>Text</legend>
                    <div class="da-form-row">
                        <textarea rows="auto" cols="auto" class="editText" name="reqField"></textarea>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <!-- end of Non displayed panels -->

    <!-- ADD CITY PANEL -->
    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add Email
                </span>
            </div>
            <div class="da-panel-content">
                <form class="da-form" enctype="multipart/form-data" id="da-ex-validate1" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addEmail">
                <div id="da-ex-val1-error" class="da-message error" style="display:none;"></div>
                    <div class="da-form-row">
                        <label>Email</label>
                        <div class="da-form-item large">
                            <input type="text" name="email" class="editEmailAdd" autocomplete="OFF" />
                        </div>
                    </div>
                    <div class="da-button-row">
                        <input type="reset" value="Reset" class="da-button gray left" />
                        <input type="submit" value="Submit" class="da-button green" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div class="grid_4">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/list.png" alt="" />
                    Subscription list
                </span>
            </div>
            <div class="da-panel-content">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Edit Options</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $iterations = 0; foreach ($subscriptions as $subscript): ?>
                            <tr id="subscription_id_<?php echo htmlSpecialChars($subscript->id) ?>">
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($subscript->id, ENT_NOQUOTES) ?></td>
                                <td class="subscription_email_<?php echo htmlSpecialChars($subscript->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($subscript->email, ENT_NOQUOTES) ?></td>
                                <td class="da-icon-column">
                                    <a href="#" onclick="JavaScript:sendemail(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($subscript->id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($subscript->email)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/email.png" />
                                    </a>
                                    <a href="#" onclick="JavaScript:editsubscript(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($subscript->id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($subscript->email)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" />
                                    </a>
                                    <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($subscript->id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/trash.png" />
                                    </a>
                                </td>
                            </tr>
<?php $iterations++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end of grid-->
    </div>
</div>
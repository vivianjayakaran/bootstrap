<link type="text/css" href="<?php echo base_url(); ?>css/ui-darkness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
    <script type="text/javascript" src="http://www.cleverfrogs.com/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://www.cleverfrogs.com/js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript">
  $(function(){

    $(document).ready(function() {
      $('#dialogSub').dialog({ resizable: false
      });
    });  
  });
</script>

<?php if($this->uri->segment(1) == "sk"){; ?>
<!-- ui-dialog -->
<div id="dialogSub" title="Info">
  <center><h5>Vás email bol úspešne spracovaný.</h5></center>
</div>
<?php } 
else {
?>
<div id="dialogSub" title="Info">
   <center><h5>Your email was successfully processed.</h5></center>
</div>
<?php
}

?>


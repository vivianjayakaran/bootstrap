<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.33186600 1366234776";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Contact\default.latte";i:2;i:1366229801;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Contact\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '3569n3nfa2')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe5e28822da_content')) { function _lbe5e28822da_content($_l, $_args) { extract($_args)
?><div id="breadCrumbsContainer">
            <div class="container">
                <p>You are here:
                    <a href="http://cleverfrogs.com">Home</a>
                    &nbsp; / &nbsp;
                    <strong><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></strong>
                </p>
            </div><!--end of centerContainer-->
        </div><!--end of sliderContainer-->


        <div class="blankSeparator"></div>

        <div class="container">
			
        <div class="span12">

			<div class="span4">		
				<div class="sidebarContainer ">
					<div class="sidebarItem">
						<div class="sidebarHeader">
							<h5><?php echo Nette\Templating\Helpers::escapeHtml($basic->website_title, ENT_NOQUOTES) ?></h5>
						</div>
						
						<ul class="basicList">
							<li>
								<p>Email adress:
								<a href="mailto:<?php echo htmlSpecialChars($basic->contact_email) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($basic->contact_email, ENT_NOQUOTES) ?></a></p>
							</li>
			
							<li class="noBottomBorder">
								<p class="kontaktFU">
									<br />
									<b>Contact information :</b><br />
<?php if ($basic->phone != ""): ?>
										Phone num.: <?php echo Nette\Templating\Helpers::escapeHtml($basic->phone, ENT_NOQUOTES) ?>

<?php endif ?>
								</p>
							</li>
							<!--end of <li style="margin-top: 20px;">
								<form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
					                <input type="hidden" name="cmd" value="_xclick">
					                <input type="hidden" name="business" value="ado.gaspar@gmail.com">
					                <input type="hidden" name="item_name" value="Cleverfrogs donation">
					                <input type="hidden" name="item_number" value="1">
					                <input type="hidden" name="amount" value="0.01">
					                <input type="hidden" name="no_shipping" value="1">
					                <input type="hidden" name="no_note" value="1">
					                <input type="hidden" name="currency_code" value="USD">
					                <input type="hidden" name="lc" value="US">
					                <input type="hidden" name="bn" value="PP-BuyNowBF">
					                <input type="hidden" name="return" value="http://cleverfrogs.com/questionnaire/">
					                <input type="hidden" name="cancel_return" value="http://cleverfrogs.com/contact/">
					                <input type="hidden" name="rm" value="2">
					                <input type="hidden" name="notify_url" value="http://cleverfrogs.com/admin/?do=paypal">
					                <input type="hidden" name="custom" value="1">
					                <input type="submit" class="btn btn-large btn-block btn-primary" value="Donate">
					            </form>
							</li>-->
							<li style="margin-top: 20px;">
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
									<input type="hidden" name="cmd" value="_s-xclick" />
									<input type="hidden" name="hosted_button_id" value="HKKFBMSZYS582" />
									<input type="submit" class="btn btn-large btn-block btn-primary" value="Donate" />
								</form>

							</li>
						</ul>
				</div> <!-- end sidebarItem -->
			</div>

		</div><!--end of sidebarContainer -->

			<div class="span7 contactBar">
				<img src="<?php echo htmlSpecialChars($basePath) ?>/img/contactPageImg.png" alt="Contact" />	<br /><br />
				<p>Do you find our solution interesting? Do you want to ask some questions? Would you like to cooperate with us? Do not hesitate to contact us.</p>
				
				<div class="sepContainer"><!-- --></div>

				<form action="<?php echo htmlSpecialChars($basePath) ?>/cleverfrogs/sendEmail/sk"  method="post" id="contactForm">
					<fieldset>
						<p class="span3">
							<input class="input-block-level" type="text" placeholder="Your name*" name="meno" autocomplete="OFF" value="<?php if(isset($meno)) echo $meno ?>" />
						</p>

						<p class="span3">
							<input class="input-block-level" type="text" placeholder="Your email*"  name="email" autocomplete="OFF" value="<?php if(isset($email)) echo $email ?>" />
						</p>
						
						<div class="cl"><!-- --></div>
						
						<p class="span6">
							<textarea  class="input-block-level" id="text" placeholder="Text*" cols="10" rows="10" name="text"><?php if(isset($text)) echo $text ?></textarea>
						</p>
						
						<br />
						<button class="btn btn-large btn-block btn-primary" type="button">submit</button>
						<p class="additionalOptions fl"></p>
					</fieldset>
				</form>

			</div>
		</div>
	</div>	
</div>

<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 
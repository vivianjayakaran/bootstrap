<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.70554300 1361202033";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\graphs.latte";i:2;i:1361202031;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\graphs.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'z39xl2ofkj')
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
<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.charts.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/d3/d3.v3.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="js/demo/demo.validation.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/grid/jquery.gridster.js"></script>

<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/validate/jquery.validate.min.js"></script>

<!-- Chosen Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.css" media="screen" />

<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.form.js"></script>


<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.validation.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/dandelion.css" media="screen" />

<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.gridster.css" media="screen" />
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/graphs.css" media="screen" />
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/cssrefresh.js"></script>-->


<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/jui/css/jquery.ui.all.css" media="screen" />
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/jui/js/jquery-ui-1.8.20.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/jui/js/jquery.ui.timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.ui.js"></script>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", { packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Fruits (months)',  'Apples', 'Oranges', 'Bananas'],
      ['January', 8, 7, 5],
      ['February', 6, 6, 8],
      ['March', 5, 5, 10],
      ['April', 4 ,4, 12]
    ]);

    var options = {
      title: 'The Title',
      vAxis: { title: 'Accumulated Rating'},
      backgroundColor: "none",
      isStacked: true
    };

    var chart = new google.visualization.SteppedAreaChart(document.getElementById('stepped_chart'));
    chart.draw(data, options);
  }
</script>

<div id="graphsContent" class="clearfix">


    <div id="da-content-area">

        <div class="grid_1 logoPlace right">
            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/logo.png" alt="Cleverfrogs" />
        </div>

        <div class="grid_1 areaSelector1">
            <div class="da-panel-content">
                <div class="da-form-item locationSelector">
                    <select id="da-ex-val-chzn" name="chosen1">
                        <option>Select location/s</option>
                        <option value="1">Kosice</option>
                        <option value="2">Bratislava</option>
                        <option value="3">Prague</option>
                        <option value="3">Brno</option>
                    </select>
                    <label for="da-ex-val-chzn" generated="true" class="error" style="display:none;"></label>
                </div>
            </div>
        </div>

        <div class="grid_1 areaSelector2">
            <div class="da-form-item locationSelector">
                <select class="chzn-select">
                    <option>Select time period</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                </select>
            </div>            
        </div>
        
        <div class="clearfix"></div>

        <span id="da-ex-slider-range-fixed-info3" class="formNote left">Selected year: <span class="da-highlight">2013</span></span>
        <div class="timelineBG">
            <div class="rangeSlider">
                <div class="da-form-item">
                    <div id="da-ex-slider-range-fixed3" class="rangeSliderTimeline da-ex-color-slider none"></div>
                </div>
            </div>
        </div>
            
        <div class="grid_4 summaryIcons">

            <ul class="da-summary-stat" >
                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color:#a6d037;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/sport_shirt.png" alt="" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value">512</span>
                            <span class="label">Number of feedbacks today campaign "XZ"</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color:#ea799b;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/abacus.png" alt="" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value up">286</span>                                        
                            <span class="label">Number of feedbacks total</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color:#fab241;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/airplane.png" alt="" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value down">61</span>
                            <span class="label">Number of feedbacks total campaign "XZ"</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color:#61a5e4;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/truck.png" alt="" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value">42</span>
                            <span class="label">Shops Visited</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="grid_4 graphsArea">
            <div class="grid_1b">
                <div class="graphHeading">feedback and sentiment</div>
                <div class="underline"></div>
                
                <div class="gridster">
                  <ul>
                    <li data-row="1" data-col="1" data-sizex="2" data-sizey="1">
                        <div class="FAS_graph">
                            
                            <div class="heading">today</div>
                                <div style="width: 60%;" class="progressBar">
                                    <div class="greenHeading">60%</div>
                                    <small>Promoters</small>
                                    <div id="da-ex-pa" class="animated green leftCorner"></div>
                                </div>
                                <div style="width: 30%;" class="progressBar">
                                    <div class="orangeHeading">30%</div>
                                    <small>Passives</small>
                                    <div id="da-ex-pb" class="animated orange noCorner"></div>
                                </div>
                                <div style="width: 10%;" class="progressBar">
                                    <div class="redHeading">10%</div>
                                    <small>Detractors</small>
                                    <div id="da-ex-pc" class="animated red rightCorner"></div>
                                </div>

                            <div class="smallText">
                                <small>  
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris.Et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris.
                                </small> 
                            </div>

                        </div>
                    </li>

                    <li data-row="2" data-col="1" data-sizex="2" data-sizey="1">
                        <div class="heading">Stepped Area chart</div>
                        <div id="stepped_chart" style="width: 100%; height: 100%;"></div>
                    </li>

                    <li data-row="3" data-col="1" data-sizex="2" data-sizey="1">
                        <div class="heading">Benchmarks (averages)</div>

                        <div class="benchmarkTable">
                            <div class="BTbigLeft">
                                <div class="titlesBT">
                                    <small>Best location</small>                <br />
                                    <small>Kosice</small>                       <br />
                                    <small class="blue">This location</small>   <br />
                                    <small>Prague location</small>              <br />
                                    <small>Worst location</small>       
                                </div>
                            </div>

                            <div class="BTbigRight">
                                <div class="leftBT">
                                    <div id="da-ex-benchmark-d" class="animated red negative"></div>
                                    <div id="da-ex-benchmark-e" class="animated red negative"></div>
                                </div>
                                <div class="middleBT">
                                    <div class="bechmark-percentage"><small>90%</small></div>
                                    <div class="bechmark-percentage"><small>71%</small></div>
                                    <div class="bechmark-percentage"><small>30%</small></div>
                                    <div class="bechmark-percentage-red"><small>68%</small></div>
                                    <div class="bechmark-percentage-red"><small>82%</small></div>
                                </div>
                                
                                <div class="rightBT">
                                    <div id="da-ex-benchmark-a" class="animated green"></div>
                                    <div id="da-ex-benchmark-b" class="animated green"></div>
                                    <div id="da-ex-benchmark-c" class="animated green"></div>
                                </div>
                            </div>
                        </div><!--end of benchmarkTable-->
                    </li>

                  </ul>
                </div>
            </div>

            <div class="grid_1b">
                <div class="graphHeading">tag cloud (campaign)</div>
                <div class="underline"></div>
                <div class="gridster">
                    <ul>
                        <li data-row="1" data-col="1" data-sizex="2" data-sizey="1">
                               <div class="tagCloud">
                                   <div class="tagCloudCenter">
                                       <a href="" class="green big">cheap</a>  
                                       <a href="" class="red big">dirty</a>  
                                       <a href="" class="green middle">good service</a>  
                                       <a href="" class="orange big">bad quality</a>  
                                       <a href="" class="red small">waiting</a>  
                                       <a href="" class="orange small">choice</a>  
                                       <a href="" class="green middle">friendly</a>  
                                       <a href="" class="orange small">advise</a>  
                                       <a href="" class="orange middle">parking</a>  
                                       <a href="" class="orange big">fresh</a>  
                                       <a href="" class="orange small">good</a>  
                                       <a href="" class="red small">sales</a>  
                                       <a href="" class="green big">good food</a>  
                                    </div>
                                </div>
                                <div class="smallText">
                                    <small>  
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris.
                                    </small> 
                                </div>
                        </li>
                        <li data-row="2" data-col="1" data-sizex="2" data-sizey="1">
                            <div class="heading">Online responses</div>
                        </li>            
            
                    </ul>
                </div>
            </div>

            <div class="grid_1b">
                <div class="graphHeading">campaign / product testing</div>
                <div class="underline"></div>
                <div class="gridster">
                    <ul>
                        <li data-row="3" data-col="1" data-sizex="2" data-sizey="1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </li>  
                        <li data-row="3" data-col="1" data-sizex="2" data-sizey="1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </li>        
                        <li data-row="3" data-col="1" data-sizex="2" data-sizey="1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </li>  
            
                    </ul>
                </div>
            </div>

    </div><!--end of contentarea-->
</div><!--end of contentarea-->

<div class="fillContainerXS"></div>

</div>
</div>

<script type="text/javascript">

        $(".gridster ul").gridster({
            widget_margins: [20, 20],
            widget_base_dimensions: [160, 220],
            max_size_x: 10,
            max_size_y: 1,
        });

        $("#da-ex-pa, #da-ex-pb, #da-ex-pc").progressbar({ value: 100 });
        $("#da-ex-benchmark-a").progressbar({ value: 1 });
        $("#da-ex-benchmark-a").progressbar({ value: 90});

        $("#da-ex-benchmark-b").progressbar({ value: 1 });
        $("#da-ex-benchmark-b").progressbar({ value: 71});

        $("#da-ex-benchmark-c").progressbar({ value: 1 });
        $("#da-ex-benchmark-c").progressbar({ value: 30});

        $("#da-ex-benchmark-d").progressbar({ value: 1 });
        $("#da-ex-benchmark-d").progressbar({ value: 68});

        $("#da-ex-benchmark-e").progressbar({ value: 1 });
        $("#da-ex-benchmark-e").progressbar({ value: 82});

</script>
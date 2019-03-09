<?php /* Smarty version Smarty-3.1.20, created on 2019-01-26 17:00:32
         compiled from "C:\wamp64\www\editorPlugin\thelia\local\modules\HookAdminHome\templates\backOffice\default\block-statistics-js.html" */ ?>
<?php /*%%SmartyHeaderCode:310915c4c9230acbd26-19216858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c100499daa36dc5a57a492687279630755d59e' => 
    array (
      0 => 'C:\\wamp64\\www\\editorPlugin\\thelia\\local\\modules\\HookAdminHome\\templates\\backOffice\\default\\block-statistics-js.html',
      1 => 1504456426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310915c4c9230acbd26-19216858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langcode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5c4c9230ad9353_74799754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4c9230ad9353_74799754')) {function content_5c4c9230ad9353_74799754($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['javascript'][0][0]->functionJavascript(array('file'=>'assets/js/jqplot/jquery.jqplot.min.js'),$_smarty_tpl);?>
"></script>
<script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['javascript'][0][0]->functionJavascript(array('file'=>'assets/js/jqplot/plugins/jqplot.highlighter.min.js'),$_smarty_tpl);?>
"></script>
<script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['javascript'][0][0]->functionJavascript(array('file'=>'assets/js/jqplot/plugins/jqplot.pointLabels.min.js'),$_smarty_tpl);?>
"></script>
<script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['javascript'][0][0]->functionJavascript(array('file'=>'assets/js/moment-with-locales.min.js'),$_smarty_tpl);?>
"></script>
<script src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['javascript'][0][0]->functionJavascript(array('file'=>'assets/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js'),$_smarty_tpl);?>
"></script>

<script>
    jQuery(function ($) {
        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0][0]->langDataAccess(array('attr'=>"code"),$_smarty_tpl);?>
<?php $_tmp25=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['langcode'] = new Smarty_variable(substr($_tmp25,0,2), null, 0);?>

        var jQplotDate = moment();
        var $datePicker = $('#date-picker');
        var displayDateFormat = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'YYYY-MM','d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
';

        $datePicker.val(moment().format(displayDateFormat));

        $datePicker.datetimepicker({
            locale: "<?php echo TheliaSmarty\Template\SmartyParser::theliaEscape($_smarty_tpl->tpl_vars['langcode']->value,$_smarty_tpl);?>
",
            viewMode: 'months',
            format: displayDateFormat
        }).on('dp.change', function (e) {
            // Load month statistics block
            $('#statmois_label').html(e.date.format(displayDateFormat)).click();
            $('#statmois').load('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>"/admin/home/month-sales-block/"),$_smarty_tpl);?>
' + (e.date.month() + 1) + '/' + e.date.year());

            // e.date is a moment.js date
            jQplotDate = e.date;

            statInputActive(true);

            retrieveJQPlotJson(
                jQplotDate,
                function () {
                    statInputActive(false);
                },
                0
            );
        });

        $("#span-calendar").click(function (e) {
            $('#date-picker').focus();
        });

        function statInputActive(type) {
            $('#date-picker').attr('readonly', type);
            $('.js-stats-refresh').attr('disabled', type)
        }

        var url = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->generateUrlFunction(array('path'=>'/admin/home/stats'),$_smarty_tpl);?>
";
        var jQplotData; // json data
        var jQPlotInstance; // global instance
        var valueFormats; // sprintf format of tooltip text

        var jQPlotsOptions = {
            animate: false,
            axesDefaults: {
                tickOptions: {
                    showMark: true,
                    showGridline: true
                }
            },
            axes: {
                xaxis: {
                    borderColor: '#ccc',
                    ticks: [],
                    tickOptions: {
                        showGridline: false
                    }
                },
                yaxis: {
                    min: 0,
                    tickOptions: {
                        showGridline: true,
                        showMark: false,
                        showLabel: true,
                        shadow: false
                    }
                }
            },
            seriesDefaults: {
                lineWidth: 3,
                shadow: false,
                markerOptions: {
                    shadow: false,
                    style: 'filledCircle',
                    size: 12
                }
            },
            grid: {
                background: '#FFF',
                shadow: false,
                borderColor: '#FFF'
            },
            highlighter: {
                show: true,
                sizeAdjust: 7,
                tooltipLocation: 'n',
                tooltipContentEditor: function (str, seriesIndex, pointIndex, plot) {
                    return $.jqplot.sprintf(
                        valueFormats[seriesIndex],
                        plot.data[seriesIndex][pointIndex][1]
                    );
                }
            }
        };

        // Get initial data Json
        retrieveJQPlotJson(jQplotDate);

        $('[data-toggle="jqplot"]').click(function () {
            $(this).toggleClass('active');
            jsonSuccessLoad();
        });

        $('.js-stats-refresh').click(function (e) {
            statInputActive(true);

            retrieveJQPlotJson(
                jQplotDate,
                function () {
                    statInputActive(false);
                },
                1
            );
        });

        function retrieveJQPlotJson(moment, callback, flush) {

            if (typeof flush === "undefined") {
                flush = 0;
            }

            // JS month range is [0..11], the url requires a PHP month range [1..12]
            $.getJSON(url, {
                month : moment.month() + 1,
                year  : moment.year(),
                flush  : flush
            }).done(function (data) {
                jQplotData = data;
                jsonSuccessLoad();
                if (callback) {
                    callback();
                }
            }).fail(jsonFailLoad);
        }

        function initJqplotData(json) {
            var series = [];
            var seriesColors = [];

            // Used globally !
            valueFormats = [];

            $('[data-toggle="jqplot"].active').each(function (i) {
                var position = $(this).index();
                var serie = json.series[position];

                series.push(serie.data);
                seriesColors.push(serie.color);
                valueFormats.push(serie.valueFormat);
            });

            // Number of days to display ( = data.length in one serie)
            var days = json.series[0].data.length;

            // Add days to xaxis
            var ticks = [];
            for (var i = 1; i < (days + 1); i++) {
                ticks.push([i - 1, i]);
            }

            jQPlotsOptions.axes.xaxis.ticks = ticks;

            // Graph title
            jQPlotsOptions.title = json.title;

            // Graph series colors
            jQPlotsOptions.seriesColors = seriesColors;

            return series;
        }

        function jsonFailLoad(data) {
            $('#jqplot').html(
                '<div class="alert alert-danger"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['intl'][0][0]->translate(array('l'=>'An error occurred while reading from JSON file','js'=>1,'d'=>'hookadminhome.bo.default'),$_smarty_tpl);?>
</div>'
            );
        }

        function jsonSuccessLoad() {
            // Init jQPlot
            var series = initJqplotData(jQplotData);

            // Start jQPlot
            if (jQPlotInstance) {
                jQPlotInstance.destroy();
            }

            jQPlotInstance = $.jqplot("jqplot", series, jQPlotsOptions);

            $(window).bind('resize', function (event, ui) {
                jQPlotInstance.replot({
                    resetAxes: true
                });
            });
        }
    });
</script><?php }} ?>

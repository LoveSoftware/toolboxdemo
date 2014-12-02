<?php
$profiler_namespace = 'phptoolsdemo';  // namespace for your application
$xhprof_data = xhprof_disable();
$xhprof_runs = new XHProfRuns_Default();
$xhprof_runs->save_run($xhprof_data, $profiler_namespace, XHPROF_RUN_NAME);

// url to the XHProf UI libraries (change the host name and path)
$profiler_url = sprintf('http://localhost:8080/xhprof/xhprof_html/index.php?run=%s&amp;source=%s',XHPROF_RUN_NAME, $profiler_namespace);
echo '<a href="'. $profiler_url .'" target="_blank">Profiler output</a>';
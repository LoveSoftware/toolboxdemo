<?php
$profiler_namespace = 'phptoolsdemo';  // namespace for your application
$xhprof_data = xhprof_disable();
$xhprof_runs = new XHProfRuns_Default();
$xhprof_runs->save_run($xhprof_data, $profiler_namespace, XHPROF_RUN_NAME);

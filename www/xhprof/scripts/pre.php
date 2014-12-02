<?php

require_once __DIR__ . '/../xhprof_lib/utils/xhprof_lib.php';
require_once __DIR__ . '/../xhprof_lib/utils/xhprof_runs.php';

xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
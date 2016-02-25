<?php
if (!$os) {
    // Canon Multifunction Printer/Scanner
    if (strstr($sysDescr, 'U150')) {
        $os = 'stormshield';
    }
}

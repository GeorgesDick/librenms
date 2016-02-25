<?php
if (!$os) {
    // Canon Multifunction Printer/Scanner
    if (strstr($sysDescr, 'Canon MF') || strstr($sysDescr, 'Canon iR') || strstr($sysDescr, 'Canon ir')) {
        $os = 'canonprinter';
    }
}

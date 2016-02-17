<?php
if (!$os) {
    // Canon Multifunction Printer/Scanner
    if (strstr($sysDescr, 'Canon MF')) {
        $os = 'canonprinter';
    }
    // Canon Ir-ADV Printer/Scanner
    if (strstr($sysDescr, 'Canon iR')) {
        $os = 'canonprinter';
    }
}

<?php
// File creation date is : 9/14/15 (mm/dd/yy)

$var0 = 'var0';
$var1 = 'var1';
$var2 = 'var2';

// Code input to HTML
$heredoc = <<<EOD
<p>Facilisis pretium proin, torquent dignissim mattis. Nulla litora sociosqu blandit quis.<br />
Mollis posuere sociis sed enim donec nunc eros euismod lacus non vel duis aliquam montes praesent condimentum.<br />
Dictumst. @Convallis.<br />
$var0 <br />
$var1 <br />
$var2 <br />
</p>
EOD;

// Plaint text input to TXT
$nowdoc = <<<'EOD'
<p>Facilisis pretium proin, torquent dignissim mattis. Nulla litora sociosqu blandit quis.<br />
Mollis posuere sociis sed enim donec nunc eros euismod lacus non vel duis aliquam montes praesent condimentum.<br />
Dictumst. @Convallis.<br />
$var0 <br />
$var1 <br />
$var2 <br />
</p>
EOD;

var_dump($heredoc, '<br />', $nowdoc);
var_dump(strlen($var1));
var_dump(str_word_count($var2));
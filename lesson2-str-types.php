<?php
// File creation date is : 9/14/15 (mm/dd/yy)

$text1 = 'text1';
$text2 = 'text2';
$text3 = 'text3';

// the best option (html with php)
$heredoc = <<<EOD
<p>Facilisis pretium proin, torquent dignissim mattis. Nulla litora sociosqu blandit quis.<br />
Mollis posuere sociis sed enim donec nunc eros euismod lacus non vel duis aliquam montes praesent condimentum.<br />
Dictumst. @Convallis.<br />
$text1 <br />
$text2 <br />
$text3 <br />
</p>
EOD;

$nowdoc = <<<'EOD'
<p>Facilisis pretium proin, torquent dignissim mattis. Nulla litora sociosqu blandit quis.<br />
Mollis posuere sociis sed enim donec nunc eros euismod lacus non vel duis aliquam montes praesent condimentum.<br />
Dictumst. @Convallis.<br />
$text1 <br />
$text2 <br />
$text3 <br />
</p>
EOD;

var_dump($heredoc, '<br />', $nowdoc);
var_dump(strlen($text1)); // number of letters
var_dump(str_word_count($text2));  // number of words
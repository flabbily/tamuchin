<?php

echo 'Samurai Engineer';

echo '<br>';

echo 'PHP is suitable for beginners,
it is a language specialized for the Web.';

echo '<br>';

//変数を指定
$str1 = 'Samurai';
$str2 = 'Engineer';
echo 'this is '.$str1.' '.$str2.' blog.';

echo '<br>';

//配列を指定
$fruits = [0=>'apple', 1=>'orange', 2=>'melon'];
echo $fruits[2];

echo '<br>';

//複数文字列指定。（全て連結しても構いません）
echo 'Today ', 'is ', 'very ', 'nice ', 'the weather.', chr(10);

echo '<br>';

//ヒアドキュメントでの出力
echo <<<END
I slept well yesterday,
but I could not sleep
well today.
END;

?>

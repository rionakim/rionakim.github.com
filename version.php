<?php
echo (version_compare(phpversion(), '5.2.4', '>=')) ? '호환 가능' : '호환 불가';
echo ' : '.phpversion();

<?php
$banner = "\033[93m____  _            _       ____          _
| __ )| | __ _  ___| | __  / ___|___   __| | ___ _ __
|  _ \| |/ _` |/ __| |/ / | |   / _ \ / _` |/ _ \ '__|
| |_) | | (_| | (__|   <  | |__| (_) | (_| |  __/ |
|____/|_|\__,_|\___|_|\_\  \____\___/ \__,_|\___|_|

    _
   / \   _ __   ___  _ __  _   _ _ __ ___   ___  _   _ ___
  / _ \ | '_ \ / _ \| '_ \| | | | '_ ` _ \ / _ \| | | / __|
 / ___ \| | | | (_) | | | | |_| | | | | | | (_) | |_| \__ \
/_/   \_\_| |_|\___/|_| |_|\__, |_| |_| |_|\___/ \__,_|___/
                           |___/
                           
author : mr.BCA Unknown
Youtube : Black Coders anonymous\n";
system('clear');
echo $banner;
echo "\033[95mmasukan option\n";
echo "\033[95m[1] Deface By BCA
[2] Python install
[3] Spam Call (1)
[4] Spam Call (2)\n";
echo "\033[95mmasukan pilihan : ";
$pill = trim(fgets(STDIN));
if($pill == 1){
	system('git clone https://github.com/BlackCyberAnonim/BCASCRIPT');
}
if($pill == 2){
	system('pkg install python && pkg install python2 && pkg install python3');
}
if($pill == 3){
	system('git clone https://github.com/Aditya021/SpamCall');
}
if($pill == 4){
	system('git clone https://github.com/KANG-NEWBIE/C-SpamMasal');
}
?>
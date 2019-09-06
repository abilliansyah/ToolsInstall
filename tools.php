<?php
$banner = "\033[95m____  _            _       ____          _
| __ )| | __ _  ___| | __  / ___|___   __| | ___ _ __
|  _ \| |/ _` |/ __| |/ / | |   / _ \ / _` |/ _ \ '__|
| |_) | | (_| | (__|   <  | |__| (_) | (_| |  __/ |
|____/|_|\__,_|\___|_|\_\  \____\___/ \__,_|\___|_|

\033[91m    _
   / \   _ __   ___  _ __  _   _ _ __ ___   ___  _   _ ___
  / _ \ | '_ \ / _ \| '_ \| | | | '_ ` _ \ / _ \| | | / __|
 / ___ \| | | | (_) | | | | |_| | | | | | | (_) | |_| \__ \
/_/   \_\_| |_|\___/|_| |_|\__, |_| |_| |_|\___/ \__,_|___/
                           |___/
                           
\033[95mauthor : mr.BCA Unknown
\033[91mYoutube : Black Coders anonymous\n";
system('clear');
echo $banner;
echo "\033[91mmasukan option\n";
echo "\033[95m[1] Deface By BCA
[2] Python install
[3] Spam Call (1)
[4] Spam Call (2)\n";
echo "\033[95mmasukan pilihan : ";
$pill = trim(fgets(STDIN));
if($pill == 1){
	system('git clone https://github.com/BlackCyberAnonim/BCASCRIPT');
	system('php tools.php');
	print "masukan pilihan : ";
}
if($pill == 2){
	system('pkg install python && pkg install python2 && pkg install python3');
	system('php tools.php');
	print "masukan pilihan : ";
}
if($pill == 3){
	system('git clone https://github.com/Aditya021/SpamCall');
	system('php tools.php');
	print "masukan pilihan : ";
}
if($pill == 4){
	system('git clone https://github.com/KANG-NEWBIE/C-SpamMasal');
	system('php tools.php');
	print "masukan pilihan : ";
}
?>
<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      \033[01;33m
     \033[01;31m \033[01;33m⡀
⠀⢠⡏⠉⡇⡏⠉⣉⡉⠉⢳⡄⢻⡍⠙⣧⣴⠟⢉⡿⠁⠀⢠⣶⣿⣿⣿⣿⠀⢠⣾⣿⣿⣿⣿⠘⣿⣿⡇⢸⣿⣿⠃⣿⣿⡇⠀⣿⣿⡇⣴⣿⣿⠿⣿⣿⠎⣿⣿⠀⠀⣿⣿⡇
⠀⣸⠁⢸⢣⠛⢀⡏⣨⠂⢀⡧⠀⢻⡀⠈⢁⡴⠋⠀⠀⢀⣿⣿⠏⠀⣿⣿⢠⣿⣿⠁⢀⣿⣿⠀⠘⣿⣿⣾⣿⠃⠀⣿⣿⡇⠀⣿⣿⡇⣿⣿⣧⣤⣀⡁⠀⣿⣿⣤⣤⣿⣿⡇
⠀⡟⠀⡾⢸⠀⢀⣀⣀⣠⠞⠁⢀⡼⠉⡀⠈⣧⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⠀⠀⠸⣿⣿⠃⠀⠀⣿⣿⡇⠀⣿⣿⡇⢨⡙⠛⠿⣿⣿⡆⣿⣿⠛⠛⣿⣿⡇
⢰⠇⠀⡇⡟⠀⣼⠀⠀⠀⢀⡴⠋⣠⠞⠻⡄⠈⢧⠀⠀⠀⣿⣿⡆⠀⣿⣿⡘⣿⣿⡀⢀⣿⣿⠀⠀⢀⣿⣿⡀⠀⠀⠹⣿⣿⣾⣿⣿⠃⢿⣿⣶⣾⣿⡿⢃⣿⣿⠀⠀⣿⣿⡇
⠈⠁⠘⠁⠉⠀⠉⠀⠀⠀⠋⠁⠈⠁⠀⠀⠉⠀⠈⠃⠀⠀⠈⠉⠁⠈⠉⠉⠀⠈⠉⠁⠈⠉⠉⠀⠀⠀⠉⠉⠁⠀⠀⠀⠈⠉⠉⠉⠀⠀⠀⠉⠉⠉⠉⠀⠀⠉⠉⠀⠀⠉⠉⠁


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m-------------- \033[01;32mTrack IPLocation\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mTool Name \033[01;37m:- \033[01;36mIPX
         \033[01;33mAuthor \033[01;37m:- \033[01;36mAayush_xid_su
         \033[01;33mPowered By \033[01;37m:- \033[01;36mXidiotic

 \033[01;33mIPX\033[01;32m is use \033[01;36mip-api \033[01;32mto retrive any ip address information. Our system will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $getact = readline('  IPX >> ');
  menu();
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating IPX.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/aayush-xid-su/Ip-x.git");
  system("cd ~/ && sudo git clone https://github.com/aayush-xid-su/Ip-x.git");
  system("cd ~/Ip-x && sh install");
  logo();
  echo "\n\033[01;32m              IPX updated !!!\033[01;37m\n";
  sleep(1);
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mTrack IP Address.\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mTrack Your IP Address.\n";
  echo "   \033[01;32m[ \033[01;37m3 \033[01;32m] \033[01;33mAbout us.\n";
  echo "   \033[01;32m[ \033[01;37m4 \033[01;32m] \033[01;33mHelp.\n";
  echo "   \033[01;32m[ \033[01;37m5 \033[01;32m] \033[01;33mUpdate IPX.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mExit \n\n\033[00m";
  $inp = readline('  IPX >> ');
  if ($inp=="x" || $inp=="exit") {
    echo "\n\033[01;31m  Exiting .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  Bye ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trx();
  } else if ($inp=="2") {
    trax();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else if ($inp=="5") {
    upd();
  } else {
    echo "\n  \033[01;31mErr : Invalid Command \033[01;32m'$inp'\033[00m";
    sleep(1);
    menu();
  }
}
menu();
?>

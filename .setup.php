<?php
include("modules/system.php");
class set {
  public function Setup() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/IPX");
      system("rm -rf /data/data/com.termux/files/usr/bin/ipx");
      system("rm -rf /data/data/com.termux/files/usr/bin/tracex");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/ipx");
      system("sudo rm -rf /usr/bin/tracex");
      system("sudo rm -rf /usr/share/IPX");
    } else {
      system("rm -rf /usr/bin/ipx");
      system("rm -rf /usr/bin/tracex");
      system("rm -rf /usr/share/IPX");
    }
    
    // adding bin file
    if ($system=="termux") {
      system("mv -v modules/ipx /data/data/com.termux/files/usr/bin/");
      system("mv -v modules/tracex /data/data/com.termux/files/usr/bin/");
      system("chmod +x /data/data/com.termux/files/usr/bin/ipx trace");
      system("chmod +x /data/data/com.termux/files/usr/bin/tracex");
    } elseif ($system=="ubuntu") {
      system("sudo mv -v modules/ipx /usr/bin/");
      system("sudo mv -v modules/tracex /usr/bin/");
      system("sudo chmod +x /usr/bin/ipx");
      system("sudo chmod +x /usr/bin/tracex");
    } else {
      system("mv -v modules/ipx /usr/bin/");
      system("mv -v modules/tracex /usr/bin/");
      system("chmod +x /usr/bin/ipx");
      system("chmod +x /usr/bin/tracex");
    }

    // copy files from IP-Tracer to .IP-Tracer directory.
    if ($system=="termux") {
      system("mkdir /data/data/com.termux/files/usr/share/IPX");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /data/data/com.termux/files/usr/share/IPX/");
    } elseif ($system=="ubuntu") {
      system("sudo mkdir /usr/share/IPX/");
      system("sudo chmod +x * *.* .*.*");
      system("sudo mv -v * *.* .*.* /usr/share/IPX/");
    } else {
      system("mkdir /usr/share/IPX");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /usr/share/IPX/");
    }
    
    // removing IP-Tracer directory
    if ($system=="termux") {
      system("cd .. && rm -rf IPX");
    } elseif ($system=="ubuntu") {
      system("cd .. && sudo rm -rf IPX");
    } else {
      system("cd .. && rm -rf IPX");
    }
  }
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


    \033[01;37m}\033[01;31m--------------------------------------\033[01;37m{
 }\033[01;31m------------- \033[01;32mTrack IPLocation\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{

\033[00m
EOL;

    if (file_exists("/usr/bin/ipx") || file_exists("/data/data/com.termux/files/usr/bin/ipx")) {
      echo "\033[01;32m      IPX installed Successfully !!!\033[00m\n";
      echo <<<EOL

\033[01;37m ----------------------------------------------
|         \033[01;36mcommand\033[01;37m       |        \033[01;36mUse\033[01;37m           |
 ----------------------------------------------
| \033[01;32mtracex -m\033[01;37m              | \033[01;33mTrack your IP\033[01;37m        |
| \033[01;32mtracex -t <traget-ip>\033[01;37m  | \033[01;33mTrack IP\033[01;37m             |
| \033[01;32mtracerx --help\033[01;37m         | \033[01;33mFor more information\033[01;37m |
 ----------------------------------------------

\033[01;31mNote :- ip-api will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
    } else {
      echo "\n\n\033[01;31m  Sorry IPX is not installed !!!\033[00m";
    }
  }
}
$a=new set;
$a->Setup();
$a->logo();
?>

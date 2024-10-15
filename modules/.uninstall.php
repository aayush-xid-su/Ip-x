<?php
include("modules/system.php");
class un {
  public function uni() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/IPx");
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

    if (file_exists("/usr/bin/ipx")) {
      echo "\n\033[01;31m        Sorry IPX is not removed !!!\033[00m\n";
    } else if(file_exists("/data/data/com.termux/files/usr/bin/ipx")) {
      echo "\n\033[01;31m        Sorry IPX is not removed !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        IPX is uninstalled !!!\033[00m\n";
    }
  }
}
$a=new un;
$a->uni();
$a->logo();
?>

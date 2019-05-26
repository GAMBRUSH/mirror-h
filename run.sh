#!/bin/bash
echo -e '\033[0;36m#############	\033[91m| \033[0mAuto Push Rank mirror-h.org';
echo -e '\033[0;36m# \033[93m|P|U|S|H| \033[0;36m#	\033[91m| \033[92m@Author : Gambrush';
echo -e '\033[0;36m# \033[93m|R|A|N|K| \033[0;36m#	\033[91m| \033[92m@Github : https://github.com/gambrush'; 
echo -e '\033[0;36m#############	\033[91m| \033[92m@Version : 1.0';
echo '';
echo -e 'Pilih Opsi:';
echo -e '\033[91m[\033[0m1\033[91m] \033[92mSubdomain Generator';
echo -e '\033[91m[\033[0m2\033[91m] \033[92mSubmiter mirror-h';
echo '';
read -p "Mau yang ena ena: " here
if [ $here -eq 1 ];
	then
		clear && chmod +x subdo.php && php subdo.php
elif [ $here -eq 2 ];
	then
		clear && chmod +x mirrorh.py && python2 mirrorh.py
fi
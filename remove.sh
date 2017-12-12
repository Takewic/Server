#!/bin/bash
programas="apache2 speedtest-cli stress memtester lshw dialog htop hdparm sysbench"
for x in echo $programas ; do
	apt-get remove $x --purge -y
	apt-get purge $x -y
done

apt-get autoremove -y
rm -rf /var/www/html/*
echo "Removendo php 7.0"
apt-get purge php7.0 php7.0-cli libapache2-mod-php7.0 php7.0-mysql phpmyadmin
rm -rf /etc/php/7.0 
clear
echo "O programa foi removido com sucesso."

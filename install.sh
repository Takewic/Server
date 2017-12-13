#!/bin/bash
programas="apache2 speedtest-cli stress memtester lshw dialog htop dparm sysbench"




clear
echo "Aguarde um momento..." 
echo 
echo "1) Isso fara o download e a configuração do apache2 e o php7 para o funcionamento do programa Takewic Fast Tester na web."
echo "2) É necessario estar como ROOT para prosseguir."
echo "3) Você precisara ter acesso a internet."
echo "_________________________________________________________________________________________________________________________"
read -p "Pressione [enter] para continuar"
[[ $UID -ne 0 ]] && { echo "A instalação terminará por falta de privilégios" ; exit 0 ; }

echo "Update"
apt-get update
for x in $(echo $programas) ; do
	echo "Instalando $x"
	apt-get install $x -y || falhou instalação $x
done
echo "Instalação php7"

apt-get install php7.0-fpm php7.0-mysql php7.0-common php7.0-gd php7.0-json php7.0-cli php7.0-curl libapache2-mod-php7.0 -y
a2enmod php7.0
cp /etc/apache2/conf-enabled/charset.conf charset.conf.bkp || falhou copia
echo "AddDefaultCharset UTF-8" >> /etc/apache2/conf-enabled/charset.conf
$(systemctl restart apache2)
cp -R /var/www/html /var/www/html.bkp
cp -R ./html /var/www
cp ./.html/* /var/www/html

echo "A instalação foi concluida."


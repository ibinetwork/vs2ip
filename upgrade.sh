#!/bin/bash
clear
echo "AGUARDE..."
echo ""
yum install epel-release
yum install wget mtr vim mlocate nmap tcpdump mc nano lynx rsync minicom screen htop subversion deltarpm cowsay -y
clear
echo ""
clear
cowsay "Patch para VS2IP"
echo ""
echo "Autor Rafael Tavares - Empresa Ibinetwork Informática"
echo "https://www.ibinetwork.com.br / 011 3042-1234"
echo "======================================================="
echo ""
sleep 20
echo ""
cowsay "INICIANDO O PROCESSO..."
echo ""
git https://github.com/ibinetwork/vs2ip.git /usr/src/vs2ip
clear
cowsay "EXECUTANDO O PATCH-BR"
sleep 5
wget -O - https://github.com/ibinetwork/IssabelBR/raw/master/patch-issabelbr.sh | bash
clear
cowsay "PATCH-BR EXECUTADO COM SUCESSO"
sleep 5
rsync --progress -r /usr/src/vs2ip/web3/ /var/
echo "Atualizando tema e idioma no Issabel"
( cat << EOJ
BEGIN TRANSACTION;
update "settings" set value='br' where key='language';
update "settings" set value='vs2ip' where key='theme';
update "settings" set value='R$' where key='currency';
COMMIT;
.exit
EOJ
) | sqlite3 /var/www/db/settings.db
rm -Rf /usr/src/vs2ip
clear
echo ""
cowsay "SCRIPT VS2IP EXECUTADO COM SUCESSO!"
echo ""

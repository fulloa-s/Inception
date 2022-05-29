rm /etc/vsftpd.conf
mv /tmp/vsftpd.conf /etc/vsftpd.conf

adduser prova --gecos "First Last,RoomNumber,WorkPhone,HomePhone" --disabled-password
echo "prova:provolone" | chpasswd
echo "prova" | tee -a /etc/vsftpd.userlist

service vsftpd restart
bash
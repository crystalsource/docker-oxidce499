#!/bin/bash

/usr/bin/mysqld_safe > /dev/null 2>&1 &


RET=1
while [[ RET -ne 0 ]]; do
    echo "=> Connection established?"
    sleep 5
    mysql -uroot -e "status" > /dev/null 2>&1
    RET=$?
done

mysql -uroot -e "CREATE USER 'oxid'@'%' IDENTIFIED BY 'oxid'"
mysql -uroot -e "GRANT ALL PRIVILEGES ON *.* TO 'oxid'@'%' WITH GRANT OPTION"
mysql -uroot -e "FLUSH PRIVILEGES"


echo "##################################################################"
echo "## MySQL User 'oxid' with password 'oxid' successfully created  ##"
echo "##################################################################"

mysqladmin -uroot shutdown
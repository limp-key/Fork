#!/bin/bash

User=$1
Password=$2

OldDataBaseName=$3
NewDataBaseName=$4

mysqldump -u $User -p $OldDataBaseName > $OldDataBaseName.sql
mysql -u $User -p $NewDataBaseName < $OldDataBaseName.sql

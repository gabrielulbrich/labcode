#!/bin/bash


INSTANCE=$(docker ps | grep mysql-lab | cut -f1 -d' ')


if [ "$INSTANCE" != "" ]; then
	docker exec -it $INSTANCE bash -c "mysqldump -u root -pdba ambienteteste | gzip > /docker-entrypoint-initdb.d/ambienteteste.sql.gz"
	ls -l data/
else
	echo "container mysql-lab is not running"
fi

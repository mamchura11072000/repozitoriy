#!/bin/bash
echo "Content-type: text/plain\n";
echo '';
cd /var/www/domains/alex.qzo.su/ || exit > /dev/null
git reset --hard > /dev/null
git pull > /dev/null
chmod -R 755 /var/www/domains/alex.qzo.su > /dev/null
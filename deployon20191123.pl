#!/bin/bash
echo "Content-type: text/plain\n";
echo '';
cd /var/www/domains/alex.qzo.su/ || exit > /dev/null
git reset --hard > /dev/null
git pull https://github.com/mamchura11072000/repozitoriy.git > /dev/null
#git@bitbucket.org:gafurovstudio/g2.git

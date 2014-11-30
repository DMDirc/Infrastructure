#!/bin/bash
echo "127.0.0.1 reports.dmdirc.com" >> /etc/hosts
curl -sIL -o /dev/null -w "%{http_code}\n" http://reports.dmdirc.com | grep 200 > /dev/null
if [ $? != 0 ]; then
  echo 'Failed'
  exit 1
fi

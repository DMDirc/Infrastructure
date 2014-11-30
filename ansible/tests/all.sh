#!/bin/bash
while read p; do
	if [[ "$p" =~ .*?:\ (.*).yml ]]; then
		yml="./tests/${BASH_REMATCH[1]}"
		echo "Testing: $yml"
		if [[ -f $yml.sh ]]; then
			$yml.sh
		fi
	fi
done < all.yml

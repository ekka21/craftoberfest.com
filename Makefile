d: deploy

deploy:
	ssh do "cd /var/www/domains/craftoberfest2016 && git fetch && git reset --hard origin/master"

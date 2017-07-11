d: deploy

deploy:
	ssh -i ~/.ssh/aws/personal/vpc.pem ubuntu@craftoberfestcom 'cd /var/www/domains/craftoberfest.com && git fetch && git reset --hard origin/master'

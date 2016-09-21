.PHONY: test

/home/travis/phpunit:
	wget "https://phar.phpunit.de/phpunit-old.phar" --output-document="$@"
	chmod u+x $@

vendor/autoload.php:
	composer self-update
	composer self-update --stable
	composer update --verbose

test: /home/travis/phpunit vendor/autoload.php
	phpenv global 5.5
	/home/travis/phpunit --bootstrap vendor/autoload.php LockExtensionTest.php

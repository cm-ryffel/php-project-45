brain-games: 
	php bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even:
	php bin/brain-even;

install:
	composer install

dump:
	composer dump autoload
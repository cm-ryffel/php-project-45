validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

install:
	composer install

dump:
	composer dump autoload

brain-games: 
	php bin/brain-games

brain-even:
	php bin/brain-even;

brain-calc:
	php bin/brain-calc;

brain-gcd:
	php bin/brain-gcd;

brain-progression:
	php bin/brain-progression;

brain-prime:
	php bin/brain-prime;


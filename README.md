1) Install PHPUnit: First, make sure PHPUnit is installed globally or locally in your project. You can install PHPUnit using Composer by running:
    composer require --dev phpunit/phpunit
If you don't have Composer installed globally, you can install PHPUnit locally by downloading the PHAR (PHP Archive) file from the PHPUnit GitHub releases page https://github.com/sebastianbergmann/phpunit/releases and placing it in your project directory.


2) Verify Installation: After installation, verify that PHPUnit is available in your environment by running:
   vendor/bin/phpunit --version
If PHPUnit is installed correctly, this command should display the PHPUnit version number.

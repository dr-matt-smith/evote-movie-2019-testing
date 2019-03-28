# evote - login - Acceptance and Unit Testing


## Overview

The steps below are a quickstart setup for Codeception, using settings that have been created for you.

You could, of course, setup Codeception yourself from scratch using the files and instructions at the Codeception project website:

- [https://codeception.com/](https://codeception.com/)


## Setup Codeception from Matt's Moodle files

1. Download the 'bdd.zip' file from the module Moodle page

1. Unzip the file and copy the contents into your PHP web project:

    - file `codecept.phar`
    
    - file `codeception.yml`
    
    - directory `/tests`

1. Rename file `codecept.phar` to `codecept` (if you wish - it means you can type `php codecept` rather than `php codecept.phar` ...)

1. Test Unit testing is working by running Codeception:

    - `php codecept run unit`
    
    ```bash
         php codecept run unit
        Codeception PHP Testing Framework v2.5.2
        Powered by PHPUnit 6.5.13 by Sebastian Bergmann and contributors.
        Running with seed: 
        
        
        Unit Tests (1) 
        -------------------------------------------------
        TICK - FirstUnitTest: One plus one equals two (0.00s)        
        -------------------------------------------------
        Time: 213 ms, Memory: 10.00MB
        
        OK (1 test, 1 assertion)
    ```
    
1. Test Acceptance testing is working by:

    - running your web server in one terminal window
    
        ```bash
            php -S localhost:8000 -t public
        ```
        
    - running Codeception acceptance tests by typing `php codecept run unit`
    
       ```bash
           php codecept run acceptance
           Codeception PHP Testing Framework v2.5.2
           Powered by PHPUnit 6.5.13 by Sebastian Bergmann and contributors.
           Running with seed: 
           
           
           Acceptance Tests (1) 
           -------------------------------------------------
           TICK - FirstCest: Homepage working (0.02s)
           -------------------------------------------------
           Time: 210 ms, Memory: 12.00MB
           
           OK (1 test, 1 assertion)
       ```
    
1. Run all tests, with step-by-step details for Acceptance tests with the `--steps` option:

    - `php codecept run --steps`
    
        ```bash
            Acceptance Tests (1) 
            -------------------------------------------------
            FirstCest: Homepage working
            Signature: FirstCest:homepageWorking
            Test: tests/acceptance/FirstCest.php:homepageWorking
            Scenario --
              I am on page "/"
              I see "home page"
              PASSED 
        ```
    

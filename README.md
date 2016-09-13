# _Change Decisionator_

#### _Web app that determines what denomination of coins (American currency) are returned to a user._

#### By _**Kyle Fisher, Rebecca Allen**_


## Description

_Users will provide a number representing an amount in US currency. The program will determine the change returned to them using the most efficient combination of coins.

## Setup/Installation Requirements

* _If you wish to view the source code locally on your machine please follow the following steps:_

  +  _1). Navigate to the directory in which you want the addressBookPHP project to reside._

  +  _2). Enter the following command into your terminal:_
        _git clone https://github.com/FisherKyle/ChangeDecisionator.git_

  +  _3). Navigate to the titleCase directory, and execute the following command in the terminal:_
          _composer install_

  +  _4). Navigate to the web directory and start your local host by executing the following command in your terminal:_
          _php -S localhost:8000_

  +  _5). Open up the browser of your choice and go to the following url:_
          _http://localhost:8000/_

  +  _6). If you wish to look at the source code, feel free to browse through the files in the titleCase directory_

## Specs

* _User inputs a number under **5**_
    + _example input: **1**_
    + _example output: "change: pennies: **1**"_

* _User inputs the number **5**_
    + _example input: **5**_
    + _example output: "change: nickels:**1**"_

* _User inputs a number greater than **5** but less than **10**_
    + _example input: **6**_
    + _example output: "change: nickels: **1**, pennies: **1**"_

* _User inputs the number **10**_
    + _example input: **10**_
    + _example output: "change: dimes: **1**"_

* _User inputs a number between **10** and **25**_
    + _example input: **19**_
    + _example output: "change: dimes: **1**, nickels: **1**, pennies: **4**_

* _User inputs the number **25**_
    + _example input: **25**_
    + _example output: "change: quarters: **1**"_

* _User inputs a number larger than **25**_
    + _example input: **69**_
    + _example output: "change: quarters: **2**, dimes: **1**, nickels: **1**, pennies: **4**"_

## Known Bugs

_None yet_


## Support and Contact Details

_Please feel free to contact us through github accounts (FisherKyle, RAAllen) or at the following email:_
    _kyle@kylefisher.com_
    _rebeccazarsky@gmail.com_

## Technologies Used

* _PHP_
* _CSS_
* _HTML_
* _silex v~2.0_
* _twig v~1.24.1_
* _bootstrap v3.3.7_


### License

* GPLV3

addressBookPHP Copyright (c) 2016 **_Kyle Fisher, Rebecca Allen_**

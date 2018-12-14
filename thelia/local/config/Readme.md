Readme
======

## This is the repository of Thelia configuration. All the pull requests on this repo will be ignored.
### If you want to create a project, please take a look at [thelia/thelia-project](https://github.com/thelia/thelia-project)
### If you want to contribute to Thelia, please take a look at [thelia/thelia](https://github.com/thelia/thelia)

Thelia
------
[![Build Status](https://travis-ci.org/thelia/thelia.png?branch=master)](https://travis-ci.org/thelia/thelia) [![License](https://poser.pugx.org/thelia/thelia/license.png)](https://packagist.org/packages/thelia/thelia) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/thelia/thelia/badges/quality-score.png?s=61e3e04a69bffd71c29b08e5392080317a546716)](https://scrutinizer-ci.com/g/thelia/thelia/)

[Thelia](https://thelia.net/) is an open source tool for creating e-business websites and managing online content. This software is published under LGPL.

This is the new major version of Thelia.

You can download this version and have a try or take a look at the  source code (or anything you wish, respecting LGPL).  See http://thelia.net/ web site for more information.

A repository containing all thelia modules is available at this address : https://github.com/thelia-modules

Requirements
------------

* php 5.5
    * Required extensions :
        * PDO_Mysql
        * openssl
        * intl
        * gd
        * curl
        * calendar
        * dom
        * fileinfo
    * safe_mode off
    * memory_limit at least 128M, preferably 256.
    * post_max_size 20M
    * upload_max_filesize 2M
* apache 2
* mysql

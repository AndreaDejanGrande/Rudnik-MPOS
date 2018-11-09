

Description
===========

This MPOS configuration is made to run with the [vDinar Stratum Mining](https://github.com/AndreaDejanGrande/Rudnik) software.
Due to some slightly complicated aspects with the vDinar block structure and the related mining software, these preconfigured MPOS files
are published as the remaining requirements to make things easier for new vDinar pool owners.
You can find the original MPOS repository [here](https://github.com/MPOS/php-mpos).

**About MPOS**
MPOS is a web based Mining Portal for various crypto currencies.
It was created by [TheSerapher](https://github.com/TheSerapher) and has hence grown quite large.
Recently it was migrated into a Github Organization to make development easier. It's a community driven open source project.
Support can be requested on IRC at https://webchat.freenode.net/?channels=#mpos - Be **PATIENT**:
people listed in this channel may currently be inactive but most users there have offline logging of messages.
They **will** see your questions and answer if they can. Don't join, ask the question and leave.
Sit around if you want answers to your questions!

Requirements
============

This setup has been tested on Ubuntu 12.04, Ubuntu 13.04 and CentOS.
It should also work on any related distribution (RHEL, Debian).

Be aware that `MPOS` is **only** for pooled mining. Solo Mining is not
supported. They will never match an upstream share, solo miners do not create
any shares, only blocks. Expect weird behavior if trying to mix them. See #299
for full information.

* 64-bit system
 * Otherwise some coins will display wrong network hashrates
* Apache2
 * libapache2-mod-php5
* PHP 5.4+
 * php5-json
 * php5-mysqlnd
 * php5-memcached
 * php5-curl
* MySQL Server
 * mysql-server
* memcached
* stratum-mining
* litecoind

Installation
============

Please take a look at the [Quick Start Guide](https://github.com/TheSerapher/php-mpos/wiki/Quick-Start-Guide). This will give you an idea how to setup `MPOS`. Please be aware that the `master` branch is our currently considered stable system while `development` is used as a test bed for all upcoming changes for `master`. If you wish to run a stable, well tested system ensure you run `git checkout master`. If you decide to stick to the `development` branch with bleeding edge code and potential bugs, just `git clone` the project.

Customization
=============

This project was meant to allow users to easily customize the system and templates. Hence no upstream framework was used to keep it as simple as possible.
If you are just using the system, there will be no need to adjust anything. Things will work out of the box! But if you plan on creating
your own theme, things are pretty easy:

* Create a new theme folder in `templates/`
* Create a new site_assets folder in `public/site_assets`
* Create your own complete custom template or copy from an existing one
* Change your theme in the `Admin Panel` and point it to the newly created folder

The good thing with this approach: You can keep the backend code updated! Since your new theme will never conflict with existing themes, a simple git pull will
keep your installation updated. You decide which new feature you'd like to integrate on your own theme. Bugfixes to the code will work out of the box!

Other customizations are also possible but will require merging changes together. Usually users would not need to change the backend code unless they wish to work
on non-existing features in `MPOS`. For the vast majority, adjusting themes should be enough to highlight your pool from others.

In all that, I humbly ask to keep the `MPOS` author reference and Github URL intact.

Team Members
============

vDinar MPOS adaption developer and project owner: [AndreaDejanGrande](https://github.com/AndreaDejanGrande)
Original MPOS author and project owner: [TheSerapher](https://github.com/TheSerapher) - Sebastian Grewe

Developers:

* [AndreaDejanGrande](https://github.com/AndreaDejanGrande)
* [nrpatten](https://github.com/nrpatten)
* [Aim](https://github.com/fspijkerman)
* [raistlinthewiz](https://github.com/raistlinthewiz)
* [xisi](https://github.com/xisi)
* [nutnut](https://github.com/nutnut)
* [obigal](https://github.com/obigal)
* [iAmShorty](https://github.com/iAmShorty)
* [rog1121](https://github.com/rog1121)
* [neozonz](https://github.com/neozonz)

Donations
=========

Donations to the original MPOS project that are going directly to [TheSerapher](https://github.com/TheSerapher), the author of the project:

* TheSerapher BTC address: `1HuYK6WPU8o3yWCrAaADDZPRpL5QiXitfv`
* TheSerapher LTC address: `Lge95QR2frp9y1wJufjUPCycVsg5gLJPW8`

License and Author
==================

Copyright 2012, Sebastian Grewe
Copyright 2018, vDinar Developers

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

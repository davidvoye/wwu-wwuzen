#Western Washington College Theme WWUZEN#
A Drupal Zen Sub-Theme.

##Dependencies##
  * [Zen 5.x](http://drupal.org/project/zen)
  * [Menu Block](http://drupal.org/project/menu_block)
  * [Accordion Menu](http://drupal.org/project/accordion_menu)
  * [jQuery Update](http://drupal.org/project/jquery_update)
  * [GSA](https://drupal.org/project/google_appliance)
  * [WWU Zen GSA](https://bitbucket.org/wwuweb/wwu-google-search-appliance)

##Configuration##
1. Add a main menu block
    - Structure, Blocks -> Add Menu Block (Near the top of the screen) - Configure as follows:
        - Block Title &lt;none&gt;
        - Menu -> Main Menu
        - Starting Level -> 1st level (primary)
        - Max depth: Unlimited
    - Advanced Options:
        - Check "Expand all children of this tree."
        - Fixed Parent item -> Main Menu
    - Region Settings:
        - WWUZen -> Navigation bar
2. Enable jQuery update and select jQuery version 1.7 as the library to use.
    - Configuration -> Development -> jQuery update
        - jQuery Version -> 1.7
        - jQuery compression level -> Production (minified)
        - jQuery and jQuery UI CDN -> Google
3. Enable the Google Search Appliance (GSA) Module
    - Modules
        - Check the box next to Google Search Appliance
        - Click the save button
4. Enable the WWU Google Search Appliance Module
    - Modules
        - Check the box next to WWU Zen Google Search Appliance
        - Click the save button


###Copyright Statement###

Copyright 2015 Western Washington University Web Technologies Group Licensed under the Educational Community License, Version 2.0 (the "License") you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.osedu.org/licenses/ECL-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
or implied. See the License for the specific language governing permissions and limitations under the License.

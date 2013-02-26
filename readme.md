#Western Washington College Theme WWUZEN#
A Drupal Zen Sub-Theme.

##Dependencies##
  * [Zen 5.x](http://drupal.org/project/zen)
  * [Menu Block](http://drupal.org/project/menu_block)
  * [Accordion Menu](http://drupal.org/project/accordion_menu)

##Configuration##
1. Disable the main menu in the theme appearance settings.
    - Appearance -> Settings for WWU Zen -> Toggle Display -> Main Menu
2. Disable the secondary menu in the theme appearance settings.
    - Appearance -> Settings for WWU Zen -> Toggle Display -> Secondary Menu
3. Add a main menu block 
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


###Copyright Statement###

Copyright 2013 Western Washington University Web Technologies Group Licensed under the Educational Community License, Version 2.0 (the "License") you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.osedu.org/licenses/ECL-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
or implied. See the License for the specific language governing permissions and limitations under the License.
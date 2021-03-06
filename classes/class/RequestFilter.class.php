<?php
# Radio Panel Alpha - is an OpenSource Radio Panel.
# Radio Panel Alpha will be base part of the complete Radio Streaming Administration tool (Open Radio Control Panel)
#
# Copyright (C) 2010-2013 by James Heinrich - http://www.getid3.org
# Copyright (C) 2010-2013 by Max S Alyohin - http://radiocms.ru
# Copyright (C) 2013 by OpenRCP - http://open-rcp.ru
#
#
# The contents of this file are subject to the Mozilla Public License
# Version 1.1 (the "License"); you may not use this file except in
# compliance with the License. You may obtain a copy of the License at
# http://www.mozilla.org/MPL/
#
# Software distributed under the License is distributed on an "AS IS"
# basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
# License for the specific language governing rights and limitations
# under the License.
#
# The Original Code is "RadioCMS".
#
# The Initial Developer of the Original Code is Max S Alyohin.
# Portions created by Initial Developer are Copyright (C) 2010-2013
# by Max S Alyohin. All Rights Reserved.
#
# Product contains getID3 project code are Copyright (C) 2010-2013 by
# James Heinrich. All Rights Reserved.
#
# Portions created by the OpenRCP Development Team (C) 2013 by
# Open Radio Control Panel. All Rights Reserved.
#
# The OpenRCP Home Page is:
#
#    http://open-rcp.ru
#
	class RequestFilter {
	    
        public static function create() {
            return new self();
        }
        
		public function __construct() {			$this->filter = Filter::create();
			$this->apply();		}
        		public function apply() {			foreach ($_POST as $key => $value) {
				if (!is_array($value)) {
					unset($_POST[$key]);
					$_POST[$key] = $this->filter->apply($value);
				}
			}
			foreach ($_GET as $key => $value) {
				if (!is_array($value)) {
					unset($_GET[$key]);
					$_GET[$key] = $this->filter->apply($value);
				}
			}
			foreach ($_COOKIE as $key => $value) {
				if (!is_array($value)) {
					unset($_COOKIE[$key]);
					$_COOKIE[$key] = $this->filter->apply($value);
				}
			}		}	}



?>
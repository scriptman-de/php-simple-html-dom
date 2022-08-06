<?php

namespace ScriptmanDe\PhpSimpleHtmlDomParser;

require 'simplehtmldom_1_9_1'. DIRECTORY_SEPARATOR.'simple_html_dom.php';


class HtmlDomParser {

    /**
     * @return \simplehtmldom_1_9_1\simple_html_dom
     */
    public static function file_get_html() {
        return call_user_func_array('\simplehtmldom_1_9_1\file_get_html', func_get_args());
    }

    /**
	 * @return \simplehtmldom_1_5\simple_html_dom
	 */
	static public function str_get_html() {
		return call_user_func_array('\simplehtmldom_1_9_1\str_get_html', func_get_args());
	}
}
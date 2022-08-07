<?php

namespace ScriptmanDe\PhpSimpleHtmlDomParser;

require 'simplehtmldom'. DIRECTORY_SEPARATOR.'simple_html_dom.php';


class HtmlDomParser {

    /**
     * @return \simplehtmldom\simple_html_dom
     */
    public static function file_get_html() {
        return call_user_func_array('\simplehtmldom\file_get_html', func_get_args());
    }

    /**
	 * @return \simplehtmldom\simple_html_dom
	 */
	static public function str_get_html() {
		return call_user_func_array('\simplehtmldom\str_get_html', func_get_args());
	}
}

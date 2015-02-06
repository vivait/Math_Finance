<?php
/**
 * Singleton class to preserve given values of other variables in the callback functions
 */
class Math_Finance_FunctionParameters
{
    var $parameters = array();

    /**
    * Constructor. Should be private, so used little hack.
    *
    * @param array      Parameters (variables values of the function) to be preserved
    * @access private
    */
    private function __construct($parameters = array())
    {
        foreach ($parameters as $name => $value) {
            $this->parameters[$name] = $value;
        }
    }

    /**
    * Method to be called statically to create Singleton
    *
    * @param array      Parameters (variables values of the function) to be preserved
    * @param bool       Whether the Singleton should be reset
    * @static
    * @access public
    */
	static function &getInstance($parameters = array(), $reset = False)
	{
		static $singleton;

        if ($reset) $singleton = null;

		if (!is_object($singleton)) {
			$singleton = new Math_Finance_FunctionParameters($parameters);
		}

		return $singleton;
	}
}
?>

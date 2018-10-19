<?php
namespace makcent\AlibabaSDK;

class SDK
{
	public static $classMap = array();

	public static $router = array(
		'com.logistics' => '/com/alibaba/logistics/param/',
		'com.product' => '/com/alibaba/product/param/',
		'com.trade' => '/com/alibaba/trade/param/',
		'cn.open' => '/cn/alibaba/open/param/',
	);


	public static function schema($routers = array())
	{
		if (!empty($routers)) {
			self::$router = array_merge(self::$router, $routers);
		}

		$apis = '';
		foreach (self::$router as $namespace => $val) {
			$list = scandir(__DIR__.$val);
			foreach ($list as $filename) {
				if (!in_array($filename, array('.', '..'))) {
					$apis .= "\t'".$namespace.'.'.str_replace(".class.php", '', $filename).""."'=>'".$val.$filename."',\n";
				}
			}
		}

		$context = "<?php return array({$apis}); ?>";
		return file_put_contents(__DIR__.'\helper.php', $context);
	}

	public static function getSdk($api)
	{
		if (!isset(self::$classMap[$api])) {
			$json = include_once (__DIR__.'\helper.php');
			if (!isset($json[$api])) {
				return false;
			}
			include_once __DIR__.$json[$api];
			$className = explode('.', $api);
			return new $className[count($className)-1];
		}
		return self::$classMap[$api];
	}
}







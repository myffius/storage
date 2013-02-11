<?php

	class RJQuery
	{
		private $_source = '';

		public function ajax($url, $data = null, array $success = null, $options = array())
		{
			return '';
		}

		public function wrap($selector)
		{
			$this->_source = 'jQuery(\''.$selector.'\')';
			return $this;
		}
		public function getScript()
		{
			return $this->_source . ';';
		}

		public function addHandler($event, $handler, $method = 'on')
		{
			$this->_source .= "\r\n\t" . '.' . $method . '(\''.$event.'\', '. $this->getHandler($handler).')';
			return $this;
		}

		private function getHandler($handler)
		{
			$class  = $handler[0];
			$method = $handler[1];

			$object = new $class;
			$object->$method();
			$script = 'function(){' . "\r\n\t\t";
			return $script . $object->getScript() . "\r\n\t}";
		}

		public function __set($property, $value)
		{
			if (in_array($property, $this->getScopeEvents()))
				$this->addHandler($property, $value);
			else throw new Exception('');
		}

		private function getScopeEvents()
		{
			return array(
				'click',
				'dbclick',
				'blur',
				'focus',
				'change',
				'submit',
				'keypress',
				'keyup',
				'keydown',
			);
		}
	}